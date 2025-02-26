<?php
include("heading.php");

include("header.php");
include 'includes/db.php';

if (isset($_GET['title'])) {
    $title_slug = $_GET['title'];

    // Fetch all posts to find a matching slug
    $stmt = $conn->query("SELECT * FROM posts");
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $post = null;
    foreach ($posts as $p) {
        $generated_slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $p['title']), '-'));
        if ($generated_slug === $title_slug) {
            $post = $p;
            break;
        }
    }

    if (!$post) {
        echo "<title>Post Not Found</title>";
        echo "<p>Post not found.</p>";
        include("footer.php");
        exit;
    }
} else {
    echo "<title>Invalid Request</title>";
    echo "<p>No post title provided.</p>";
    include("footer.php");
    exit;
}
?>

<!DOCTYPE html>

<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    if ($post) {
        $pageTitle = htmlspecialchars($post['title']);
        $pageDescription = htmlspecialchars(substr(strip_tags($post['content']), 0, 160)) . "...";
        $pageImage = !empty($post['image_url']) ? htmlspecialchars($post['image_url']) : "https://awodufie.com/img/default-image.jpg";
        $canonicalURL = "https://awodufie.com/blogs.php?title=" . urlencode($title_slug);
    } else {
        $pageTitle = "Awo Dufie Blog - Advocacy, Justice & Equality";
        $pageDescription = "Explore insightful articles on human rights, advocacy, justice, and equality written by Awo Dufie.";
        $pageImage = "https://awodufie.com/img/default-image.jpg";
        $canonicalURL = "https://awodufie.com/blogs.php";
    }
    ?>

    <title><?php echo $pageTitle; ?></title>
    <link rel="canonical" href="<?php echo $canonicalURL; ?>">
    <meta name="robots" content="index, follow">

    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords"
        content="Awo Dufie, human rights, activism, advocacy, research, justice, equality, blog, articles">
    <meta name="author" content="Awo Dufie">

    <!-- Open Graph (Facebook & LinkedIn) -->
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:image" content="<?php echo $pageImage; ?>">
    <meta property="og:type" content="article">
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
</head>

<section class="single-post-section">

    <?php
    if (!empty($post['image_url'])) {
        echo "<img src='" . htmlspecialchars($post['image_url']) . "' alt='" . htmlspecialchars($post['title']) . "' class='post-image'>";
    }

    echo "<div class='post-meta'>";
    echo "<span class='post-author'>By " . htmlspecialchars($post['author']) . "</span>";
    echo "<span class='post-date'>" . date("F j, Y, g:i a", strtotime($post['created_at'])) . "</span>";
    echo "</div>";

    echo "<h2 class='post-title'>" . htmlspecialchars($post['title']) . "</h2>";

    // Display the full content
    $content = htmlspecialchars($post['content']); // Escape HTML for safety

    // Replace *text* with <b>text</b>
    $content = preg_replace('/\*(.*?)\*/', '<b>$1</b>', $content);

    // Replace _text_ with <i>text</i>
    $content = preg_replace('/_(.*?)_/', '<i>$1</i>', $content);

    // Convert newlines to <br> for proper line breaks
    $content = nl2br($content);

    echo "<p>" . $content . "</p>";
    ?>

</section>

<?php include("footer.php"); ?>