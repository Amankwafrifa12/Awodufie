<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
    /* General Styling */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f9;
        color: #333;
    }

    .admin-dashboard {
        max-width: 800px;
        margin: 2rem auto;
        padding: 1.5rem;
        background-color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .admin-dashboard h2 {
        text-align: center;
        font-size: 2rem;
        color: #003366;
        margin-bottom: 1.5rem;
    }

    .admin-dashboard a {
        text-decoration: none;
        color: #ffffff;
        background-color: #003366;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .admin-dashboard a:hover {
        background-color: #00509e;
    }

    .admin-dashboard h3 {
        margin-top: 2rem;
        font-size: 1.5rem;
        color: #003366;
    }

    .admin-dashboard ul {
        list-style: none;
        padding: 0;
    }

    .admin-dashboard li {
        background-color: #f9f9f9;
        margin-bottom: 1rem;
        padding: 1rem;
        border: 1px solid #ddd;
        border-radius: 6px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .admin-dashboard li:nth-child(odd) {
        background-color: #eef3f8;
    }

    .admin-dashboard li a {
        color: rgb(255, 255, 255);
        font-size: 0.9rem;
        margin-left: 0.5rem;
        transition: color 0.3s;
    }

    .admin-dashboard li a:hover {
        color: #d32f2f;
    }

    @media (max-width: 768px) {
        .admin-dashboard {
            padding: 1rem;
        }

        .admin-dashboard h2 {
            font-size: 1.8rem;
        }

        .admin-dashboard h3 {
            font-size: 1.3rem;
        }

        .admin-dashboard li {
            flex-direction: column;
            align-items: flex-start;
        }

        .admin-dashboard li a {
            margin-left: 0;
            margin-top: 0.5rem;
            text-decoration: none;
            color: white;
        }
    }
    </style>
</head>

<body>

    <section class="admin-dashboard">

        <h2>Manage Posts</h2>

        <a href="add-post.php">Add New Post</a>

        <h3>Existing Posts</h3>

        <ul>
            <?php
            include '../includes/db.php';

            $stmt = $conn->query("SELECT * FROM posts");

            while ($post = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<li>" . htmlspecialchars($post['title']) .
                    " <div>" .
                    "<a href='edit-post.php?id=" . $post['id'] . "'>Edit</a>" .
                    " | " .
                    "<a href='delete-post.php?id=" . $post['id'] . "' onclick='return confirm(\"Are you sure you want to delete this post?\");'>Delete</a>" .
                    "</div></li>";
            }
            ?>
        </ul>

    </section>

</body>

</html>