<?php
// Clean user input
// Prevent XSS and preparing data for processing/validation
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Fetch table data iteratively, return as an array of associative arrays
// Each item is a record. Each record contains an array of key-value pairs
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

?>