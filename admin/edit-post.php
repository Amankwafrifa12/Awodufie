<?php

session_start();

if (!isset($_SESSION['admin_id'])) {

    header('Location: login.php');

    exit;
}

include '../includes/db.php';



if (isset($_GET['id'])) {

    $id = intval($_GET['id']);

    $stmt = $conn->prepare("SELECT * FROM posts WHERE id = ?");

    $stmt->execute([$id]);

    $post = $stmt->fetch(PDO::FETCH_ASSOC);
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title = $_POST['title'];

    $content = $_POST['content'];





    $stmt = $conn->prepare("UPDATE posts SET title = ?, content = ? WHERE id = ?");

    $stmt->execute([$title, $content, $id]);

    header('Location: ../curation.php');

    exit;
}

?>



<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <title>Edit Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <style>
    /* General body styling */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 40px;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        box-sizing: border-box;
    }

    /* Form container styling */
    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 600px;
        display: flex;
        flex-direction: column;
        gap: 15px;
        box-sizing: border-box;
    }

    /* Form heading styling */
    form h2 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
        text-align: center;
    }

    /* Label styling */
    form label {
        font-size: 14px;
        margin-bottom: 5px;
        display: block;
        color: #333;
    }

    /* Input and textarea styling */
    form input[type="text"],
    form textarea,
    form input[type="file"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        box-sizing: border-box;
    }

    form textarea {
        height: 150px;
        resize: vertical;
    }

    /* File input styling */
    form input[type="file"] {
        padding: 5px;
    }

    /* Button styling */
    form button {
        width: 100%;
        padding: 12px;
        background-color: #00509e;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    form button:hover {
        background-color: #004080;
    }

    /* Responsive design */
    @media (max-width: 600px) {
        body {
            padding: 0;
            margin: 0;
        }

        form {
            padding: 15px;
        }

        form h2 {
            font-size: 20px;
        }

        form input[type="text"],
        form textarea,
        form input[type="file"],
        form button {
            font-size: 14px;
        }

        /* Ensuring inputs take full width on small screens */
        form input[type="text"],
        form textarea,
        form input[type="file"] {
            width: 100%;
            box-sizing: border-box;
        }
    }

    /* Improve spacing and form element width on larger screens */
    @media (min-width: 600px) and (max-width: 1024px) {
        form {
            padding: 25px;
        }

        form input[type="text"],
        form textarea,
        form input[type="file"],
        form button {
            font-size: 15px;
        }
    }
    </style>

</head>



<body>

    <form method="POST" action="">

        <h2>Edit Post</h2>

        <input type="text" name="title" value="<?php echo htmlspecialchars($post['title']); ?>" required>

        <textarea name="content" required><?php echo htmlspecialchars($post['content']); ?></textarea>



        <button type="submit">Update Post</button>

    </form>

</body>



</html>