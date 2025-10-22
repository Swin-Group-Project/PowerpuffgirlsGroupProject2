<!--
File: Login
Date created: Sep 29 2025
Last modified: Oct 23 2025
-->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Learn more about our team, our mission, and what we do.">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Establish a connection with google API -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- load Barlow font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"> <!-- Load Google icons -->
        <style>
        </style>
    </head>
    <body>
    <main>
        <div class="login-container">
                <div class="login-box">
                    <div class="login-header">
                        <img src="" alt="" class="login-logo">
                        <h2 class="login-title">Login</h2>
                        <p class="login-subtitle">Enter your username and password to login.</p>
                    </div>
                    <?php
                        if (isset($_SESSION['error'])) { echo "<p style='color:red; text-align:center;'>" . $_SESSION['error'] . "</p>";    //inline css for now
                                                        unset($_SESSION['error']);
                                                    }
                    ?>
                    <form action="process_login.php" method="POST" class="login-form">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" placeholder="Enter your username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" placeholder="Enter your password" required >
                        </div>
                        <button type="submit" name="login" class="login-button">Login</button>
                    </form>
                </div>
        </div>        
    </main>
    </body>
</html>

<!--no link to header/footer/nav bar for now--> 
