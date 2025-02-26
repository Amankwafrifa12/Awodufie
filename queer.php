<?php
include("heading.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    $pageTitle = "Queer Elders Speak – Awo Dufie";
    $pageDescription = "Queer Elders Speak documents the lived experiences of older queer individuals in Ghana, sharing their stories of resilience and identity.";
    $pageImage = "https://awodufie.com/img/elder.jpg";
    $canonicalURL = "https://awodufie.com/queer.php";
    ?>

    <title><?php echo $pageTitle; ?></title>
    <link rel="canonical" href="<?php echo $canonicalURL; ?>">
    <meta name="robots" content="index, follow">

    <!-- Primary Meta Tags -->
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords"
        content="Queer elders, LGBTQ+ history, queer stories, gender diverse, Ghana LGBTQ+, Awo Dufie, queer resilience, queer narratives">
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
            "@type": "Article",
            "headline": "<?php echo $pageTitle; ?>",
            "description": "<?php echo $pageDescription; ?>",
            "image": "<?php echo $pageImage; ?>",
            "url": "<?php echo $canonicalURL; ?>",
            "author": {
                "@type": "Person",
                "name": "Awo Dufie",
                "url": "https://awodufie.com"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Awo Dufie",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://awodufie.com/favicon/favicon.ico"
                }
            },
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "<?php echo $canonicalURL; ?>"
            }
        }
    </script>

    <link rel="icon" href="https://awodufie.com/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/all-style.css">
    <link rel="stylesheet" href="css/blog.css">
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


    <?php include("footer.php"); ?>