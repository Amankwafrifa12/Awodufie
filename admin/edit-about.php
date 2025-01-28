<?php
// Start the session
session_start();

// Check if 'admin_id' session variable is set
if (!isset($_SESSION['admin_id'])) {
    // Redirect to the login page
    header("Location: ../login.php");
    exit();
}

// Include database connection
include '../includes/db.php';

// Fetch the about section data
$query = "SELECT * FROM about_section WHERE id = 1";
$stmt = $conn->prepare($query);
$stmt->execute();
$about = $stmt->fetch(PDO::FETCH_ASSOC);

// Initialize feedback messages
$successMessage = $errorMessage = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);
    $instagram_link = htmlspecialchars($_POST['instagram_link']);
    $twitter_link = htmlspecialchars($_POST['twitter_link']);
    $youtube_link = htmlspecialchars($_POST['youtube_link']);
    $linkedin_link = htmlspecialchars($_POST['linkedin_link']);
    $image_url = $about['image_url']; // Keep the old image unless a new one is uploaded

    // Handle file upload if a new image is selected
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $imageTmp = $_FILES['image']['tmp_name'];
        $imageName = $_FILES['image']['name'];
        $imageExt = pathinfo($imageName, PATHINFO_EXTENSION);

        // Validate file extension (optional)
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array(strtolower($imageExt), $allowedExtensions)) {
            $errorMessage = "Invalid image format. Only JPG, JPEG, PNG, and GIF are allowed.";
        } else {
            // Generate a unique name for the image
            $newImageName = time() . '_' . uniqid() . '.' . $imageExt;
            $imagePath = '../uploads/' . $newImageName;

            // Move the uploaded image to the "uploads" directory
            if (move_uploaded_file($imageTmp, $imagePath)) {
                $image_url = $newImageName;
            } else {
                $errorMessage = "Failed to upload image.";
            }
        }
    }

    // Update the database
    if (empty($errorMessage)) {
        $updateQuery = "UPDATE about_section SET 
                        name = :name, 
                        description = :description, 
                        instagram_link = :instagram_link, 
                        twitter_link = :twitter_link, 
                        youtube_link = :youtube_link, 
                        linkedin_link = :linkedin_link, 
                        image_url = :image_url 
                        WHERE id = 1";

        $updateStmt = $conn->prepare($updateQuery);
        $updateStmt->bindParam(':name', $name);
        $updateStmt->bindParam(':description', $description);
        $updateStmt->bindParam(':instagram_link', $instagram_link);
        $updateStmt->bindParam(':twitter_link', $twitter_link);
        $updateStmt->bindParam(':youtube_link', $youtube_link);
        $updateStmt->bindParam(':linkedin_link', $linkedin_link);
        $updateStmt->bindParam(':image_url', $image_url);

        if ($updateStmt->execute()) {
            $successMessage = "About section updated successfully!";
            // Refresh the data
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $about = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            $errorMessage = "Failed to update the about section.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Post</title>
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
    form input[type="file"],
    form input[type="url"] {
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
        form input[type="url"],
        form button {
            font-size: 14px;
        }

        /* Ensuring inputs take full width on small screens */
        form input[type="text"],
        form textarea,
        form input[type="file"],
        form input[type="url"] {
            width: 100%;
            box-sizing: border-box;
        }
    }

    /* Improve spacing and form element width on larger screens */
    @media (min-width: 600px) and (max-width: 1024px) {
        form {
            padding: 15px;

        }

        form input[type="text"],
        form textarea,
        form input[type="file"],
        form input[type="url"],
        form button {
            font-size: 15px;
        }
    }
    </style>
</head>

<body>

    <form method="POST" action="" enctype="multipart/form-data">
        <h2>Edit About</h2>
        <?php if (!empty($successMessage)) : ?>
        <p style="color: green;"><?php echo $successMessage; ?></p>
        <?php endif; ?>

        <?php if (!empty($errorMessage)) : ?>
        <p style="color: red;"><?php echo $errorMessage; ?></p>
        <?php endif; ?>
        <label for="title">Name</label>
        <input type="text" id="title" name="name" value="<?php echo htmlspecialchars($about['name']); ?>" required>

        <label for="content">Description</label>
        <textarea id="content" name="description" placeholder="Post Content"
            required><?php echo htmlspecialchars($about['description']); ?></textarea>


        <!-- Image Upload -->
        <label for="image">Image Upload:</label>
        <?php if (!empty($about['image_url'])): ?>
        <img src="../uploads/<?php echo htmlspecialchars($about['image_url']); ?>" alt="Current Image" width="100">
        <?php endif; ?>
        <input type="file" id="image" name="image">

        <label for="instagram_link">Instagram Link:</label>
        <input type="url" id="instagram_link" name="instagram_link"
            value="<?php echo htmlspecialchars($about['instagram_link']); ?>">

        <label for="twitter_link">Twitter Link:</label>
        <input type="url" id="twitter_link" name="twitter_link"
            value="<?php echo htmlspecialchars($about['twitter_link']); ?>">

        <label for="youtube_link">YouTube Link:</label>
        <input type="url" id="youtube_link" name="youtube_link"
            value="<?php echo htmlspecialchars($about['youtube_link']); ?>">

        <label for="linkedin_link">LinkedIn Link:</label>
        <input type="url" id="linkedin_link" name="linkedin_link"
            value="<?php echo htmlspecialchars($about['linkedin_link']); ?>">



        <button type="submit">Save Changes</button>
    </form>

</body>

</html>