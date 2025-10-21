<!--
File: About Us 
Author: Lira Khisha
Date: Sep 29 - Oct 27 2025
-->

<?php
// Include settings for database connection 
require_once("settings.php");

//connection to the database
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
          echo "<p>Database connection failed: " . mysqli_connect_error() . "</p>";
        } else {
            // Queries
            $sql = "SELECT team_id, meet_text, team_name, class_day, class_time, lecturer, lab_instructor, team_photo FROM about_team ORDER BY team_id";
            $result = mysqli_query($conn, $sql);
            $meet_texts = [];
            $team_name = "";
            $class_day = "";
            $class_time = "";
            $lecturer = "";
            $lab_instructor = "";
            $team_photo = "";
            if ($result && mysqli_num_rows($result) > 0) {   //query error checking
            while ($row = mysqli_fetch_assoc($result)) {
            $meet_texts[$row['team_id']] = htmlspecialchars($row['meet_text']);
            if ($team_name == "") {      // For team_name, class_day, class_time, take the first row only
            $team_name = htmlspecialchars($row['team_name']);
            $class_day = htmlspecialchars($row['class_day']);
            $class_time = htmlspecialchars($row['class_time']);
            $lecturer = htmlspecialchars($row['lecturer']);
            $lab_instructor = htmlspecialchars($row['lab_instructor']);
            $team_photo = htmlspecialchars($row['team_photo']);}
            }
          }
        }
            //Resources: MYSQL Join With Table Aliases https://www.geeksforgeeks.org/mysql/mysql-aliases/
            $sql_members = "SELECT m.member_id, m.first_name, m.last_name, m.student_id, q.quote_text, q.quote_translation FROM about_member m LEFT JOIN about_quote q ON m.member_id = q.member_id ORDER BY m.member_id";
            $result_members = mysqli_query($conn, $sql_members);
            $members = [];
            $quotes = [];
            if ($result_members && mysqli_num_rows($result_members) > 0) {      //query error checking
            while ($row = mysqli_fetch_assoc($result_members)) {
            $members[$row['member_id']]['first_name'] = htmlspecialchars($row['first_name']);
            $members[$row['member_id']]['last_name'] = htmlspecialchars($row['last_name']);         
            $members[$row['member_id']]['student_id'] = htmlspecialchars($row['student_id']);
            $quotes[$row['member_id']]['quote_text'] = htmlspecialchars($row['quote_text']);
            $quotes[$row['member_id']]['quote_translation'] = htmlspecialchars($row['quote_translation']);
        }}
            $sql_contrib1 = "SELECT member_id, contribution1_text FROM about_contribution1 ORDER BY member_id";
            $result_contrib1 = mysqli_query($conn, $sql_contrib1);
            $contrib1 = [];
            if ($result_contrib1 && mysqli_num_rows($result_contrib1) > 0) {  //query error checking
            while ($row = mysqli_fetch_assoc($result_contrib1)){
            $contrib1[$row['member_id']][] = htmlspecialchars($row['contribution1_text']);
        }}
            $sql_contrib2 = "SELECT member_id, contribution2_text FROM about_contribution2 ORDER BY member_id";
            $result_contrib2 = mysqli_query($conn, $sql_contrib2);
            $contrib2 = [];
            if ($result_contrib2 && mysqli_num_rows($result_contrib2) > 0) { //query error checking
            while ($row = mysqli_fetch_assoc($result_contrib2)){
            $contrib2[$row['member_id']][] = htmlspecialchars($row['contribution2_text']);
        }}
            $sql_funfacts = "SELECT * FROM about_funfact ORDER BY member_id, funfact_id";
            $result_funfacts = mysqli_query($conn, $sql_funfacts);
            $funfacts = [];
            if ($result_funfacts && mysqli_num_rows($result_funfacts) > 0) {    //query error checking
            while ($row = mysqli_fetch_assoc($result_funfacts)){
            $funfacts[(int)$row['member_id']][] = htmlspecialchars($row['funfact_text']);
        }}
            // Close databse connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Learn more about our team, our mission, and what we do.">
        <title>About Us</title>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Establish a connection with google API -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- load Barlow font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"> <!-- Load Google icons -->
        <style> 
            .about-section {box-shadow: 0 0 10px rgba(0, 200, 255, 0.8),
                                        0 0 20px rgba(0, 150, 255, 0.6),
                                        0 0 40px rgba(0, 100, 255, 0.4),
                                        0 0 80px rgba(0, 50, 255, 0.2);
                            transition: all 0.9s ease;}
            .about-section:hover { box-shadow: 0 0 20px rgba(0, 200, 255, 1),
                                               0 0 40px rgba(0, 150, 255, 0.8),
                                               0 0 80px rgba(0, 100, 255, 0.6),
                                               0 0 160px rgba(0, 50, 255, 0.4);
                                   transform: translateY(-15px) scale(1.02);}                
        </style>
    </head>
    <body>
        <?php include "./includes/header.inc" ?>
        
        <main>
            <section id="meet-section" class="about-section" aria-label="Meet the Team"><!--id and class are authored by ryan-->
            <h2 style="text-align: left;">Meet the Team <span class="material-symbols-outlined">star</span></h2>
                <p><?php echo $meet_texts[1]; ?> <strong><em><?php echo $meet_texts[2]; ?></em></strong> <?php echo $meet_texts[3]; ?><span class="material-symbols-outlined">diamond_shine</span></p>
                <p><?php echo $meet_texts[4]; ?><strong> <?php echo $meet_texts[5]; ?></strong> <?php echo $meet_texts[6]; ?></p>
                <p><?php echo $meet_texts[7]; ?></p> 
                <p id="job_link"><?php echo $meet_texts[8]; ?><a href="jobs.php" target="_blank"><strong> Jobs</strong></a> and <a href="apply.php" target="_blank"><strong> Apply</strong></a> <?php echo $meet_texts[9]; ?></p>
                <p><?php echo $meet_texts[10]; ?><span class="material-symbols-outlined">partner_exchange</span></p> 
            </section>
            
            <section id="group-section" class="about-section" aria-label="Academic Information"><!--id and class are authored by ryan-->
                <h2>Academic Information <span class="material-symbols-outlined">school</span></h2>
                <ul>
                    <li>Team: <?php echo $team_name; ?></li>
                    <li>Class Hours:
                        <ul>
                            <li>Day: <?php echo $class_day; ?></li>
                            <li>Time: <?php echo $class_time; ?></li>
                        </ul>
                    </li>
                    <li>Lecturer: <?php echo $lecturer; ?></li>
                    <li>Lab Instructor: <?php echo $lab_instructor; ?></li>
                </ul>
            </section>

            <section id="members-section" class="about-section" aria-label="Team Members"><!--id and class are authored by ryan-->
                <h2>Team Members <span class="material-symbols-outlined">person_play</span></h2>
                <div class="members">
                    <!--Resources: 1.Multidimensional Associative Array in PHP https://www.geeksforgeeks.org/php/multidimensional-associative-array-in-php/
                                 2.Concatenation of two strings in PHP https://www.geeksforgeeks.org/php/concatenation-two-string-php/-->
                        <div class="member" id="member1" role="group" aria-labelledby="member1-Venson">
                            <span class="student-id"><?php echo $members[1]['student_id']; ?></span>
                            <dl>
                            <dt class="member_venson" id="member1-Venson"><?php $full_name = $members[1]['first_name'] . " " . $members[1]['last_name']; echo $full_name;?></dt>
                                <dd><q><?php echo $quotes[1]['quote_text']; ?></q>
                                <br><?php echo $quotes[1]['quote_translation']; ?></dd>
                            </dl>
                        </div>
                        <div class="member" id="member2" role="group" aria-labelledby="member2-Lira">
                            <span class="student-id"><?php echo $members[2]['student_id']; ?></span>
                            <dl>
                                <dt class="member_lira" id="member2-Lira"><?php $full_name = $members[2]['first_name'] . " " . $members[2]['last_name']; echo $full_name;?></dt>
                                <dd><q><?php echo $quotes[2]['quote_text']; ?></q>
                                <br><?php echo $quotes[2]['quote_translation']; ?></dd>
                            </dl>
                        </div>
                        <div class="member" id="member3" role="group" aria-labelledby="member3-Ryan">
                            <span class="student-id"><?php echo $members[3]['student_id']; ?></span>
                            <dl>
                                <dt class="member_ryan" id="member3-Ryan"><?php $full_name = $members[3]['first_name'] . " " . $members[3]['last_name']; echo $full_name;?></dt>
                                <dd><q><?php echo $quotes[3]['quote_text']; ?></q>
                                <br><?php echo $quotes[3]['quote_translation']; ?></dd>
                            </dl>
                        </div>
                        <div class="member" id="member4" role="group" aria-labelledby="member4-Aron"> 
                            <span class="student-id"><?php echo $members[4]['student_id']; ?></span>
                            <dl>
                                <dt class="member_aron" id="member4-Aron"><?php $full_name = $members[4]['first_name'] . " " . $members[4]['last_name']; echo $full_name;?></dt>
                                <dd><q><?php echo $quotes[4]['quote_text']; ?></q>
                                <br><?php echo $quotes[4]['quote_translation']; ?></dd>
                            </dl>
                        </div>
                </div>
            </section>
            
            <section id="fun-facts" class="about-section" aria-label="Fun Facts"><!--id and class are authored by ryan-->
                <h2>Fun Facts <span class="material-symbols-outlined">interests</span></h2>
                <table>
                    <caption>The Not-So-Serious Section</caption>
                    <tr style="text-align: center;">
                        <th>Member</th>
                        <th>Contribution Project 1</th>
                        <th>Contribution Project 2</th>
                        <th>Fun fact</th>
                    </tr>
                   <!--Resources: foreach loop syntax adapted from https://www.geeksforgeeks.org/php/how-to-populate-dropdown-list-with-array-values-in-php/
                       Used implode() to generate nested <ul><li> lists for contributions and fun facts-->
                    <?php foreach ($members as $id => $member): 
                               $member_id = (int)$id;?> <!--adjusts automatically if members are removed/added-->
                    <tr style="text-align: left;">
                        <td style="text-align: center;"><?php $full_name = $member['first_name'] . " " . $member['last_name']; echo $full_name;?></td>
                        <td><?php if (isset($contrib1[$member_id])) { echo "<ul><li>" . implode("</li><li>", $contrib1[$member_id]) . "</li></ul>";
                                } else { echo "—"; } ?></td>
                        <td><?php if (isset($contrib2[$member_id])) { echo "<ul><li>" . implode("</li><li>", $contrib2[$member_id]) . "</li></ul>"; 
                                } else { echo "—"; } ?></td>
                        <td><?php if (isset($funfacts[$member_id])) { echo "<ul><li>" . implode("</li><li>", $funfacts[$member_id]) . "</li></ul>";
                                } else { echo "—"; } ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </section>
            
            <section class="about-section" aria-label="Our Team">
            <h2>Our Team <span class="material-symbols-outlined">groups_3</span></h2>
                <figure class="group-photo" >
                    <img src="<?php echo $team_photo; ?>" alt="powerpuff_corp_group_photo">
                    <figcaption>Powerpuff Corp</figcaption>
                </figure>
            </section>
        </main>
        
        <?php include "./includes/footer.inc" ?>
    </body>
</html>
