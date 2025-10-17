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
            $sql = "SELECT team_id,meet_text, team_name, class_day, class_time FROM about_team ORDER BY team_id";
            $result = mysqli_query($conn, $sql);
            $meet_texts = [];
            $team_name = "";
            $class_day = "";
            $class_time = "";
           
            if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
            $meet_texts[$row['team_id']] = htmlspecialchars($row['meet_text']);
            if ($team_name == "") {      // For team_name, class_day, class_time, take the first row only
            $team_name = htmlspecialchars($row['team_name']);
            $class_day = htmlspecialchars($row['class_day']);
            $class_time = htmlspecialchars($row['class_time']);}
            }
          }
        }
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
            
            <section id="group-section" class="about-section" aria-label="Group Information"><!--id and class are authored by ryan-->
                <h2>Academic Information <span class="material-symbols-outlined">school</span></h2>
                <ul>
                    <li>Team: <?php echo $team_name; ?></li>
                    <li>Class Hours:
                        <ul>
                            <li>Day: <?php echo $class_day; ?></li>
                            <li>Time: <?php echo $class_time; ?></li>
                        </ul>
                    </li>
                </ul>
            </section>

            <section id="members-section" class="about-section" aria-label="Team Members"><!--id and class are authored by ryan-->
                <h2>Team Members <span class="material-symbols-outlined">person_play</span></h2>
                <div class="members">
                        <div class="member" id="member1" role="group" aria-labelledby="member1-Venson">
                            <span class="student-id">105205347</span>
                            <dl>
                            <dt class="member_venson" id="member1-Venson">Wei-ting Chen</dt>
                                <dd><q>Japanese Poem (最愛の詩) - 「古池や蛙飛びこむ水の音</q>
                                <br>An old pond—a frog jumps in, the sound of water.</dd>
                            </dl>
                        </div>
                        <div class="member" id="member2" role="group" aria-labelledby="member2-Lira">
                            <span class="student-id">105960769</span>
                            <dl>
                                <dt class="member_lira" id="member2-Lira">Lira Khisha</dt>
                                <dd><q>Se a vaca voar, apenas aplaude e aceita</q>
                                <br>If the cow flies, just clap and accept it</dd>
                            </dl>
                        </div>
                        <div class="member" id="member3" role="group" aria-labelledby="member3-Ryan">
                            <span class="student-id">106060754</span>
                            <dl>
                                <dt class="member_ryan" id="member3-Ryan">Ryan Tay</dt>
                                <dd><q>你爱我，我爱你, 蜜雪冰城甜蜜蜜</q>
                                <br>I love you you love me MIXUE Ice cream and tea</dd>
                            </dl>
                        </div>
                        <div class="member" id="member4" role="group" aria-labelledby="member4-Aron"> 
                            <span class="student-id">105556236</span>
                            <dl>
                                <dt class="member_aron" id="member4-Aron">Aron Winjoto</dt>
                                <dd><q>你叫我去这样干，他叫我去那样干。真是一群大混蛋</q>
                                <br>You tell me to do this, he told me to do that, you are all bastards</dd>
                            </dl>
                        </div>
                </div>
            </section>
            
            <section id="fun-facts" class="about-section" aria-label="Fun Facts"><!--id and class are authored by ryan-->
                <h2>Fun Facts <span class="material-symbols-outlined">interests</span></h2>
                <table>
                    <caption>The Not-So-Serious Section</caption>
                    <tr>
                        <th>Member</th>
                        <th>Contribution Project 1</th>
                        <th>Contribution Project 1</th>
                        <th>Fun fact</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td> 
                        <td></td>
                    </tr>     
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </section>
            
            <section class="about-section" aria-label="Our Team">
            <h2 style="text-align: left;">Our Team <span class="material-symbols-outlined">groups_3</span></h2>
                <figure class="group-photo" >
                    <img src="images/about/group_photo.jpg" alt="powerpuff_corp_group_photo">
                    <figcaption>Powerpuff Corp</figcaption>
                </figure>
            </section>
        </main>
        
        <?php include "./includes/footer.inc" ?>
    </body>
</html>
