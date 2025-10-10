<!--
File: About Us 
Author: Lira Khisha
Date: Sep 29 - Oct 27 2025
-->
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
                <p>We are <strong><em>Powerpuff Corp!</em></strong> A Melbourne-based team of four with big ideas and a love for creating memorable experiences. We are a game development company with a passion for crafting games and digital content that are engaging, inspiring, and full of imagination. With four dedicated members, we bring together different skills and ideas to design and develop. Though each of us focuses on different areas, together we create games and digital content that are fun, innovative, and inspiring. Alone we&apos;re good. Together? We&apos;re unstoppable!<span class="material-symbols-outlined">diamond_shine</span></p>
                <p>Our team is growing, and we&apos;re excited to welcome anyone who wants to code, design, or just bring bold ideas to the table. Got a weird idea? PERFECT. Think you can handle a brainstorming session that feels more like a jam session? Even BETTER. <strong> Join us</strong> if you like building games, sharing ideas, and maybe debating which game soundtrack is the best (spoiler: we don&apos;t always agree).</p>
                <p>We thrive on creativity, curiosity, and a little bit of chaos. Every brainstorming session is a chance to test new ideas, break stuff (safely), and turn challenges into wins. We love experimenting, learning from each other, and turning challenges into opportunities to level up.</p> 
                <p id="job_link"><strong>Curious? Excited?? Think you&apos;d enjoy being part of our team??? Check our </strong><a href="jobs.php" target="_blank"><strong> Jobs</strong></a> <strong>and</strong> <a href="apply.php" target="_blank"><strong> Apply</strong></a> <strong>pages to see how you can hop on board!</strong></p>
                <p>That&apos;s a wrap! Hope to see you joining our quest! <span class="material-symbols-outlined">partner_exchange</span></p> 
            </section>
            
            <section id="group-section" class="about-section" aria-label="Group Information"><!--id and class are authored by ryan-->
                <h2>Academic Information <span class="material-symbols-outlined">school</span></h2>
                <ul>
                    <li>Team: Powerpuff Girls</li>
                    <li>Class Hours:
                        <ul>
                            <li>Day: Tuesday</li>
                            <li>Time: 2:30 PM - 4:30 PM</li>
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
                            <p><strong>Contribution:</strong> Home Page</p>
                        </div>
                        <div class="member" id="member2" role="group" aria-labelledby="member2-Lira">
                            <span class="student-id">105960769</span>
                            <dl>
                                <dt class="member_lira" id="member2-Lira">Lira Khisha</dt>
                                <dd><q>Se a vaca voar, apenas aplaude e aceita</q>
                                <br>If the cow flies, just clap and accept it</dd>
                            </dl>
                            <p><strong>Contribution:</strong> About Page</p>
                        </div>
                        <div class="member" id="member3" role="group" aria-labelledby="member3-Ryan">
                            <span class="student-id">106060754</span>
                            <dl>
                                <dt class="member_ryan" id="member3-Ryan">Ryan Tay</dt>
                                <dd><q>你爱我，我爱你, 蜜雪冰城甜蜜蜜</q>
                                <br>I love you you love me MIXUE Ice cream and tea</dd>
                            </dl>
                            <p><strong>Contribution:</strong> Apply Page</p>
                        </div>
                        <div class="member" id="member4" role="group" aria-labelledby="member4-Aron"> 
                            <span class="student-id">105556236</span>
                            <dl>
                                <dt class="member_aron" id="member4-Aron">Aron Winjoto</dt>
                                <dd><q>你叫我去这样干，他叫我去那样干。真是一群大混蛋</q>
                                <br>You tell me to do this, he told me to do that, you are all bastards</dd>
                            </dl>
                            <p><strong>Contribution:</strong> Jobs Page</p>   
                        </div>
                </div>
            </section>
            
            <section id="fun-facts" class="about-section" aria-label="Fun Facts"><!--id and class are authored by ryan-->
                <h2>Fun Facts <span class="material-symbols-outlined">interests</span></h2>
                <table>
                    <caption>The Not-So-Serious Section</caption>
                    <tr>
                        <th>The Real Deal</th>
                        <th>Random Quirks</th>
                    </tr>
                    <tr>
                        <td>Venson</td>
                        <td>Head was once stung by a bee, and I had to go to the hospital.
                            <br>Love Japanese food, especially sushi and ramen.
                            <br>The first time I visited a casino, I ran A$100 up to over A$1,000, then gave it all back the next day.
                        </td>
                    </tr>
                    <tr>
                        <td>Lira</td>
                        <td>Had a serious fight with a 4 y/o because he broke my Rubik's Cube when I was 11.
                            <br>Fell down the stairs and had to get a stitch near my eye.
                            <br>Had to save my stupid bird at home without a vet because he nearly got tangled and hung himself in his toy.
                        </td>
                    </tr>
                    <tr>
                        <td>Ryan</td>
                        <td>Aspiring barista/latte artist
                            <br>Ran a half marathon in a banana costume
                            <br>Broke his front tooth at age 7 while pretending to surf on a towel
                        </td> 
                    </tr>     
                    <tr>
                        <td>Aron</td>
                        <td>Ate mud as a kid
                        <br>Dropped a deuce in my pants during preschool for 5 days in a row
                        <br>Got lost once when i was a kid in Melbourne with no way of contacting anyone
                        </td>
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
