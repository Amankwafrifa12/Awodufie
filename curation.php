<?php
include("heading.php");
include("header.php");
include 'includes/db.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    $pageTitle = "Awo Dufie – Curation & Blog";
    $pageDescription = "Discover curated articles, insights, and reflections on gender, identity, art, and activism from Awo Dufie's blog.";
    $pageImage = "https://awodufie.com/img/curation-feature.jpg"; // Update with an actual feature image
    $canonicalURL = "https://awodufie.com/curation.php";
    ?>

    <title><?php echo $pageTitle; ?></title>
    <link rel="canonical" href="<?php echo $canonicalURL; ?>">
    <meta name="robots" content="index, follow">

    <!-- Primary Meta Tags -->
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords"
        content="Awo Dufie, curation, blog, African literature, gender studies, activism, identity, culture, art">
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
        "@type": "Blog",
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
        "blogPost": [
            <?php
                $stmt = $conn->query("SELECT * FROM posts ORDER BY created_at DESC LIMIT 5");
                while ($post = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $post['title']), '-'));
                    echo '{
                    "@type": "BlogPosting",
                    "headline": "' . htmlspecialchars($post['title']) . '",
                    "author": {
                        "@type": "Person",
                        "name": "' . htmlspecialchars($post['author']) . '"
                    },
                    "datePublished": "' . $post['created_at'] . '",
                    "url": "https://awodufie.com/blogs.php?title=' . $slug . '"
                },';
                }
                ?>
        ]
    }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/all-style.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/projects.css">
    <link rel="icon" href="https://awodufie.com/favicon/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<style>
/* Blog Section Styling */
.blogs-section {
    padding: 2rem;
    background-color: #ffffff;
    color: #003366;
}

.blogs-section h2 {
    margin-bottom: 1.5rem;
    font-size: 2rem;
    text-align: center;
}

.blogs-container {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.blog-card {
    display: flex;
    flex: 1 1 100%;
    background-color: #f0f8ff;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    transition: transform 0.3s;
}

.blog-card:hover {
    transform: scale(1.02);
}

.blog-image {
    flex: 1 1 30%;
    max-width: 30%;
}

.blog-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.blog-details {
    flex: 1 1 70%;
    padding: 1rem;
}

.blog-details h3 {
    margin-bottom: 0.5rem;
    font-size: 1.25rem;
}

.blog-details p {
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
}

.blog-details .meta {
    font-size: 0.8rem;
    color: #666666;
    margin-bottom: 0.5rem;
}

.blog-details a {
    color: #003366;
    text-decoration: none;
    font-weight: bold;
}

.admin-actions {
    margin-top: 1rem;
    display: flex;
    gap: 1rem;
}

.admin-actions a {
    padding: 0.5rem 1rem;
    color: #ffffff;
    border-radius: 5px;
    text-decoration: none;
    font-size: 0.9rem;
}

.edit-button {
    background-color: #4CAF50;
}

.delete-button {
    background-color: #f44336;
}

.edit-button:hover {
    background-color: #45a049;
}

.delete-button:hover {
    background-color: #d32f2f;
}

@media (max-width: 768px) {
    .blog-card {
        flex-direction: column;
    }

    .blog-image {
        flex: 1 1 100%;
        max-width: 100%;
    }

    .blog-details {
        flex: 1 1 100%;
    }
}
</style>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- Blogs Section -->
    <section id="blogs" class="blogs-section">
        <h2>Curation</h2>
        <div class="blogs-container">

            <?php
            include 'includes/db.php';

            // Fetch posts from the database
            $stmt = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");

            while ($post = $stmt->fetch(PDO::FETCH_ASSOC)) {
                // Generate slug from title
                $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $post['title']), '-'));

                echo "<div class='blog-card'>";

                if (!empty($post['image_url'])) {
                    echo "<div class='blog-image'>";
                    echo "<img src='" . htmlspecialchars($post['image_url']) . "' alt='" . htmlspecialchars($post['title']) . "'>";
                    echo "</div>";
                }

                echo "<div class='blog-details'>";
                echo "<h3><a href='blogs.php?title=" . $slug . "'>" . htmlspecialchars($post['title']) . "</a></h3>";
                echo "<div class='meta'>Published on " . $post['created_at'] . " by " . htmlspecialchars($post['author']) . "</div>";

                // Apply nl2br and htmlspecialchars to handle line breaks and special characters
                $content = htmlspecialchars($post['content']);

                // Replace *text* with <b>text</b>
                $content = preg_replace('/\*(.*?)\*/', '<b>$1</b>', $content);

                // Replace _text_ with <i>text</i>
                $content = preg_replace('/_(.*?)_/', '<i>$1</i>', $content);

                // Convert newlines to <br> for proper line breaks
                $content = nl2br($content);
                echo "<p>" . substr($content, 0, 500) . (strlen($content) > 500 ? "..." : "") . "</p>";
                echo "<a href='blogs.php?title=" . $slug . "'>Read More</a>";

                // Admin actions
                if (isset($_SESSION['admin_id'])) {
                    echo "<div class='admin-actions'>";
                    echo "<a href='admin/edit-post.php?id=" . $post['id'] . "' class='edit-button'><i class='fas fa-edit'></i> Edit</a>";
                    echo "<a href='admin/delete-post.php?id=" . $post['id'] . "' class='delete-button' onclick='return confirm(\"Are you sure you want to delete this post?\")'><i class='fas fa-trash-alt'></i> Delete</a>";
                    echo "</div>";
                }

                echo "</div>"; // Close blog-details div
                echo "</div>"; // Close blog-card div
            }
            ?>

        </div>
    </section>

    <!-- Footer -->
    <footer style="background-color: #003366; color: #ffffff; text-align: center; padding: 1rem 0; margin-top: 2rem;">
        <p>&copy; <?php echo date("Y"); ?> Awo Dufie. All rights reserved. | Designed by: GenieDev +233592725542</p>
    </footer>

</body>

</html>