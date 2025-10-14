<!-- 
Title: About page
Date created: 26/8/25
Date modified: 7/9/25
Author: Ryan Tay
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Apply for our game development company through our website.">
        <meta name="author" content="Ryan Tay">
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Establish a connection with google API -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- load Barlow font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=help" /> <!-- Load Google icons -->
        <title>Apply Now</title>
    </head>
    <body>
        <?php include "./includes/header.inc" ?>
        <main role="main">
            <div id="wrapper">
                <h2 id="apply_heading">Apply Now!</h2>
                <img id="powerpuff_rodents" src="images/apply/powerpuff-corp-logo.png" alt="Powerpuff girls with rodents photoshopped on each of their faces">
                <p id="preamble">If you're serious about becoming an honourary Powerpuff Girl, <strong>fill out the form below</strong> and we will reach out to you soon!</p>
                <!--    FORM STARTS HERE
                        'post' method used for submitting user form data
                        Regex patterns sourced from Tutor Nick:
                        - https://arziel1992.github.io/input-pattern-tester/
                -->
                <form id="apply_form" role="form" aria-labelledby="apply_heading" action="process_eoi.php" method="post">
                    
                    <div id="job_reference_num_container" class="flex_item">
                        <label for="job_reference_num">Job Ref No: <span class="red_text">*</span></label>
                        <input id="job_reference_num" name="job_reference_num" type="text" pattern="[a-zA-Z0-9]{5}" required>
                    </div>

                    <!-- Hoverable tooltip for job reference number -->
                    <div class="flex_item help_container">
                        <span class="material-symbols-outlined help-icon" aria-label="Show job reference number help" tabindex="0" aria-describedby="job_ref_help">help</span>
                        <span id="job_ref_help" class="help_hint" role="tooltip">The 5 alphanumberic characters in the job reference code, e.g. REF-<span class="bold">SE842</span></span>
                    </div>
                    
                    <p id="job_link">You can find your <a class="bold" href="jobs.html">job reference number and other job details here.</a></p>
                    
                    <div id="first_name_container" class="flex_item">
                        <label for="first_name">First Name: <span class="red_text">*</span></label>
                        <input id="first_name" name="first_name" type="text" pattern="[a-zA-Z]{1,20}" required>
                    </div>
                    <div id="last_name_container" class="flex_item">
                        <label for="last_name">Last Name: <span class="red_text">*</span></label>
                        <input id="last_name" name="last_name" type="text" pattern="[a-zA-Z]{1,20}" required>
                    </div>
                    <div id="date_of_birth_container" class="flex_item">
                        <label for="date_of_birth">Date of Birth: <span class="red_text">*</span></label>
                        <input id="date_of_birth" name="date_of_birth" type="text" pattern="(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[012])/\d{4}" placeholder="dd/mm/yyyy" required>
                    </div>

                    <!-- Hoverable tooltip for dd/mm/yyyy format -->
                    <div class="flex_item help_container">
                        <span class="material-symbols-outlined help-icon" aria-label="Show date of birth help" tabindex="0" aria-describedby="birth_date_help">help</span>
                        <span id="birth_date_help" class="help_hint" role="tooltip">Please enter your DOB with the format: <span class="bold">dd/mm/yyyy</span></span>
                    </div>
                    
                    <fieldset id="gender_fieldset" role="group" aria-labelledby="gender_legend">
                        <legend id="gender_legend">Gender: <span class="red_text">*</span></legend>
                        
                        <label for="male" class="radio_container"> <!-- Nest radio buttons inside labels for accessibility (user can click label to select) -->
                            <input id="male" value="male" name="gender" type="radio" required>
                            Male
                        </label>
                        <label for="female" class="radio_container">
                            <input id="female" value="female" name="gender" type="radio">   
                            Female
                        </label>
                        <label for="non-binary" class="radio_container">
                            <input id="non-binary" value="non-binary" name="gender" type="radio">
                            Non-binary
                        </label>
                    </fieldset>
                    
                    <div id="street_address_container" class="flex_item">
                        <label for="street_address">Street Address: <span class="red_text">*</span></label>
                        <input id="street_address" name="street_address" type="text" pattern=".{1,40}" required>
                    </div>

                    <div id="suburb_town_container" class="flex_item">
                        <label for="suburb_town">Suburb/Town: <span class="red_text">*</span></label>
                        <input id="suburb_town" name="suburb_town" type="text" pattern=".{1,40}" required>
                    </div>
                    
                    <div id="state_container" class="flex_item">
                        <label for="state">State: <span class="red_text">*</span></label>
                        <select id="state" required>
                            <option value="" selected disabled>Please select</option> <!--initial 'null' option-->
                            <option value="vic">VIC</option>
                            <option value="nsw">NSW</option>
                            <option value="qld">QLD</option>
                            <option value="nt">NT</option>
                            <option value="wa">WA</option>
                            <option value="sa">SA</option>
                            <option value="tas">TAS</option>
                            <option value="act">ACT</option>
                        </select>
                    </div>
                    
                    <div id="postcode_container" class="flex_item">
                        <label for="postcode">Postcode: <span class="red_text">*</span></label>
                        <input id="postcode" name="postcode" type="text" pattern="\d{4}" required>
                    </div>
                    <div id="email_container" class="flex_item">
                        <label for="email">Email: <span class="red_text">*</span></label>
                        <input id="email" name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required> <!-- (at least one char)@(at least 1 char).(at least 2 char)-->
                    </div>
                    <div id="phone_num_container" class="flex_item">
                        <label for="phone_num">Phone Number: <span class="red_text">*</span></label>
                        <input id="phone_num" name="phone_num" type="text" pattern="[0-9]{8,12}" required> <!-- phone number can be 8-12 digits -->
                    </div>

                    <fieldset id="skills_fieldset" role="group" aria-labelledby="skills_legend">
                        <legend id="skills_legend">Skills: <span class="red_text">*</span></legend>
                        <label for="project_management" class="checkbox_container">
                            <input id="project_management" value="project_management" name="skills[]" type="checkbox" required>
                            Project Management
                        </label>
                        <label for="database_management" class="checkbox_container">
                            <input id="database_management" value="database_management" name="skills[]" type="checkbox">   
                            Database Management
                        </label>
                        <label for="frontend" class="checkbox_container">
                            <input id="frontend" value="frontend" name="skills[]" type="checkbox" required>
                            Front-End Development
                        </label>
                        <label for="backend" class="checkbox_container">
                            <input id="backend" value="backend" name="skills[]" type="checkbox">   
                            Back-End Development   
                        </label>
                        <label for="lua" class="checkbox_container">
                            <input id="lua" value="lua" name="skills[]" type="checkbox">
                            Lua
                        </label>
                        <label for="rust" class="checkbox_container">
                            <input id="rust" value="rust" name="skills[]" type="checkbox">
                            Rust
                        </label>
                        <label for="unity" class="checkbox_container">
                            <input id="unity" value="unity" name="skills[]" type="checkbox">
                            Unity
                        </label>
                        <label for="adobe_animate" class="checkbox_container">
                            <input id="adobe_animate" value="adobe_animate" name="skills[]" type="checkbox">
                            Adobe Animate
                        </label>
                        <!-- TO DO: add dynamic accessibility attributes with PHP to indicate the container has changed state (shown/hidden)-->
                        <label for="other" class="checkbox_container">
                            <input id="other" value="other" name="skills[]" type="checkbox" controls="other_skills_container">
                            Other skills...
                            <div id="other_skills_container">
                                <label for="other_skills">Enter other skills below: </label>
                                <textarea id="other_skills" name="other_skills" rows="4"  cols="60" placeholder="Link to your portfolio, list any other relevant skills here..."></textarea>
                            </div>
                        </label>

                    </fieldset>
                    
                    
                    <div id="button_container" class="flex_item">
                        <input id="submit_btn" type="submit" value="Submit Form">
                        <input id="reset_btn" type="reset" value="Reset">
                    </div>
                    
                </form>
                <!--    FORM ENDS HERE
                        'post' method used for submitting user form data
                -->
            </div>
        </main>
        <?php include "./includes/footer.inc" ?>
    </body>
</html>
