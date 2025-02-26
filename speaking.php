<?php
include("heading.php");
?>
<?php include("header.php"); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    $pageTitle = "Awo Dufie - Speaking Engagements & Media Appearances";
    $pageDescription = "Explore Awo Dufie's public speaking, interviews, and discussions on human rights, activism, decolonial movements, and social justice.";
    $pageImage = "https://awodufie.com/img/speaking.jpg";
    $canonicalURL = "https://awodufie.com/speaking.php";
    ?>

    <title><?php echo $pageTitle; ?></title>
    <link rel="canonical" href="<?php echo $canonicalURL; ?>">
    <meta name="robots" content="index, follow">

    <!-- Primary Meta Tags -->
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords"
        content="Awo Dufie, public speaking, human rights, activism, decolonial movements, LGBTQ+ advocacy, social justice talks, panel discussions">
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
        ],
        "knowsAbout": ["Human Rights", "Activism", "LGBTQ+ Advocacy", "Decolonial Movements", "Social Justice"],
        "memberOf": {
            "@type": "Organization",
            "name": "Lora Radio Zurich",
            "url": "https://www.lora.ch/"
        }
    }
    </script>

    <link rel="icon" href="https://awodufie.com/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/all-style.css">
    <link rel="stylesheet" href="css/blog.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<style>
/* General Styles */
body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    color: #333;
    background-color: #f9f9f9;
}

.main-content {
    padding: 20px;
    max-width: 1200px;
    margin: auto;
}

/* Section Titles */
.section-title {
    font-size: 1.8rem;
    margin-bottom: 1rem;
    text-align: center;
    color: #222;
}

/* Video Section */
.video-container {
    position: relative;
    padding-top: 56.25%;
    /* Aspect ratio 16:9 */
    margin-bottom: 2rem;
}

.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
    border-radius: 8px;
}

/* Audio Section */
.audio-list {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
}

.audio-item {
    background: #fff;
    padding: 1rem;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.audio-player {
    width: 100%;
    margin-bottom: 0.5rem;
}

.audio-description {
    margin: 0;
    font-size: 0.9rem;
    color: #555;
}

.audio-link {
    color: #007BFF;
    text-decoration: none;
}

.audio-link:hover {
    text-decoration: underline;
}

/* Responsive Design */
@media (min-width: 768px) {
    .audio-list {
        grid-template-columns: repeat(2, 1fr);
    }

    .section-title {
        font-size: 2rem;
    }
}

@media (max-width: 480px) {
    .main-content {
        padding: 10px;
    }

    .section-title {
        font-size: 1.5rem;
    }
}

</style
</style>
<main class="main-content">
    <!-- Embed YouTube Video -->
    <section class="video-section">
        <h1 class="section-title">We've Always Been Here: Queer Histories of Kenya and Ghana</h1>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/xnKWZdBLoCA"
                title="We've Always Been Here: Queer Histories of Kenya and Ghana"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>
        </div>
    </section>

    <!-- Audio Section -->
    <section class="audio-section">
        <h2 class="section-title">Radio Interviews</h2>
        <div class="audio-list">
            <div class="audio-item">
                <h1>Enough 2024: Anti-Queer Laws in Uganda, Ghana and Nigeria: Resistance and Resilience</h1>
                <audio controls class="audio-player">
                    <source
                        src="https://archiv.loratech.ch/sendungen/2024-09-06/035dda2e-d695-471e-87dc-5b34bbbab5df-2024-09-06-12-00-00_dashinit.mp4"
                        type="audio/mp4">
                    Your browser does not support the audio element.
                </audio>
                <p class="audio-description">Panel – Awo Dufie, Adebayo Quadry-Adekanbi, Purity Tumukwasibwe,
                    Moderation: Kwaku Adomako | Audio from <a
                        href="https://www.lora.ch/radio/ausgaben/enough-2024-anti-queere-gesetze-uganda-ghana-und-nigeria-widerstand-und-resilienz"
                        target="_blank" class="audio-link">Lora Radio - Zurich</a></p>
            </div>
            <div class="audio-item">

                <h1>Enough 2024 Final Panel: Strengthening Decolonial Movements in Europe</h1>
                <audio controls class="audio-player">
                    <source
                        src="https://archiv.loratech.ch/sendungen/2024-09-18/3e499487-e97f-466a-a157-05591ad762d0-2024-09-18-08-00-00-enough-2024-Abschlusspanel-Dekoloniale-Bewegungen-in-Europa-strken_dashinit.mp4"
                        type="audio/mp4">
                    Your browser does not support the audio element.
                </audio>
                <p class="audio-description">Panel – Awo Dufie, Ibrahim Izzeldeen (Sudan Uprising Germany), Niloofar
                    Rasooli | Audio from <a
                        href="https://www.lora.ch/radio/ausgaben/enough-2024-abschlusspanel-dekoloniale-bewegungen-europa-staerken-2024-09-18"
                        target="_blank" class="audio-link">Lora Radio - Zurich</a></p>
            </div>
        </div>
    </section>
</main>
<?php include("footer.php"); ?>