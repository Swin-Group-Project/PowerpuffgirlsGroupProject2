<!--
File: Login
Date created: Sep 29 2025
Last modified: Oct 27 2025
Description: Secure login portal for Powerpuff Corp users and administrators to access account features and application management tools 
-->

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Login portal for accessing acount features and management tools at Powerpuff Corp.">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Establish a connection with google API -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- load Barlow font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"> <!-- Load Google icons -->
        <style>
            .login-box {
                background: linear-gradient(135deg, 
                   #051225 0%,     
                   #1c4159 50%,   
                   #191428ff 100% );
                padding: 30px 50px;
                border-radius: 12px;
                box-shadow:
                    0 0 18px rgba(0, 200, 255, 0.25),
                    0 0 35px rgba(0, 150, 255, 0.15),
                    inset 0 0 10px rgba(255, 255, 255, 0.03);
                width: 700px;
                min-height: 500px;
                height: auto;
                position: relative; 
                z-index: 1; 
            }
            .large-icon {
                    font-size: 64px;
                    width: 64px;
                    height: 64px;
                    color: #ccc;
            }
                
        </style>
    </head>
    <body>
        <?php include "./includes/header.inc" ?>

        <main>
            <div class="login-container">
                <div class="login-box">
                    <div class="login-header">
                        <span class="material-symbols-outlined large-icon">person_shield</span>
                        <h2 class="login-title">Login</h2>
                        <p class="login-subtitle">Enter your username and password to login.</p>
                    </div>
                    <?php
                        if (isset($_SESSION['error'])) { 
                            echo "<div class='error-message'>" . htmlspecialchars($_SESSION['error']) . "</div>";  
                            unset($_SESSION['error']); }
                    ?>
                    <form action="process_login.php" method="POST" class="login-form" aria-label="User Login Form">
                        <div class="form-group">
                            <label for="username" class="username" style="color: white;">Username:</label>
                            <input type="text" id="username" name="username" placeholder="Enter your username" aria-label="Enter your username" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="password" style="color: white;">Password:</label>
                            <input type="password" id="password" name="password" autocomplete="off" placeholder="Enter your password" aria-label="Enter your password" required >  <!--autocomplete="off" Prevents browsers from saving or auto-filling passwords.-->
                        </div>
                        <button type="submit" name="login" class="login-button" aria-label="Login to your account">Login</button>
                    </form>
                </div>
            </div>        
        </main>

        <?php include "./includes/footer.inc" ?>
    </body>
</html>

