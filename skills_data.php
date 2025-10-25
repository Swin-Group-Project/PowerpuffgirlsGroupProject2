<!--
Title: Skills Data
Date created: 21/9/25
Last modified: 21/9/25
Author: Ryan Tay
-->
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// EOI form - skills config

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$skills_data = [
    1 => "Project Management",
    2 => "Database Management", 
    3 => "Front-End Development",
    4 => "Back-End Development",
    5 => "Lua",
    6 => "Rust",
    7 => "Unity",
    8 => "Adobe Animate",
];

$patterns = [
    "job_reference_num" => "/^REF-[a-zA-Z0-9]{5}$/",
    "first_name" => "/^[a-zA-Z]{1,20}$/",
    "last_name" => "/^[a-zA-Z]{1,20}$/",
    "date_of_birth" => "/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[012])\/\d{4}$/",
    "street_address" => "/^.{1,40}$/",
    "suburb_town" => "/^.{1,40}$/",
    "postcode" => "/^\d{4}$/",
    "email" => "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/",
    "phone_num" => "/^[0-9]{8,12}$/"
];

function update_skills_table($conn, $skill_data) {
    
    $existing_skills = load_skills_table($conn);
    // Query new entries from $skill_data not found in eoi_skill table
    $insert_stmt = $conn->prepare(
            "INSERT INTO eoi_skill (skill_id, skill_name) VALUES (?, ?) 
            ON DUPLICATE KEY UPDATE skill_name = VALUES(skill_name)");
    if (!$insert_stmt) {
        error_log("Error updating skills table: " . $conn->error);
        return false;
    }
    // Insert new entries to $skill_data
    foreach ($skill_data as $skill_id => $skill_name) {
        
        if (!isset($existing_skills[$skill_id]) || $existing_skills[$skill_id] !== $skill_name) { // if skill doesn't exist or name has changed
            $insert_stmt->bind_param("is", $skill_id, $skill_name);
            if (!$insert_stmt->execute()) { // Add error check for execute
                error_log("Error inserting skill $skill_id: " . $insert_stmt->error);
                // Continue with other skills instead of returning false immediately
            }
        }
    }
    $insert_stmt->close();
    return true;
}

function load_skills_table($conn) {
    // Get existing data from eoi_skill
    $existing_skills = [];
    $result = $conn->query("SELECT skill_id, skill_name FROM eoi_skill");
    if ($result) {
        // store each result as a PHP associative array with format {skill_id => skill_name}
        while ($row = $result->fetch_assoc()) { 
            $existing_skills[$row['skill_id']] = $row['skill_name'];
        }
        $result->free();
    } else {
        error_log("Error loading existing skills: " . $conn->error);
        return false;
    }
    return $existing_skills;
}

// Update eoi_skills (lookup table) with $skill_data
// NOTE: changes to this table should only be done in manage.php.


if (isset($skill_data)) {
    update_skills_table($conn, $skill_data);
} else {
    error_log("ERROR: Could not find skill_data");
}