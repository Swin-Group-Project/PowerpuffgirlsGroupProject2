<?php

// Connection to database "project_part2"
session_start();
require_once("settings.php");
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Populate skill lookup table
$ins_stmt = $conn->prepare("INSERT INTO eoi_skill (skill_id) VALUES (?)"); // prepared statement prevents SQL injections

foreach ($skills as $skill) {
    $ins_stmt->bind_param("s", $skill);
    $stmt->execute();
}

$ins_stmt->close();

function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $job_ref_num = sanitize($_POST["job_reference_num"]);
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
    $skills = isset($_POST["skills"]) ? implode(", ", array_map("sanitize", $_POST["skills"])) : "";

    // Validation
    $required_errors = [];
    $pattern_errors = [];
    
    $patterns = [
        "job_reference_num" => "/^[a-zA-Z0-9]{5}$/",
        "first_name" => "/^[a-zA-Z]{1,20}$/",
        "last_name" => "/^[a-zA-Z]{1,20}$/",
        "date_of_birth" => "/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[012])\/\d{4}$/",
        "street_address" => "/^.{1,40}$/",
        "suburb_town" => "/^.{1,40}$/",
        "postcode" => "/^\d{4}$/",
        "email" => "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/",
        "phone_num" => "/^[0-9]{8,12}$/"
    ];

    
}

?>