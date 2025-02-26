<?php
include("heading.php");
?>

<?php include("header.php"); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    $pageTitle = "Awo Dufie – Writing & Publications";
    $pageDescription = "Explore the writings of Awo Dufie, covering themes of gender, identity, activism, and cultural narratives.";
    $pageImage = "https://awodufie.com/img/writing-feature.jpg"; // Update with an actual featured image
    $canonicalURL = "https://awodufie.com/writing.php";
    ?>

    <title><?php echo $pageTitle; ?></title>
    <link rel="canonical" href="<?php echo $canonicalURL; ?>">
    <meta name="robots" content="index, follow">

    <!-- Primary Meta Tags -->
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords"
        content="Awo Dufie, writing, publications, essays, gender studies, cultural narratives, activism, African literature, LGBTQ+ perspectives">
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
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>




<?php include("footer.php"); ?>