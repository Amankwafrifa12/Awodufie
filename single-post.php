<?php
include("heading.php");
include("header.php");
?>
<title><?php
        include 'includes/db.php';

        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);

            $stmt = $conn->prepare("SELECT * FROM posts WHERE id = ?");
            $stmt->execute([$id]);
            $post = $stmt->fetch();

            echo htmlspecialchars($post['title']);
        } ?></title>

<meta property="og:url" content="https: //awodufie.com/single-post.php?id=<?php echo $id; ?>">
<section class=" single-post-section">

    <?php
    include 'includes/db.php';

    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);

        $stmt = $conn->prepare("SELECT * FROM posts WHERE id = ?");
        $stmt->execute([$id]);
        $post = $stmt->fetch();

        if ($post) {
            if (!empty($post['image_url'])) {
                echo "<img src='" . htmlspecialchars($post['image_url']) . "' alt='" . htmlspecialchars($post['title']) . "' class='post-image'>";
            }

            echo "<div class='post-meta'>";
            echo "<span class='post-author'>By " . htmlspecialchars($post['author']) . "</span>";
            echo "<span class='post-date'>" . date("F j, Y, g:i a", strtotime($post['created_at'])) . "</span>";
            echo "</div>";

            echo "<h2 class='post-title'>" . htmlspecialchars($post['title']) . "</h2>";

            // Display the full content
            $content = nl2br(htmlspecialchars($post['content']));
            echo "<p>" . $content . "</p>";
        } else {
            echo "<p>Post not found.</p>";
        }
    } else {
        echo "<p>No post ID provided.</p>";
    }
    ?>

</section>

<?php include("footer.php"); ?>