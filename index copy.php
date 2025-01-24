<?php
include("heading.php");
?>
<title>Awo Dufie - Activist & Researcher</title>

<style>

</style>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>



<body>

    <?php include("header.php"); ?>


    <!-- About Section -->

    <section id="about" class="about-section">

        <div class="about-text">

            <h2>Awo Dufie Fofie (She/Ono)</h2>

            <p>

                Awo is a decolonial and interdisciplinary curator and scholartivist. Through a decolonial lens, her work

                seeks to

                <br>

                I. Research, curate, and document the history of queer (nonheteronormative) people in Africa.</li>

                <br> II. Document the present experiences and lives of queer (nonheteronormative) Africans.</li>

                <br> III. Reimagine an equal society and future for gender-diverse, queer, and nonheteronormative

                Africans.</li>



            </p>







            <div class="social-media">

                <!--<a href="https://www.facebook.com/yourprofile" class="social-icon facebook" target="_blank">

                    <i class="material-icons"><i class="fab fa-facebook"></i></i>

                </a> -->

                <a href="https://www.instagram.com/dufie_awo" class="social-icon instagram" target="_blank">

                    <i class="material-icons"><i class="fab fa-instagram"></i></i>

                </a>

                <a href="https://x.com/awo_dufie" class="social-icon twitter" target="_blank">

                    <i class="material-icons"><i class="fab fa-twitter"></i></i>

                </a>

                <a href="https://www.youtube.com/@Documenting_Queerness" class="social-icon youtube" target="_blank">

                    <i class="material-icons"><i class="fab fa-youtube"></i></i>

                </a>

                <a href="https://www.linkedin.com/in/awo-dufie-54821b280/" class="social-icon linkedin" target="_blank">

                    <i class="material-icons"><i class="fab fa-linkedin-in"></i></i>

                </a>

            </div>

        </div>



        <div class="about-image">

            <img src="img/awo-dufie.jpg" alt="About Me">

        </div>





    </section>



    <!-- Projects Section -->

    <section id="projects" class="projects-section">

        <h2>Projects</h2>

        <div class="projects-container">

            <div class="project-card" onclick="window.location.href='queer.php';">

                <div class="project-image">

                    <img src="img/elder.jpg" alt="Project 1">

                </div>

                <div class="project-details">

                    <h3>Queer Elders Speak</h3>

                    <p>Queer elders speak documents the lived experiences of gender diverse and queer elders.</p>

                    <a href="queer.php">Learn More</a>

                </div>

            </div>

            <div class="project-card" onclick="window.location.href='rainbow.php';">

                <div class="project-image">

                    <img src="img/rainbow.jpg" alt="Project 2">

                </div>

                <div class="project-details">

                    <h3>Rainbow Business Directory</h3>

                    <p>The Rainbow Business Directory is a decolonial and trans-led collective established in 2023 to

                        fill an identified need

                        gap...</p>

                    <a href="rainbow.php">Learn More</a>

                </div>

            </div>

            <!-- <div class="project-card">

                <div class="project-image">

                    <img src="img/justice.jpg" alt="Project 3">

                </div>

               <div class="project-details">

                    <h3>Sisters Arms</h3>

                    <p>Advocacy and support programs for victims of injustice and discrimination.</p>

                    <a href="#">Learn More</a>

                </div> 

            </div>

        </div> -->

    </section>



    <!-- Services Section -->

    <section id="services" class="services-section">

        <h2>Services</h2>

        <div class="services-container">

            <!-- Speaking Card -->

            <div class="service-card" onclick="window.location.href='speaking.php';">

                <div class="service-image">

                    <img src="img/speaking.jpg" alt="Speaking">

                </div>

                <div class="service-details">

                    <h3>Speaking</h3>

                    <p>Engage with Awo Dufie through her insightful interviews and talks.</p>

                    <ul>

                        <li><a href="speaking.php" target="_blank">Learn More...</a></li>

                    </ul>

                </div>

            </div>



            <!-- Writing Card -->

            <div class="service-card" onclick="window.location.href='writing.php';">

                <div class="service-image">

                    <img src="img/writing.jpg" alt="Writing">

                </div>

                <div class="service-details">

                    <h3>Writing</h3>

                    <p>Explore Awo Dufie's thought-provoking essays and writings.</p>

                    <ul>

                        <li><a href="writing.php" target="_blank">Read Essays</a></li>

                    </ul>

                </div>

            </div>



            <!-- Curation Card -->

            <div class="service-card" onclick="window.location.href='curation.php';">

                <div class="service-image">

                    <img src="img/curation.jpg" alt="Curation">

                </div>

                <div class="service-details">

                    <h3>Curation</h3>

                    <p>Discover curated content and blogs by Awo Dufie.</p>

                    <ul>

                        <li><a href="curation.php" target="_blank">Visit Curated Blog</a></li>

                    </ul>

                </div>

            </div>

        </div>

    </section>



    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <h2>Contact Me</h2>
        <p>If you'd like to learn more about my work or collaborate on a project, feel free to get in touch!</p>

        <form class="contact-form" action="send_email.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>

    </section>

    <?php include("footer.php"); ?>