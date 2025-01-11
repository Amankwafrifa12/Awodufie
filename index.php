<?php

// Start the session

session_start();



// Check if the session is active (e.g., if an admin is logged in)

if (isset($_SESSION['admin_id'])) { // Now checking for 'admin_id'

    // If the session is available, display the floating button

    echo '

    <!-- Floating Button -->

    <a href="admin/dashboard.php" class="floating-button">

        Open Dashboard

    </a>';
}

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="alternate" href="https://awodufie.com" hreflang="en-us">

    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://awodufie.com">

    <meta name="description"
        content="Awo Dufie - Human rights activist and researcher committed to advocating for justice, equality, and freedom worldwide. Explore projects, services, and research portfolio.">

    <meta name="keywords" content="Awo Dufie, human rights, advocacy, equality, research, portfolio, activism">

    <meta name="author" content="Awo Dufie">

    <meta property="og:title" content="Awo Dufie - Activist & Researcher">

    <meta property="og:description"
        content="Explore Awo Dufie's projects, services, and research portfolio. Dedicated to advocating for justice, equality, and freedom worldwide.">

    <meta property="og:image" content="https://awodufie.com/img/awo-dufie.jpg">

    <meta property="og:url" content="https://awodufie.com">

    <meta property="og:type" content="website">
    <link rel="icon" href="https://awodufie.com/favicon/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "Awo Dufie - Activist & Researcher",
            "description": "Explore Awo Dufie's projects, services, and research portfolio. Dedicated to advocating for justice, equality, and freedom worldwide.",
            "url": "https://awodufie.com/"
        }
    </script>

    <title>Awo Dufie - Activist & Researcher</title>

    <style>
        /* General Reset */

        * {

            margin: 0;

            padding: 0;

            box-sizing: border-box;

        }



        body {

            font-family: Arial, sans-serif;

            line-height: 1.6;

            background-color: #f9f9f9;

            color: #333333;

        }



        /* Header Styling */

        header {

            display: flex;

            justify-content: space-between;

            align-items: center;

            background-color: #003366;

            color: #ffffff;

            padding: 1rem 2rem;

            position: sticky;

            top: 0;

            z-index: 1000;

        }



        .logo h1 {

            font-size: 1.5rem;

        }



        .nav-links {

            list-style: none;

            display: flex;

            gap: 1.5rem;

        }



        .nav-links li a {

            color: #f0f0f0;

            text-decoration: none;

            font-size: 1rem;

            transition: color 0.3s;

        }



        .nav-links li a:hover {

            color: #6699cc;

        }



        .hamburger {

            display: none;

            flex-direction: column;

            gap: 5px;

            cursor: pointer;

        }



        .hamburger span {

            display: block;

            width: 25px;

            height: 3px;

            background-color: #ffffff;

        }



        /* Social Media Icons Advanced Styling */

        .social-media {

            display: flex;

            justify-content: left;

            align-items: left;

            margin-top: 1.5rem;

            gap: 1rem;

        }



        .social-icon {

            position: relative;

            width: 25px;

            height: 25px;

            display: flex;

            justify-content: center;

            align-items: center;

            text-decoration: none;

            border-radius: 50%;

            transition: all 0.3s ease;

            overflow: hidden;

        }



        .social-icon::before {

            content: '';

            position: absolute;

            top: 0;

            left: -100%;

            width: 100%;

            height: 100%;

            background: rgba(255, 255, 255, 0.1);

            transition: 0.5s;

            z-index: 1;

        }



        .social-icon:hover::before {

            left: 10;

        }



        .social-icon .material-icons {

            position: relative;

            z-index: 2;

            color: white;

            font-size: 24px;

            transition: transform 0.3s ease;

        }



        .social-icon:hover .material-icons {

            transform: scale(1.2) rotate(360deg);

        }



        /* Specific Color Styles for Each Platform */

        .social-icon.facebook {

            background-color: #3b5998;

            box-shadow: 0 4px 15px rgba(59, 89, 152, 0.4);

        }



        .social-icon.instagram {

            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);

            box-shadow: 0 4px 15px rgba(188, 24, 136, 0.4);

        }



        .social-icon.twitter {

            background-color: #1da1f2;

            box-shadow: 0 4px 15px rgba(29, 161, 242, 0.4);

        }



        .social-icon.youtube {

            background-color: #ff0000;

            box-shadow: 0 4px 15px rgba(255, 0, 0, 0.4);

        }



        .social-icon.linkedin {

            background-color: #0077b5;

            box-shadow: 0 4px 15px rgba(0, 119, 181, 0.4);

        }



        /* Hover Effects */

        .social-icon.facebook:hover {

            background-color: #2d4373;

        }



        .social-icon.twitter:hover {

            background-color: #0c85d0;

        }



        .social-icon.youtube:hover {

            background-color: #c4302b;

        }



        .social-icon .material-icons {

            font-size: 14px;

        }







        /* About Section */

        .about-section {

            display: flex;

            flex-wrap: wrap;

            align-items: center;

            justify-content: center;

            padding: 2rem;

            background-color: #f0f8ff;

            color: #003366;

        }



        .about-text {

            flex: 1 1 50%;

            padding: 1rem;

        }



        .about-text h2 {

            margin-bottom: 1rem;

        }



        .about-image {

            flex: 1 1 50%;

            padding: 1rem;

            text-align: center;

        }



        .about-image img {

            max-width: 100%;

            height: auto;

            border-radius: 10px;

        }



        /* Projects Section */

        .projects-section {

            padding: 2rem;

            background-color: #ffffff;

            color: #003366;

            text-align: center;

        }



        .projects-section h2 {

            margin-bottom: 1.5rem;

            font-size: 2rem;

        }



        .projects-container {

            display: flex;

            flex-wrap: wrap;

            justify-content: center;

            gap: 1.5rem;

        }



        .project-card {

            flex: 1 1 calc(30% - 1rem);

            background-color: #f0f8ff;

            border: 1px solid #ddd;

            border-radius: 10px;

            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);

            overflow: hidden;

            transition: transform 0.3s;

        }



        .project-card:hover {

            transform: scale(1.05);

        }



        .project-image img {

            width: 100%;

            height: auto;

        }



        .project-details {

            padding: 1rem;

        }



        .project-details h3 {

            margin-bottom: 0.5rem;

            font-size: 1.25rem;

        }



        .project-details p {

            font-size: 0.9rem;

            margin-bottom: 0.5rem;

        }



        .project-details a {

            color: #003366;

            text-decoration: none;

            font-weight: bold;

        }



        /* Services Section */

        .services-section {

            padding: 2rem;

            background-color: #ffffff;

            color: #003366;

            text-align: center;

        }



        .services-section h2 {

            margin-bottom: 1.5rem;

            font-size: 2rem;

        }



        .services-container {

            display: flex;

            flex-wrap: wrap;

            justify-content: center;

            gap: 1.5rem;

        }



        .service-card {

            flex: 1 1 calc(30% - 1rem);

            background-color: #f0f8ff;

            border: 1px solid #ddd;

            border-radius: 10px;

            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);

            overflow: hidden;

            transition: transform 0.3s;

        }



        .service-card:hover {

            transform: scale(1.05);

        }



        .service-image img {

            width: 100%;

            height: auto;

        }



        .service-details {

            padding: 1rem;

        }



        .service-details h3 {

            margin-bottom: 0.5rem;

            font-size: 1.25rem;

        }



        .service-details p {

            font-size: 0.9rem;

            margin-bottom: 0.5rem;

        }



        .service-details ul {

            list-style: none;

            padding: 0;

        }



        .service-details ul li {

            margin-bottom: 0.5rem;

        }



        .service-details ul li a {

            color: #003366;

            text-decoration: none;

            font-weight: bold;

        }



        .service-details ul li a:hover {

            text-decoration: underline;

        }



        /* Contact Section */

        .contact-section {

            padding: 2rem;

            background-color: #f0f8ff;

            color: #003366;

            text-align: center;

        }



        .contact-section h2 {

            margin-bottom: 1rem;

        }



        .contact-form {

            max-width: 600px;

            margin: 0 auto;

        }



        .contact-form input,

        .contact-form textarea {

            width: 100%;

            padding: 0.8rem;

            margin-bottom: 1rem;

            border: 1px solid #ccc;

            border-radius: 5px;

        }



        .contact-form button {

            padding: 0.8rem 1.5rem;

            background-color: #003366;

            color: #ffffff;

            border: none;

            border-radius: 5px;

            cursor: pointer;

            font-size: 1rem;

            transition: background-color 0.3s;

        }



        .contact-form button:hover {

            background-color: #00509e;

        }



        /* Floating Button Styling */

        .floating-button {

            position: fixed;

            bottom: 20px;

            right: 20px;

            padding: 10px 20px;

            background-color: rgba(0, 51, 102, 0.5);

            /* Added transparency (0.8) */

            color: #ffffff;

            text-decoration: none;

            border-radius: 5px;

            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);

            transition: background-color 0.3s, transform 0.3s;

            z-index: 1000;

        }



        .floating-button:hover {

            background-color: rgb(0, 51, 103);

            /* Added transparency (0.8) */

            transform: scale(1.05);

        }



        @media (max-width: 768px) {

            .nav-links {

                display: none;

                flex-direction: column;

                position: absolute;

                top: 100%;

                left: 0;

                text-align: center;

                background-color: #003366;

                width: 100%;

                padding: 1rem 0;

            }



            .nav-links.active {

                display: flex;

            }



            .hamburger {

                display: flex;

            }



            .about-section {

                flex-direction: column-reverse;

            }



            .about-text {

                text-align: center;

            }



            .project-card {

                flex: 1 1 calc(100% - 1rem);

            }



            .social-media {

                flex-wrap: wrap;

            }



            .social-icon {

                width: 25px;

                height: 25px;

                margin: 0.5rem;

            }



            .social-icon .material-icons {

                font-size: 14px;

            }



            .social-media {

                display: flex;

                justify-content: center;

                align-items: center;

                margin-top: 1.5rem;

                gap: 1rem;

            }



            .service-card {

                flex: 1 1 calc(100% - 1rem);

            }



        }
    </style>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>



<body>

    <!-- Header -->

    <!-- Header -->

    <header>

        <div class="logo">

            <a href="index.php" style="text-decoration: none; color: white;">

                <h1>Awo Dufie</h1>

            </a>

        </div>

        <nav>

            <ul id="nav-links" class="nav-links">

                <li><a href="index.php#about">About</a></li>

                <li><a href="index.php#projects">Projects</a></li>

                <li><a href="index.php#research">Research</a></li>

                <li><a href="curation.php#curation">Curation</a></li>

                <li><a href="assets/resume.pdf" target="_blank">CV</a></li>

                <li><a href="index.php#contact">Contact</a></li>

            </ul>

            <div class="hamburger" id="hamburger">

                <span></span>

                <span></span>

                <span></span>

            </div>

        </nav>

    </header>



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

            <div class="project-card">

                <div class="project-image">

                    <img src="img/elder.jpg" alt="Project 1">

                </div>

                <div class="project-details">

                    <h3>Queer Elders Speak</h3>

                    <p>Queer elders speak documents the lived experiences of gender diverse and queer elders.</p>

                    <a href="queer.php">Learn More</a>

                </div>

            </div>

            <div class="project-card">

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

            <div class="service-card">

                <div class="service-image">

                    <img src="img/speaking.jpg" alt="Speaking">

                </div>

                <div class="service-details">

                    <h3>Speaking</h3>

                    <p>Engage with Awo Dufie through her insightful interviews and talks.</p>

                    <ul>

                        <li><a href="https://reportout.org/interview" target="_blank">ReportOut Interview</a></li>

                        <li><a href="https://zurich-interview-1.com" target="_blank">Zurich Interview 1</a></li>

                        <li><a href="https://zurich-interview-2.com" target="_blank">Zurich Interview 2</a></li>

                    </ul>

                </div>

            </div>



            <!-- Writing Card -->

            <div class="service-card">

                <div class="service-image">

                    <img src="img/writing.jpg" alt="Writing">

                </div>

                <div class="service-details">

                    <h3>Writing</h3>

                    <p>Explore Awo Dufie's thought-provoking essays and writings.</p>

                    <ul>

                        <li><a href="https://essays.com" target="_blank">Read Essays</a></li>

                    </ul>

                </div>

            </div>



            <!-- Curation Card -->

            <div class="service-card">

                <div class="service-image">

                    <img src="img/curation.jpg" alt="Curation">

                </div>

                <div class="service-details">

                    <h3>Curation</h3>

                    <p>Discover curated content and blogs by Awo Dufie.</p>

                    <ul>

                        <li><a href="https://curated-blog.com" target="_blank">Visit Curated Blog</a></li>

                    </ul>

                </div>

            </div>

        </div>

    </section>



    <!-- Contact Section -->

    <section id="contact" class="contact-section">

        <h2>Contact Me</h2>

        <p>If you'd like to learn more about my work or collaborate on a project, feel free to get in touch!</p>

        <form class="contact-form" action="#" method="POST">

            <input type="text" name="name" placeholder="Your Name" required>

            <input type="email" name="email" placeholder="Your Email" required>

            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>

            <button type="submit">Send Message</button>

        </form>



    </section>







    <!-- Footer -->

    <footer style="background-color: #003366; color: #ffffff; text-align: center; padding: 1rem 0; margin-top: 2rem;">

        <p>&copy; <?php
                    echo date("Y");
                    ?>
            Awo Dufie. All rights reserved. | Designed by: GenieDev +233592725542</p>

    </footer>



    <script>
        const hamburger = document.getElementById('hamburger');

        const navLinks = document.getElementById('nav-links');

        const links = navLinks.querySelectorAll('li a'); // Select all navigation links



        hamburger.addEventListener('click', () => {

            navLinks.classList.toggle('active');

        });



        // Close the hamburger menu when a nav link is clicked

        links.forEach(link => {

            link.addEventListener('click', () => {

                navLinks.classList.remove('active'); // Remove the active class to close the menu

            });

        });
    </script>

</body>



</html>