<!--
File: About Us 
Author: Lira Khisha
Date: Aug 26 - Sep 26 2025
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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons"> <!-- Load Google icons -->
    </head>
    <body>
        <?php include "./includes/header.inc" ?>
        
        <main>
            <section id="meet-section" class="about-section" role="region" aria-label="Meet the Team"><!--id and class are authored by ryan-->
            <h2 style="text-align: left;">Meet the Team</h2>
                <p>We are Powerpuff Corp, a team of four, based in Melbourne. We are a game development company with a passion for building creative and engaging experiences. With four dedicated members, we bring together different skills and ideas to design and develop. Though each of us focuses on different areas, together we create games and digital content that are fun, innovative, and inspiring. When we put it all together, it feels like unlocking the final boss: teamwork. </p>
                <p>Our team is growing, and we&apos;re excited to welcome anyone who wants to code, design, or just bring wild ideas to the table. Join us if you like building games, sharing ideas, and maybe debating which game soundtrack is the best (spoiler: we don&apos;t always agree).</p>
                <p>We thrive on creativity, curiosity, and a little bit of chaos. Every brainstorming session is a chance to come up with ideas that might sound crazy at first, but sometimes those ideas turn into our most memorable projects. We love experimenting, learning from each other, and turning challenges into opportunities to level up.</p> 
                <p id="job_link">Curious? Excited?? Think you&apos;d enjoy being part of our team??? Check our <a href="jobs.html" target="_blank"><strong>Jobs</strong></a> and <a href="apply.html" target="_blank"><strong>Apply</strong></a> pages to see how you can hop on board!</p>
                <p>That&apos;s a wrap! Hope to see you joining our quest!</p>
            </section>
            
            <section id="group-section" class="about-section" role="region" aria-label="Group Information"><!--id and class are authored by ryan-->
                <h2>Group Information</h2>
                <ul>
                    <li>Group Name: Powerpuffgirls</li>
                    <li>Class Schedule:
                        <ul>
                            <li>Day: Tuesday</li>
                            <li>Time: 2:30 AM - 4:30 PM</li>
                        </ul>
                    </li>
                </ul>
            </section>

            <section id="members-section" class="about-section" role="region" aria-label="Team Members"><!--id and class are authored by ryan-->
                <h2>Team Members</h2>
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
            
            <section id="fun-facts" class="about-section" role="region" aria-label="Fun Facts"><!--id and class are authored by ryan-->
                <h2>Fun Facts</h2>
                <table border="1">
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
            
            <section class="about-section" role="region" aria-label="Our Team">
            <h2 style="text-align: left;">Our Team</h2>
                <figure class="group-photo" >
                    <img src="images/group_photo.jpg" alt="powerpuff_corp_group_photo">
                    <figcaption>Powerpuff Corp</figcaption>
                </figure>
            </section>
        </main>
        
        <?php include "./includes/footer.inc" ?>
    </body>
</html>
