<?php
include("heading.php");
include("header.php");
?>

<title>Awo Dufie - Curation</title>

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

            $stmt = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");

            while ($post = $stmt->fetch(PDO::FETCH_ASSOC)) {

                echo "<div class='blog-card'>";

                if (!empty($post['image_url'])) {

                    echo "<div class='blog-image'>";

                    echo "<img src='" . htmlspecialchars($post['image_url']) . "' alt='" . htmlspecialchars($post['title']) . "'>";

                    echo "</div>";
                }

                echo "<div class='blog-details'>";

                echo "<h3><a href='single-post.php?id=" . $post['id'] . "'>" . htmlspecialchars($post['title']) . "</a></h3>";

                echo "<div class='meta'>Published on " . $post['created_at'] . " by " . htmlspecialchars($post['author']) . "</div>";

                echo "<p>" . htmlspecialchars(substr($post['content'], 0, 500)) . "...</p>";



                echo "<a href='single-post.php?id=" . $post['id'] . "'>Read More</a>";

                echo "</div>";

                echo "</div>";
            }

            ?>

        </div>

    </section>



    <!-- Footer -->

    <footer style="background-color: #003366; color: #ffffff; text-align: center; padding: 1rem 0; margin-top: 2rem;">

        <p>&copy; <?php
                    echo date("Y");
                    ?>
            Awo Dufie. All rights reserved. | Designed by: GenieDev +233592725542</p>

    </footer>



    <script>
        const hamburger = document.getElementById('hamburger');

        const navLinks = document.getElementById('nav-links');

        const links = navLinks.querySelectorAll('li a'); // Select all navigation links



        hamburger.addEventListener('click', () => {

            navLinks.classList.toggle('active');

        });



        // Close the hamburger menu when a nav link is clicked

        links.forEach(link => {

            link.addEventListener('click', () => {

                navLinks.classList.remove('active'); // Remove the active class to close the menu

            });

        });
    </script>

</body>



</html>