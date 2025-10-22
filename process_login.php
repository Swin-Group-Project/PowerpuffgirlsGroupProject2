<?php
session_start();
require_once("settings.php");

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
    $user = trim($_POST['username']);
    $pass = trim($_POST['password']);
//to be added later after user table is done

if ($result->num_rows > 0) {
        $_SESSION['user'] = $user;
        header("Location: manage.php");
        exit();
} else {
        $_SESSION['error'] = "Invalid username or password!";
        header("Location: login.php");
        exit();
}
}
?>
