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
    <link rel="stylesheet" href="css/all-style.css">


    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Awo Dufie - Activist & Researcher",
        "description": "Explore Awo Dufie's projects, services, and research portfolio. Dedicated to advocating for justice, equality, and freedom worldwide.",
        "url": "https://awodufie.com/"
    }
    </script>