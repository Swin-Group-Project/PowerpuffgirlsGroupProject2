<!-- 
Title: About page
Date created: 26/8/25
Last modified: 20/9/25
Author: Ryan Tay
-->
<?php

session_start();
require_once "settings.php";
require "skills_data.php";

$required_errors = $_SESSION['required_errors'] ?? [];
$pattern_errors = $_SESSION['pattern_errors'] ?? [];
$form_data = $_SESSION['form_data'] ?? [];
unset($_SESSION['required_errors']);
unset($_SESSION['pattern_errors']);
unset($_SESSION['form_data']);
?>

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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=help"> <!-- Load Google icons -->
        <title>Apply Now</title>
        
        <!-- Example of embedded CSS: Error styling
        CREDIT: GenAI -->
        <style>
            .error_message {
                color: #d32f2f;
                font-size: 0.8em; 
                margin: 0.1em 0 1em;
                display: block;
                width: 100%;
                padding: 5px;
                background: #ffebee;
                border: 1px solid #f44336;
                border-radius: 4px;
            }

            .field_error {
                border: 2px solid #f44336 !important;
                background-color: #ffebee;
            }

            .fieldset_error {
                border: 2px solid #f44336;
                padding: 10px;
                border-radius: 4px;
                margin: 10px 0;
            }
        </style>
    </head>
    <body>
        <?php include "./includes/header.inc" ?>
        <main>
            <div id="wrapper">
                <h2 id="apply_heading">Apply Now!</h2>
                <img id="powerpuff_rodents" src="images/apply/powerpuff-corp-logo.png" alt="Powerpuff girls with rodents photoshopped on each of their faces">
                <p id="preamble">If you're serious about becoming an honourary Powerpuff Girl, <strong>fill out the form below</strong> and we will reach out to you soon!</p>
                <!--    FORM STARTS HERE
                        'post' method used for submitting user form data
                        Regex patterns sourced from Tutor Nick:
                        - https://arziel1992.github.io/input-pattern-tester/
                -->
                <form id="apply_form" aria-labelledby="apply_heading" action="process_eoi.php" method="post">

                    <div id="job_reference_num_container" class="flex_item">
                        <label for="job_reference_num">Job Ref No: <span class="red_text">*</span></label>
                        <input id="job_reference_num" name="job_reference_num" type="text"
                            value="<?php echo isset($form_data['job_reference_num']) ? htmlspecialchars($form_data['job_reference_num']) : ''; ?>"
                            class="<?php echo isset($required_errors['job_reference_num']) || isset($pattern_errors['job_reference_num']) ? 'field_error' : ''; ?>">
                    </div>
                    <?php if (isset($required_errors['job_reference_num'])): ?>
                        <p class="error_message"><?php echo $required_errors['job_reference_num']; ?></p>
                    <?php elseif (isset($pattern_errors['job_reference_num'])): ?>
                        <p class="error_message"><?php echo $pattern_errors['job_reference_num']; ?></p>
                    <?php endif; ?>
                    
                    <!-- Hoverable tooltip for job reference number -->
                    <div class="flex_item help_container">
                        <span class="material-symbols-outlined help-icon" tabindex="0" aria-describedby="job_ref_help">help</span>
                        <span id="job_ref_help" class="help_hint" role="tooltip">The 5 alphanumberic characters in the job reference code, e.g. REF-<span class="bold">SE842</span></span>
                    </div>
                    <p id="job_link">You can find your <a class="bold" href="jobs.php">job reference number and other job details here.</a></p>
                    
                    <div id="first_name_container" class="flex_item">
                        <label for="first_name">First Name: <span class="red_text">*</span></label>
                        <input id="first_name" name="first_name" type="text"
                            value="<?php echo isset($form_data['first_name']) ? htmlspecialchars($form_data['first_name']) : ''; ?>"
                            class="<?php echo isset($required_errors['first_name']) || isset($pattern_errors['first_name']) ? 'field_error' : ''; ?>">
                    </div>
                    <?php if (isset($required_errors['first_name'])): ?>
                        <p class="error_message"><?php echo $required_errors['first_name']; ?></p>
                    <?php elseif (isset($pattern_errors['first_name'])): ?>
                        <p class="error_message"><?php echo $pattern_errors['first_name']; ?></p>
                    <?php endif; ?>
                    
                    <div id="last_name_container" class="flex_item">
                        <label for="last_name">Last Name: <span class="red_text">*</span></label>
                        <input id="last_name" name="last_name" type="text"
                            value="<?php echo isset($form_data['last_name']) ? htmlspecialchars($form_data['last_name']) : ''; ?>"
                            class="<?php echo isset($required_errors['last_name']) || isset($pattern_errors['last_name']) ? 'field_error' : ''; ?>">
                    </div>
                    <?php if (isset($required_errors['last_name'])): ?>
                        <p class="error_message"><?php echo $required_errors['last_name']; ?></p>
                    <?php elseif (isset($pattern_errors['last_name'])): ?>
                        <p class="error_message"><?php echo $pattern_errors['last_name']; ?></p>
                    <?php endif; ?>
                    
                    <div id="date_of_birth_container" class="flex_item">
                        <label for="date_of_birth">Date of Birth: <span class="red_text">*</span></label>
                        <input id="date_of_birth" name="date_of_birth" type="text" placeholder="dd/mm/yyyy"
                            value="<?php echo isset($form_data['date_of_birth']) ? htmlspecialchars($form_data['date_of_birth']) : ''; ?>"
                            class="<?php echo isset($required_errors['date_of_birth']) || isset($pattern_errors['date_of_birth']) ? 'field_error' : ''; ?>">
                    </div>
                    <?php if (isset($required_errors['date_of_birth'])): ?>
                        <p class="error_message"><?php echo $required_errors['date_of_birth']; ?></p>
                    <?php elseif (isset($pattern_errors['date_of_birth'])): ?>
                        <p class="error_message"><?php echo $pattern_errors['date_of_birth']; ?></p>
                    <?php endif; ?>
                    
                    <!-- Hoverable tooltip for dd/mm/yyyy format -->
                    <div class="flex_item help_container">
                        <span class="material-symbols-outlined help-icon" tabindex="0" aria-describedby="birth_date_help">help</span>
                        <span id="birth_date_help" class="help_hint" role="tooltip">Please enter your DOB with the format: <span class="bold">dd/mm/yyyy</span></span>
                    </div>
                    
                    <fieldset id="gender_fieldset" aria-labelledby="gender_legend" 
                            class="<?php echo isset($required_errors['gender']) || isset($pattern_errors['gender']) ? 'fieldset_error' : ''; ?>">
                        <legend id="gender_legend">Gender: <span class="red_text">*</span></legend>

                        <label for="male" class="radio_container">
                            <input id="male" value="male" name="gender" type="radio"
                            <?php echo (isset($form_data['gender']) && $form_data['gender'] === 'male') ? 'checked' : ''; ?>>
                            Male
                        </label>
                        <label for="female" class="radio_container">
                            <input id="female" value="female" name="gender" type="radio"
                            <?php echo (isset($form_data['gender']) && $form_data['gender'] === 'female') ? 'checked' : ''; ?>>   
                            Female
                        </label>
                        <label for="non-binary" class="radio_container">
                            <input id="non-binary" value="non-binary" name="gender" type="radio"
                            <?php echo (isset($form_data['gender']) && $form_data['gender'] === 'non-binary') ? 'checked' : ''; ?>>
                            Non-binary
                        </label>

                        <?php if (isset($required_errors['gender'])): ?>
                            <span class="error_message"><?php echo $required_errors['gender']; ?></span>
                        <?php elseif (isset($pattern_errors['gender'])): ?>
                            <span class="error_message"><?php echo $pattern_errors['gender']; ?></span>
                        <?php endif; ?>
                    </fieldset>
                        
                    <div id="street_address_container" class="flex_item">
                        <label for="street_address">Street Address: <span class="red_text">*</span></label>
                        <input id="street_address" name="street_address" type="text"
                            value="<?php echo isset($form_data['street_address']) ? htmlspecialchars($form_data['street_address']) : ''; ?>"
                            class="<?php echo isset($required_errors['street_address']) || isset($pattern_errors['street_address']) ? 'field_error' : ''; ?>">
                    </div>
                    <?php if (isset($required_errors['street_address'])): ?>
                        <p class="error_message"><?php echo $required_errors['street_address']; ?></p>
                    <?php elseif (isset($pattern_errors['street_address'])): ?>
                        <p class="error_message"><?php echo $pattern_errors['street_address']; ?></p>
                    <?php endif; ?>
                    
                    <div id="suburb_town_container" class="flex_item">
                        <label for="suburb_town">Suburb/Town: <span class="red_text">*</span></label>
                        <input id="suburb_town" name="suburb_town" type="text"
                            value="<?php echo isset($form_data['suburb_town']) ? htmlspecialchars($form_data['suburb_town']) : ''; ?>"
                            class="<?php echo isset($required_errors['suburb_town']) || isset($pattern_errors['suburb_town']) ? 'field_error' : ''; ?>">
                    </div>
                    <?php if (isset($required_errors['suburb_town'])): ?>
                        <p class="error_message"><?php echo $required_errors['suburb_town']; ?></p>
                    <?php elseif (isset($pattern_errors['suburb_town'])): ?>
                        <p class="error_message"><?php echo $pattern_errors['suburb_town']; ?></p>
                    <?php endif; ?>
                    
                    <div id="state_container" class="flex_item">
                        <label for="state">State: <span class="red_text">*</span></label>
                        <select id="state" name="state" class="<?php echo isset($required_errors['state']) || isset($pattern_errors['state']) ? 'field_error' : ''; ?>">
                            <option value="" disabled <?php echo !isset($form_data['state']) ? 'selected' : ''; ?>>Please select</option>
                            <option value="vic" <?php echo (isset($form_data['state']) && $form_data['state'] === 'vic') ? 'selected' : ''; ?>>VIC</option>
                            <option value="nsw" <?php echo (isset($form_data['state']) && $form_data['state'] === 'nsw') ? 'selected' : ''; ?>>NSW</option>
                            <option value="qld" <?php echo (isset($form_data['state']) && $form_data['state'] === 'qld') ? 'selected' : ''; ?>>QLD</option>
                            <option value="nt" <?php echo (isset($form_data['state']) && $form_data['state'] === 'nt') ? 'selected' : ''; ?>>NT</option>
                            <option value="wa" <?php echo (isset($form_data['state']) && $form_data['state'] === 'wa') ? 'selected' : ''; ?>>WA</option>
                            <option value="sa" <?php echo (isset($form_data['state']) && $form_data['state'] === 'sa') ? 'selected' : ''; ?>>SA</option>
                            <option value="tas" <?php echo (isset($form_data['state']) && $form_data['state'] === 'tas') ? 'selected' : ''; ?>>TAS</option>
                            <option value="act" <?php echo (isset($form_data['state']) && $form_data['state'] === 'act') ? 'selected' : ''; ?>>ACT</option>
                        </select>
                    </div>
                    <?php if (isset($required_errors['state'])): ?>
                        <p class="error_message"><?php echo $required_errors['state']; ?></p>
                    <?php elseif (isset($pattern_errors['state'])): ?>
                        <p class="error_message"><?php echo $pattern_errors['state']; ?></p>
                    <?php endif; ?>
                    
                    <div id="postcode_container" class="flex_item">
                        <label for="postcode">Postcode: <span class="red_text">*</span></label>
                        <input id="postcode" name="postcode" type="text"
                            value="<?php echo isset($form_data['postcode']) ? htmlspecialchars($form_data['postcode']) : ''; ?>"
                            class="<?php echo isset($required_errors['postcode']) || isset($pattern_errors['postcode']) ? 'field_error' : ''; ?>">
                    </div>
                    <?php if (isset($required_errors['postcode'])): ?>
                        <p class="error_message"><?php echo $required_errors['postcode']; ?></p>
                    <?php elseif (isset($pattern_errors['postcode'])): ?>
                        <p class="error_message"><?php echo $pattern_errors['postcode']; ?></p>
                    <?php endif; ?>
                    
                    <div id="email_container" class="flex_item">
                        <label for="email">Email: <span class="red_text">*</span></label>
                        <input id="email" name="email" type="email"
                            value="<?php echo isset($form_data['email']) ? htmlspecialchars($form_data['email']) : ''; ?>"
                            class="<?php echo isset($required_errors['email']) || isset($pattern_errors['email']) ? 'field_error' : ''; ?>">
                    </div>
                    <?php if (isset($required_errors['email'])): ?>
                        <p class="error_message"><?php echo $required_errors['email']; ?></p>
                    <?php elseif (isset($pattern_errors['email'])): ?>
                        <p class="error_message"><?php echo $pattern_errors['email']; ?></p>
                    <?php endif; ?>
                    
                    <div id="phone_num_container" class="flex_item">
                        <label for="phone_num">Phone Number: <span class="red_text">*</span></label>
                        <input id="phone_num" name="phone_num" type="text"
                            value="<?php echo isset($form_data['phone_num']) ? htmlspecialchars($form_data['phone_num']) : ''; ?>"
                            class="<?php echo isset($required_errors['phone_num']) || isset($pattern_errors['phone_num']) ? 'field_error' : ''; ?>">
                    </div>
                    <?php if (isset($required_errors['phone_num'])): ?>
                        <p class="error_message"><?php echo $required_errors['phone_num']; ?></p>
                    <?php elseif (isset($pattern_errors['phone_num'])): ?>
                        <p class="error_message"><?php echo $pattern_errors['phone_num']; ?></p>
                    <?php endif; ?>
                    
                    <fieldset id="skills_fieldset" aria-labelledby="skills_legend"
                        class="<?php echo isset($required_errors['skills']) ? 'fieldset_error' : ''; ?>">
                        <legend id="skills_legend">Skills: <span class="red_text">*</span></legend>

                        <?php
                        $selected_skills = isset($form_data['skills']) ? $form_data['skills'] : [];
                        foreach ($skills_data as $value => $label): ?>
                            <label for="skill_<?php echo $value; ?>" class="checkbox_container">
                                <input id="skill_<?php echo $value; ?>" 
                                    value="<?php echo $value; ?>" 
                                    name="skills[]" 
                                    type="checkbox"
                                <?php echo (in_array($value, $selected_skills)) ? 'checked' : ''; ?>>
                                <?php echo htmlspecialchars($label); ?>
                            </label>
                        <?php endforeach; ?>
                        
                        <!-- TODO: other skills container dynamically appears depending on if checkbox is ticked -->
                        <label for="other" class="checkbox_container">
                            <input id="other" value="other" name="skills[]" type="checkbox"
                                <?php echo (in_array('other', $selected_skills)) ? 'checked' : ''; ?>>
                            Other skills...
                        </label>
                        <div id="other_skills_container">
                            <label for="other_skills">Enter other skills below: </label>
                            <textarea id="other_skills" name="other_skills" rows="4" cols="60" 
                                placeholder="Link to your portfolio, list any other relevant skills here..."><?php 
                                echo isset($form_data['other_skills']) ? htmlspecialchars($form_data['other_skills']) : ''; 
                                ?></textarea>
                        </div>
                        
                        <?php if (isset($required_errors['skills'])): ?>
                            <span class="error_message"><?php echo $required_errors['skills']; ?></span>
                        <?php endif; ?>
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
