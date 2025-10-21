<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="styles/styles.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=domain,deployed_code,location_on" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Establish connection to API-->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- load Barlow font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" /> <!--google fonts icon-->
</head>
<body>
    <?php include "./includes/header.inc" ?>
        <div class="container_jobs">
            <input class="jobpage" type="radio" name="joblist" id="job1"><!--Makes input so the webpage is interactive without Javascript-->
            <input class="jobpage" type="radio" name="joblist" id="job2"><!--same name so only 1 can be selected at a time-->
            <input class="jobpage" type="radio" name="joblist" id="job3">
            <input class="jobpage" type="radio" name="joblist" id="job4">   
            <main class="job-detail">
                <!-- RYAN: Use DETAIL1 as a template for dynamically updating PHP element -->
                <div class="detail medium-padding" id="detail1">
                    <h2>Software Engineer <span class="material-symbols-outlined">deployed_code</span></h2>
                        <p class="company"><span id="domainicon" class="material-symbols-outlined">domain</span>Powerpuff Corp.</p>
                        <p class="location"><span id="locationicon" class="material-symbols-outlined">location_on</span>Melbourne VIC</p> <!--location symbol taken form google fonts-->
                        <p class="salary">A$90,000-110,000</p>
                    <hr> <!-- draw this line in CSS instead -->
                    <article>
<<<<<<< HEAD
                        <section class="bottom-margin">
                            <h3>What We're looking for:</h3>
                            <ul >
                                <li>Solid experience with programming languages such as C++ or C#, and a strong understanding of object-oriented design principles. </li>
                                <li>Proven ability to debug and solve complex technical issues efficiently.</li>
                                <li>A strong interest in gameplay design and the ability to translate creative ideas into functional systems.</li>
                            </ul>
                        </section>
                        <section class="bottom-margin">
                            <h3>What's Involved:</h3>
                            <ol class="job-detail-ordered-list bottom-margin">
                                <li><p><strong>Build Core Gameplay systems</strong></p></li>
                                <ul>
                                    <li>You'll design and implement the essential systems that power the game, from character controls to in-game mechanics. These systems form the foundation of the player’s experience and need to be robust, efficient, and scalable</li>
=======
                        <ul class="job-detail-list">
                            <li><h3>What we're looking for:</h3></li>
                                <ul class="job-detail-ordered-list">
                                    <li>Solid experience with programming languages such as C++ or C#, and a strong understanding of object-oriented design principles. </li>
                                    <li>Proven ability to debug and solve complex technical issues efficiently.</li>
                                    <li>A strong interest in gameplay design and the ability to translate creative ideas into functional systems.</li>
>>>>>>> f2970321942aa84aa888782fbc87b2a51e63754c
                                </ul>
                                <li><p><strong>Collaborate with design and art teams</strong></p></li>
                                <ul>
                                    <li>You'll work closely with designers and artists to translate creative concepts into technical features. This collaboration ensures the game feels cohesive, fun, and visually polished.</li>
                                </ul>
                                <li><p><strong>Requires strong coding skills (C++/C#)</strong></p></li>
                                <ul>
                                    <li>Success in this role requires expertise in languages such as C++ or C#, as well as the ability to write clean, maintainable code. Strong debugging and problem-solving skills are also critical.</li>
                                </ul>
                            </ol>
                        </section>
                        <section class="bottom-margin">
                            <h3 >Why Join Us:</h3>
                            <ul>
                                <li>Contribute directly to gameplay systems that shape the player experience</li>
                                <li>Collaborate with cross-disciplinary teams in a creative environment</li>
                                <li>Grow your engineering skills with challenging technical problems</li>
                            </ul>
                        </section>
                        
                        
                    </article>
                </div>
                <!-- TO DO: Once detail1 is dynamic, remove detail2-4 -->
                <div class="detail" id="detail2" role="description">
                            <h2>Graphics Engineer <span class="material-symbols-outlined">wall_art</span></h2>
                            <section class="company">
                                <p><span id="domainicon" class="material-symbols-outlined">domain</span>Powerpuff Corp.</p>
                            </section>
                            <section class="location">
                                    <p><span id="locationicon" class="material-symbols-outlined">location_on</span>Melbourne VIC</p> <!--location symbol taken form google fonts-->
                            </section>
                    <section class="salary">
                        <p>A$90,000-110,000</p>
                    </section>
                    <hr>
                    <article>
                        < class="job-detail-list">    
                            <li><h3>What We're looking for:</h3></li>
                                <ul class="job-detail-ordered-list">
                                    <li>Strong knowledge of graphics APIs such as DirectX, Vulkan, or OpenGL, and experience writing shaders.</li>
                                    <li>Solid understanding of rendering pipelines, lighting, post-processing, and visual effects.</li>
                                    <li>Strong mathematical foundation in linear algebra, geometry, and 3D transformations.</li>
                                    <li>Ability to analyze performance bottlenecks and optimize rendering for multiple platforms.</li>
                                    <li>Creativity and technical curiosity, with a passion for delivering breathtaking visual experiences.</li>
                                </ul>
                            <li><h3>What's Involved:</h3></li>
                                <ol class="job-detail-ordered-list">
                                    <li><p><h4>Create rendering and visual effects</h4></p></li>
                                    <ul>
                                        <li>You’ll design and implement the essential systems that power the game, from character controls to in-game mechanics. These systems form the foundation of the player’s experience and need to be robust, efficient, and scalable</li>
                                    </ul>
                                    <li><p><h4>Optimize shaders and performance</h4></p></li>
                                    <ul>
                                        <li>You’ll fine-tune shaders and rendering techniques to ensure the game runs smoothly without sacrificing visual quality. Performance optimization is key for both PC and console releases.</li>
                                    </ul>
                                    <li><p><h4>Requires graphics API and math knowledge</h4></p></li>
                                    <ul>
                                        <li>A deep understanding of graphics APIs like DirectX, Vulkan, or OpenGL is required. Strong math skills, particularly in linear algebra and 3D transformations, are essential for success.</li>
                                    </ul>
                                </ol>
                            <li><h3>Why Join Us:</h3></li>
                                <ul class="job-detail-ordered-list">
                                    <li>Work on the cutting edge of rendering technology to create stunning visuals and immersive experiences.</li>
                                    <li>Help define the visual direction of our games by collaborating directly with artists and designers.</li>
                                    <li>Gain hands-on experience with the latest graphics APIs, shader languages, and performance optimization techniques.</li>
                                </ul>
                        </>
                    </article>
                </div>
                <div class="detail" id="detail3" role="description">
                            <h2>Build Engineer <span class="material-symbols-outlined">construction</span></h2>
                            <section class="company">
                                <p><span id="domainicon" class="material-symbols-outlined">domain</span>Powerpuff Corp.</p>
                            </section>
                            <section class="location">
                                <p><span id="locationicon" class="material-symbols-outlined">location_on</span>Melbourne VIC</p> <!--location symbol taken form google fonts-->
                            </section>
                    <section class="salary">
                        <p>A$100,000-130,000</p>
                    </section>
                    <hr>
                    <article>
                        <ul class="job-detail-list">
                            <li><h3>What We're looking for:</h3></li>
                                <ul class="job-detail-ordered-list">
                                    <li>Proficiency in scripting languages such as Python, Bash, or PowerShell, with the ability to automate complex tasks.</li>
                                    <li>Hands-on experience with CI/CD systems such as Jenkins, GitHub Actions, TeamCity, or similar platforms.</li>
                                    <li>Strong troubleshooting and diagnostic skills to quickly resolve build and deployment issues.</li>
                                    <li>A solid understanding of version control systems like Git or Perforce.</li>
                                    <li>A detail-oriented mindset with a focus on stability, reliability, and scalability.</li>
                                </ul>
                            <li><h3>What's Involved:</h3></li>
                                <ol class="job-detail-ordered-list">
                                    <li><p><h4>Manage automated build pipelines</h4></p></li>
                                    <ul>
                                        <li>You’ll oversee the systems that automatically compile and package the game, ensuring stable builds are always available for testing. This helps the whole team work faster and more efficiently.</li>
                                    </ul>
                                    <li><p><h4>Troubleshoot and streamline CI/CD</h4></p></li>
                                    <ul>
                                        <li>You’ll maintain and improve continuous integration and delivery pipelines. Quick problem resolution keeps development moving smoothly and prevents bottlenecks.</li>
                                    </ul>
                                    <li><p><h4>Requires scripting and DevOps skills </h4></p></li>
                                    <ul>
                                        <li>Proficiency in scripting languages and DevOps practices is needed to automate tasks and integrate tools effectively. A good grasp of source control systems is also important.</li>
                                    </ul>
                                </ol>
                            <li><h3>Why Join Us:</h3></li>
                                <ul class="job-detail-ordered-list">
                                    <li>Build, maintain, and optimize automated systems that keep development smooth and efficient.</li>
                                    <li>Be the backbone of the studio’s technical pipeline, directly impacting productivity and team success.</li>
                                    <li>Play a critical role in streamlining workflows and ensuring the team can focus on building great games.</li>
                                </ul>
                        </ul>
                    </article>
                </div>
                <div class="detail" id="detail4" role="description">
                            <h2>Network Engineer <span class="material-symbols-outlined">network_node</span></h2>
                            <section class="company">
                                <p><span id="domainicon" class="material-symbols-outlined">domain</span>Powerpuff Corp.</p>
                            </section>
                            <section class="location">
                                <p><span id="locationicon" class="material-symbols-outlined">location_on</span>Melbourne VIC</p> <!--location symbol taken form google fonts-->
                            </section>
                    <section class="salary">
                        <p>A$105,000-125,000</p>
                    </section>
                    <hr>
                    <article>
                        <ul class="job-detail-list">
                            <li><h3>What We're looking for:</h3></li>
                                <ul class="job-detail-ordered-list">
                                    <li>Strong knowledge of networking protocols (TCP, UDP, WebSockets) and their use in real-time applications.</li>
                                    <li>Experience with server architecture, backend services, and scalable infrastructure.</li>
                                    <li>Ability to debug and optimize network performance, addressing latency, packet loss, and connectivity issues.</li>
                                    <li>Experience with security best practices for online games, including encryption and cheat prevention.</li>
                                </ul>
                            <li><h3>What's Involved:</h3></li>
                                <ol class="job-detail-ordered-list">
                                    <li><p><h4>Develop multiplayer features</h4></p></li>
                                    <ul>
                                        <li>You’ll design and implement the systems that power multiplayer gameplay, such as matchmaking, lobbies, and in-game communication. Your work directly impacts the player’s social experience.</li>
                                    </ul>
                                    <li><p><h4>Ensure stable, low-latency connections</h4></p></li>
                                    <ul>
                                        <li>You’ll focus on reducing lag and connection issues, ensuring smooth and fair gameplay for players across different regions. Stability is crucial for competitive and cooperative play.</li>
                                    </ul>
                                    <li><p><h4>Requires networking and server expertise</h4></p></li>
                                    <ul>
                                        <li>This role requires a strong understanding of networking protocols, server architecture, and debugging tools. Experience with scalable backend systems is a major advantage.</li>
                                    </ul>
                                </ol>
                            <li><h3>Why Join Us:</h3></li>
                                <ul class="job-detail-ordered-list">
                                    <li>Develop the multiplayer backbone that connects players worldwide in real-time.</li>
                                    <li>Build systems that power matchmaking, game sessions, leaderboards, and online services.</li>
                                    <li>Join a team that values technical excellence, collaboration, and delivering unforgettable multiplayer experiences.</li>
                                </ul>
                        </ul>
                    </article> 
                </div>
            </main>
        <div class="job-page">
            <!-- RYAN: Use job1 as a template for dynamically updating PHP element -->
                <aside id="job1" class="job-list hover-effect" tabindex = "0" role="button"><!--id so the page knows which input is selected when box is clicked-->
                        <h2>Software Engineer <span class="material-symbols-outlined">deployed_code</span></h2>
                        <p class="company"><span id="domainicon" class="material-symbols-outlined">domain</span>Powerpuff Corp.</p>
                        <p class="location"><span id="locationicon" class="material-symbols-outlined">location_on</span>Melbourne VIC</p> <!--location symbol taken form google fonts-->
                        <p class="salary">A$90,000-110,000</p>
                        <h3>Job Summary</h3>
                        <ul class="job-summary-list">
                            <li>Build core gameplay systems</li>
                            <li>Collaborate with design and art teams</li>
                            <li>Requires strong coding skills (C++/C#)</li>
                        </ul>
                    <div class="job-footing ref-num"><em>REF-SE842</em></div><div class="reporting-line"><em>Team Lead</em></div></em>
                </aside>
            <!-- RYAN: Once job1 is dynamic, delete job2-4 -->
            <label for="job2">
                <div id="job2" class="job-list">
                        <h2>Graphics Engineer <span class="material-symbols-outlined">wall_art</span></h2>
                        <section class="company">
                            <p><span id="domainicon" class="material-symbols-outlined">domain</span>Powerpuff Corp.</p>
                        </section>
                        <section class="location">
                            <p><span id="locationicon" class="material-symbols-outlined">location_on</span>Melbourne VIC</p> <!--location symbol taken form google fonts-->
                        </section>
                    <section class="salary">
                        <p>A$90,000-110,000</p>
                    </section>
                    <section class="job-summary">
                        <h3>Job Summary</h3>
                        <ul class="job-summary-list">
                            <li>Create rendering and visual effects</li>
                            <li>Optimize shaders and performance</li>
                            <li>    </li>
                        </ul>
                    </section>
                    <footing class="job-footing">
                        <div class=" job-footing ref-num"><em>REF-GE529</em></div><div class="reporting-line"><em>Team Lead</em></div></em>
                    </footing>
                </div>
            </label>
            <label for="job3">
                <div id="job3" class="job-list">
                        <h2>Build Engineer <span class="material-symbols-outlined">construction</span></h2>
                        <section class="company">
                            <p><span id="domainicon" class="material-symbols-outlined">domain</span>Powerpuff Corp.</p>
                        </section>
                        <section class="location">
                            <p><span id="locationicon" class="material-symbols-outlined">location_on</span>Melbourne VIC</p> <!--location symbol taken form google fonts-->
                        </section>
                    <section class="salary">
                        <p>A$100,000-130,000</p>
                    </section>
                    <section class="job-summary">
                        <h3>Job Summary </h3>
                        <ul class="job-summary-list">
                            <li>Manage automated build pipelines</li>
                            <li>Troubleshoot and streamline CI/CD</li>
                            <li>Requires scripting and DevOps skills</li>
                        </ul>
                    </section>
                    <footing class="job-footing">
                        <div class="ref-num"><em>REF-BE317</em></div><div class="reporting-line"><em>Team Lead</em></div></em>
                    </footing>
                </div>
            </label>
            <label for="job4">
                <div id="job4" class="job-list">
                        <h2>Network Engineer <span class="material-symbols-outlined">network_node</span></h2>
                        <section class="company">
                            <p><span id="domainicon" class="material-symbols-outlined">domain</span>Powerpuff Corp.</p>
                        </section>
                        <section class="location">
                            <p><span id="locationicon" class="material-symbols-outlined">location_on</span>Melbourne VIC</p> <!--location symbol taken form google fonts-->
                        </section>
                    <section class="salary">
                        <p>A$105,000-125,000</p>
                    </section>
                    <section class="job-summary">
                        <h3>Job Summary</h3>
                        <ul class="job-summary-list">
                            <li>Develop multiplayer features</li>
                            <li>Ensure stable, low-latency connections</li>
                            <li>Requires networking and server expertise</li>
                        </ul>
                    </section>
                    <footing class="job-footing">
                        <div class="ref-num"><em>REF-NE604</em></div><div class="reporting-line"><em>Team Lead</em></div></em>
                    </footing>
                </div>
            </label>
        </div>
    </div>
    <?php include "./includes/footer.inc" ?>
</body>
</html> 
