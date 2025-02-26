<?php
include("heading.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    $pageTitle = "Awo Dufie - Human Rights Activist & Researcher";
    $pageDescription = "Explore Awo Dufie's advocacy, research, and projects on justice, equality, and human rights. Connect for speaking engagements, writings, and curated content.";
    $pageImage = "https://awodufie.com/img/awo-dufie.jpg";
    $canonicalURL = "https://awodufie.com/";
    ?>

    <title><?php echo $pageTitle; ?></title>
    <link rel="canonical" href="<?php echo $canonicalURL; ?>">
    <meta name="robots" content="index, follow">

    <!-- Primary Meta Tags -->
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords"
        content="Awo Dufie, human rights, activism, research, social justice, gender equality, LGBTIQ+ advocacy, public speaking, writer">
    <meta name="author" content="Awo Dufie">

    <!-- Open Graph (Facebook & LinkedIn) -->
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:image" content="<?php echo $pageImage; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $canonicalURL; ?>">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $pageTitle; ?>">
    <meta name="twitter:description" content="<?php echo $pageDescription; ?>">
    <meta name="twitter:image" content="<?php echo $pageImage; ?>">

    <!-- Structured Data (Schema Markup) -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Person",
            "name": "Awo Dufie",
            "description": "<?php echo $pageDescription; ?>",
            "url": "<?php echo $canonicalURL; ?>",
            "image": "<?php echo $pageImage; ?>",
            "sameAs": [
                "<?php echo htmlspecialchars($about['twitter_link']); ?>",
                "<?php echo htmlspecialchars($about['linkedin_link']); ?>",
                "<?php echo htmlspecialchars($about['instagram_link']); ?>",
                "<?php echo htmlspecialchars($about['youtube_link']); ?>"
            ]
        }
    </script>

    <link rel="icon" href="https://awodufie.com/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/all-style.css">
    <link rel="stylesheet" href="css/blog.css">

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