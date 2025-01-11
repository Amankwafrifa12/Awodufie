<?php
include("heading.php");
?>
<title>Awo Dufie - Queer Elders Speak</title>
<link rel="stylesheet" href="css/projects.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include("header.php"); ?>
    <!-- About Section -->
    <section id="about" class="project-section">
        <div class="project-text">
            <h2>Queer Elders Speak</h2>
            <p>
                Queer elders speak documents the lived experiences of gender diverse and queer elders. In this project,
                Awo interviews
                and seeks to document the lives of older queer people in Ghana.
            </p>
        </div>

        <div class="project-image">
            <img src="img/elder.jpg" alt="About Me">
        </div>


    </section>


    <!-- Footer -->
    <footer style="background-color: #003366; color: #ffffff; text-align: center; padding: 1rem 0; margin-top: 2rem;">
        <p>&copy; 2024 Awo Dufie. All rights reserved. | Designed by: GenieDev +233592725542</p>
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