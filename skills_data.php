<!--
Title: Skills Data
Date created: 21/9/25
Last modified: 21/9/25
Author: Ryan Tay
-->
<?php
// EOI form - skills config
$skills_data = [
    1 => "Project Management",
    2 => "Database Management", 
    3 => "Front-End Development",
    4 => "Back-End Development",
    5 => "Lua",
    6 => "Rust",
    7 => "Unity",
    8 => "Adobe Animate"
];

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