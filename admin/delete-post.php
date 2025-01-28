<?php
session_start();
include '../includes/db.php';

if (!isset($_SESSION['admin_id'])) {
    header("Location: ../login.php");
    exit();
}

if (isset($_GET['id'])) {
    $post_id = intval($_GET['id']);

    $stmt = $conn->prepare("DELETE FROM posts WHERE id = :id");
    $stmt->bindParam(':id', $post_id);

    if ($stmt->execute()) {
        header("Location: ../curation.php?message=Post deleted successfully");
    } else {
        header("Location: ../curation.php?error=Failed to delete post");
    }
} else {
    header("Location: ../curation.php");
    exit();
}