<?php
include("heading.php");
?>

<title>Awo Dufie - Activist & Researcher</title>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Awo Dufie",
    "description": "Explore Awo Dufie's projects, services, and research portfolio. Dedicated to advocating for justice, equality, and freedom worldwide.",
    "url": "https://awodufie.com/"
    "logo": "https://awodufie.com/img/awo-dufie.jpg"
}
</script>

<style>

</style>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>



<body>

    <?php include("header.php"); ?>
    <?php include 'includes/db.php';

    // Fetch data from the about_section table
    $query = "SELECT * FROM about_section WHERE id = 1";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $about = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>

    <!-- Dynamic About Section -->
    <section id="about" class="about-section">
        <div class="about-text">
            <h2><?php echo htmlspecialchars($about['name']); ?>
                <?php if (isset($_SESSION['admin_id'])) {
                    echo '<a href="admin/edit-about.php"><i class="fa fa-edit"></i> </a>';
                }
                ?></h2>

            <p><?php echo nl2br(htmlspecialchars($about['description'])); ?></p>

            <div class="social-media">

                <a href="<?php echo htmlspecialchars($about['instagram_link']); ?>" class="social-icon instagram"
                    target="_blank">
                    <i class="material-icons"><i class="fab fa-instagram"></i></i>
                </a>
                <a href="<?php echo htmlspecialchars($about['twitter_link']); ?>" class="social-icon twitter"
                    target="_blank">
                    <i class="material-icons"><i class="fab fa-twitter"></i></i>
                </a>
                <a href="<?php echo htmlspecialchars($about['youtube_link']); ?>" class="social-icon youtube"
                    target="_blank">
                    <i class="material-icons"><i class="fab fa-youtube"></i></i>
                </a>
                <a href="<?php echo htmlspecialchars($about['linkedin_link']); ?>" class="social-icon linkedin"
                    target="_blank">
                    <i class="material-icons"><i class="fab fa-linkedin"></i></i>
                </a>
            </div>
        </div>
        <div class="about-image">
            <img src="uploads/<?php echo htmlspecialchars($about['image_url']); ?>" alt="About Me">
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