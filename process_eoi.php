<?php

// Connection to database "project_part2"
session_start();
require_once('settings.php');
$conn = mysqli_connect($host, $username, $password, $database);

// Skill Lookup table
$skills = [
    'project_management',
    'database_management',
    'front-end_development',
    'back-end_development',
    'lua',
    'rust',
    'unity',
    'adobe_animate'
];


$ins_stmt = $conn->prepare("INSERT INTO skills_lookup (skill_name) VALUES (?)"); // prepared statement prevents SQL injections

foreach ($skills as $skill) {
    $ins_stmt->bind_param("s", $skill);
    $stmt->execute();
}

$ins_stmt->close();


?>