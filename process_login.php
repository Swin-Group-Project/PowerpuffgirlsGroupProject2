<?php
session_start();
require_once("settings.php");

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    error_log("Database connection failed: " . mysqli_connect_error());   // Log the error privately instead of exposing sensitive details to users
    die("Sorry, something went wrong. Please try again later.");    // Show a generic error message to avoid leaking server/database details
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {         // Trim input values to avoid accidental spaces affecting login
    $input_username = trim($_POST['username']);
    $input_password = trim($_POST['password']);

    // Prepare an SQL statement to prevent SQL injection attacks
    $stmt = $conn->prepare("SELECT username, user_password, role FROM users WHERE username = ?");

    if (!$stmt) {
    error_log("Prepare failed: " . $conn->error);     // Prevents fatal errors if prepare() fails (e.g SQL syntax error or connection issue).
    die("Sorry, something went wrong. Please try again later.");
    }

    $stmt->bind_param("s", $input_username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) { 
        if (password_verify($input_password, $user['user_password'])) {  // Verify the entered password with the hashed password in the database
           
            session_regenerate_id(true); 
            // Save username and role in session
            $_SESSION['user'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            $stmt->close();
            $conn->close();

            if ($user['role'] === 'admin') {     //if more admin roles are added 
                header("Location: manage.php");
                exit();
            } else {
                header("Location: index.php");    //lands to home page if not admin role. Note: if a new page is made for users/non admins, change location
                exit();
            }
        }
    }
    $_SESSION['error'] = "Invalid username or password. Please try again.";
    $stmt->close();
    $conn->close();
    header("Location: login.php");
    exit(); 
} 
?>
