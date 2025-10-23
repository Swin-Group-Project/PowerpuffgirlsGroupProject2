<!-- 
Title: Process EOI page
Date created: 7/9/25
Last modified: 21/9/25
Author: Ryan Tay
-->

<?php
// Turn on error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php

// Connection to database "project_part2"
session_start();
require_once "settings.php";
require("skills_data.php");
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $job_reference_num = sanitize($_POST["job_reference_num"]);
    $first_name = sanitize($_POST["first_name"]);
    $last_name = sanitize($_POST["last_name"]);
    $date_of_birth = sanitize($_POST["date_of_birth"]);
    $gender = sanitize($_POST["gender"]);
    $street_address = sanitize($_POST["street_address"]);
    $suburb_town = sanitize($_POST["suburb_town"]);
    $state = sanitize($_POST["state"]);
    $postcode = sanitize($_POST["postcode"]);
    $email = sanitize($_POST["email"]);
    $phone_num = sanitize($_POST["phone_num"]);
    $other_skills = sanitize($_POST["other_skills"]);
    // Handle checkboxes: perform sanitize() on each item in skills, storing set items into an array
    $skills = $_POST['skills'] ?? [];

    // Validation
    $required_errors = [];
    $pattern_errors = [];

    // Required field validation
    $required_fields = [
        "job_reference_num" => $job_reference_num,
        "first_name" => $first_name,
        "last_name" => $last_name,
        "date_of_birth" => $date_of_birth,
        "gender" => $gender,
        "street_address" => $street_address,
        "suburb_town" => $suburb_town,
        "state" => $state,
        "postcode" => $postcode,
        "email" => $email,
        "phone_num" => $phone_num,
        "skills" => $skills
    ];

    foreach ($required_fields as $field => $value) { // take $required_fields array from skills_data.php
        if (empty($value)) {
            $required_errors[$field] = "This field is required";
        }
    }
    
    foreach ($patterns as $field => $pattern) { // take $patterns array from skills_data.php
        $value = ${str_replace(' ', '_', $field)};
        if (!empty($value) && !preg_match($pattern, $value)) {
            $pattern_errors[$field] = "Invalid format for " . str_replace('_', ' ', $field);
        }
    }
    if (!isset($_POST["skills"]) || empty($_POST["skills"])) {
        $required_errors['skills'] = "At least one skill must be selected";
    }
    if (!in_array($state, ['vic', 'nsw', 'qld', 'nt', 'wa', 'sa', 'tas', 'act'])) {
        $pattern_errors['state'] = "Please select a valid state";
    }
    if (!empty($gender) && !in_array($gender, ['male', 'female', 'non-binary'])) {
        $pattern_errors['gender'] = "Please select a valid gender";
    }

    if (empty($other_skills)) {
        $other_skills = null;
    }

    if (empty($required_errors) && empty($pattern_errors)) { // if input meets validation criteria
        
        $stmt_eoi_main = $conn->prepare("INSERT INTO eoi_main (
                email, ref_num, first_name, last_name,
                birth_date, gender, phone_num, other_skills
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

            

        $stmt_eoi_main->bind_param("ssssssss",
            $email, $job_reference_num, $first_name, $last_name,
            $date_of_birth, $gender, $phone_num, $other_skills);

        $result = $stmt_eoi_main->execute();

        if (!$result) {
            echo "<p style='color:red;'>Error: " . $stmt_eoi_main->error . "</p>";
        }

        $eoi_id = mysqli_insert_id($conn);

        $stmt_eoi_location = $conn->prepare("INSERT INTO eoi_location (
                eoi_id, street_address, suburb_town, state, postcode
            ) VALUES (?, ?, ?, ?, ?)");

        $stmt_eoi_location->bind_param("isssi",
            $eoi_id, $street_address, $suburb_town, $state, $postcode);

        $result = $stmt_eoi_location->execute();

        if (!$result) {
            echo "<p style='color:red;'>Error: " . $stmt_eoi_main->error . "</p>";
        }

        foreach ($skills as $skill_id) {
            $stmt_skill = $conn->prepare("INSERT INTO eoi_skill_selection (eoi_id, skill_id)
            VALUES (?, ?)");
            $stmt_skill->bind_param("ii", $eoi_id, $skill_id);
            $result = $stmt_skill->execute();
            if (!$result) {
            echo "<p style='color:red;'>Error: " . $stmt_skill->error . "</p>";
            }
            $stmt_skill->close();
        }
        

        $stmt_eoi_main->close();
        
        header("Location: eoi_success.php");
        exit;
    } else {
        // Validation failed - store errors and form data in session
        $_SESSION['required_errors'] = $required_errors;
        $_SESSION['pattern_errors'] = $pattern_errors;
        $_SESSION['form_data'] = $_POST; // Store original form data for repopulation
        
        // Redirect back to form
        header("Location: apply.php");
        exit;
    }
}

?>