<?php
include("heading.php");
include("header.php"); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    $pageTitle = "Rainbow Business Directory - Empowering LGBTIQ+ Entrepreneurs in Ghana";
    $pageDescription = "The Rainbow Business Directory is a decolonial and trans-led initiative fostering an inclusive entrepreneurial ecosystem for LGBTIQ+ businesses in Ghana.";
    $pageImage = "https://awodufie.com/img/rainbow.jpg";
    $canonicalURL = "https://awodufie.com/rainbow.php";
    ?>

    <title><?php echo $pageTitle; ?></title>
    <link rel="canonical" href="<?php echo $canonicalURL; ?>">
    <meta name="robots" content="index, follow">

    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords"
        content="Rainbow Business Directory, LGBTIQ+ businesses, Ghana entrepreneurship, trans-led business, inclusive economy, human rights, economic empowerment">
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

    <link rel="icon" href="https://awodufie.com/favicon/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/all-style.css">
    <link rel="stylesheet" href="css/blog.css">

    <link rel="stylesheet" href="css/projects.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>


<body>

    <!-- About Section -->
    <section id=project class="project-section">
        <div class="project-text">
            <h2>Rainbow Business Directory</h2>
            <p>
                The Rainbow Business Directory is a decolonial and trans-led collective established in 2023 to fill an
                identified need
                gap following Ghana’s LGBTIQ Strategic Consortium economic impact assessment recommendation on fostering
                an inclusive
                entrepreneurial ecosystem, enhancing economic opportunities that exist for members of especially trans
                and LGBQ+
                community, and promoting the visibility and patronage of LGBTIQ owned businesses in Ghana.
            </p>
            <br>
            <p>Our vision is to see a proactive trans population with skills for positive change in our societies. We
                are working to
                ensure a society that celebrates diversity, acknowledges the dignity of marginalized and vulnerable
                populations, and
                embraces full human rights for all people.

            </p>
        </div>

        <div class="project-image">
            <img src="img/rainbow.jpg" alt="Rainbow Business Directory">
        </div>


    </section>


    <?php include("footer.php"); ?>