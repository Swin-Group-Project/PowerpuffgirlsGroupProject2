<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "settings.php";
$conn = mysqli_connect($host, $username, $password, $database);

function fetchTableData($conn, $tableName, $orderBy = "") {
    $data = [];
    $sql = "SELECT * FROM $tableName";
    if (!empty($orderBy)) {
        $sql .= " ORDER BY $orderBy";
    }
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        echo "Query Failed: " . $sql;
    }
    return $data;
}

// Fetch all tables
$tables = [
    'job_main' => fetchTableData($conn, 'job_main'),
    'job_appeal' => fetchTableData($conn, 'job_appeal', 'ref_num, appeal_id'),
    'job_company' => fetchTableData($conn, 'job_company'),
    'job_involvement' => fetchTableData($conn, 'job_involvement', 'ref_num, involvement_id'),
    'job_location' => fetchTableData($conn, 'job_location'),
    'job_requirement' => fetchTableData($conn, 'job_requirement', 'ref_num, requirement_id'),
    'job_summary' => fetchTableData($conn, 'job_summary', 'ref_num, summary_id')
];

// TEMPORARY!
// Display fetched data
foreach ($tables as $tableName => $tableData) {
    echo "<h3>Table: " . htmlspecialchars($tableName) . "</h3>";
    
    if (!empty($tableData)) {
        echo "<table border='1' style='border-collapse: collapse; width: 100%; margin-bottom: 20px;'>";
        
        // Table headers
        echo "<tr style='background-color: #f2f2f2;'>";
        foreach (array_keys($tableData[0]) as $column) {
            echo "<th style='padding: 8px; text-align: left;'>" . htmlspecialchars($column) . "</th>";
        }
        echo "</tr>";
        
        // Table rows
        foreach ($tableData as $row) {
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td style='padding: 8px; border: 1px solid #ddd;'>" . htmlspecialchars($cell) . "</td>";
            }
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "<p>No data found in " . htmlspecialchars($tableName) . "</p>";
    }
}

// Store data in session or use directly
session_start();
$_SESSION['job_data'] = $tables;

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles/styles.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=domain,deployed_code,location_on" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Establish connection to API-->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- load Barlow font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" /> <!--google fonts icon-->
</head>
<body>
    <?php include "./includes/header.inc" ?>
    <div class="container_jobs">
        <input class="jobpage" type="radio" name="joblist" id="job">

    <main class="job-detail">
        <div class="detail medium-padding" id="detail">
            <h2><span class="material-symbols-outlined"></span></h2>
            <p class="company"><span class="material-symbols-outlined">domain</span></p>
            <p class="location"><span class="material-symbols-outlined"></span></p>
            <p class="salary"></p>
            <hr>
            <article>
                <section class="bottom-margin">
                    <h3>What We're looking for:</h3>
                    <ul>
                            <li></li>
                    </ul>
                </section>
                <section class="bottom-margin">
                    <h3>What's Involved:</h3>
                    <ol class="job-detail-ordered-list">
                            <li></li>
                    </ol>
                </section>
                <section class="bottom-margin">
                    <h3>Why Join Us:</h3>
                    <ul>
                            <li></li>
                    </ul>
                </section>
            </article>
        </div>
    </main>
</div>
                <!-- TO DO: Once detail1 is dynamic, remove detail2-4 -->
    <?php include "./includes/footer.inc" ?>
</body>
</html> 
