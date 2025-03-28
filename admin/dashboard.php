<?php
// Start the session
session_start();

// Check if 'admin_id' session variable is set
if (!isset($_SESSION['admin_id'])) {
    // Redirect to the login page
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
    /* General Reset */

    * {

        margin: 0;

        padding: 0;

        box-sizing: border-box;

    }



    body {

        font-family: Arial, sans-serif;

        line-height: 1.6;

        background-color: #f9f9f9;

        color: #333333;

    }



    /* Header Styling */

    header {

        display: flex;

        justify-content: space-between;

        align-items: center;

        background-color: #003366;

        color: #ffffff;

        padding: 1rem 2rem;

        position: sticky;

        top: 0;

        z-index: 1000;

    }



    .logo h1 {

        font-size: 1.5rem;

    }



    .nav-links {

        list-style: none;

        display: flex;

        align-items: center;

        gap: 1.5rem;

    }



    .nav-links li a {

        color: #f0f0f0;

        text-decoration: none;

        font-size: 1rem;

        transition: color 0.3s;

    }



    .nav-links li a:hover {

        color: #6699cc;

    }



    .logout-icon {

        font-size: 1.2rem;

        cursor: pointer;

        transition: color 0.3s;

    }



    .logout-icon:hover {

        color: #ff4d4d;

    }



    .hamburger {

        display: none;

        flex-direction: column;

        gap: 5px;

        cursor: pointer;

    }



    .hamburger span {

        display: block;

        width: 25px;

        height: 3px;

        background-color: #ffffff;

    }



    /* Dashboard Container */

    .dashboard-container {

        padding: 2rem;

        max-width: 1200px;

        margin: 0 auto;

    }



    /* User Profile Section */

    .user-profile {

        background-color: #ffffff;

        border: 1px solid #ddd;

        border-radius: 10px;

        padding: 2rem;

        margin-bottom: 2rem;

        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

    }



    .user-profile-header {

        display: flex;

        align-items: center;

        margin-bottom: 2rem;

    }



    .user-profile-header img {

        width: 100px;

        height: 100px;

        border-radius: 50%;

        margin-right: 1rem;

    }



    .user-profile-header h2 {

        font-size: 1.5rem;

        margin-bottom: 0.5rem;

    }



    .user-profile-header p {

        color: #666666;

    }



    .user-profile-actions {

        display: flex;

        gap: 1rem;

        margin-top: 1rem;

    }



    .user-profile-actions button {

        padding: 0.8rem 1.5rem;

        background-color: #003366;

        color: #ffffff;

        border: none;

        border-radius: 5px;

        cursor: pointer;

        font-size: 1rem;

        transition: background-color 0.3s;

    }



    .user-profile-actions button:hover {

        background-color: #00509e;

    }



    /* Cards Section */

    .cards {

        display: flex;

        gap: 1.5rem;

        flex-wrap: wrap;

    }



    .card {

        flex: 1 1 calc(50% - 1rem);

        background-color: #f0f8ff;

        border: 1px solid #ddd;

        border-radius: 10px;

        padding: 1.5rem;

        text-align: center;

        transition: transform 0.3s;

        cursor: pointer;

    }



    .card:hover {

        transform: scale(1.05);

    }



    .card i {

        font-size: 2rem;

        margin-bottom: 1rem;

        color: #003366;

    }



    .card h3 {

        font-size: 1.25rem;

        margin-bottom: 0.5rem;

    }



    .card p {

        color: #666666;

    }



    @media (max-width: 768px) {

        .cards {

            flex-direction: column;

        }



        .card {

            flex: 1 1 100%;

        }

    }
    </style>

</head>



<body>

    <!-- Header -->

    <header>

        <div class="logo">

            <a href="../index.php" style="text-decoration: none; color: white;">

                <h1>Awo Dufie</h1>

            </a>

        </div>

        <nav>

            <ul id="nav-links" class="nav-links">

                <li><a href="../index.php">Home</a></li>

                <li><a href="logout.php" class="logout-icon"><i class="fas fa-power-off"></i></a></li>

            </ul>

            <div class="hamburger" id="hamburger">

                <span></span>

                <span></span>

                <span></span>

            </div>

        </nav>

    </header>

    <!-- Dashboard Container -->

    <div class="dashboard-container">

        <!-- User Profile Section -->

        <div class="user-profile">

            <div class="user-profile-header">

                <img src="../img/awo-dufie.jpg" alt="User  Profile Picture">

                <div>

                    <h2>Awo Dufie</h2>

                    <p>Admin</p>

                </div>

            </div>

            <div class="user-profile-actions">

                <button onclick="location.href='update_password.php'">Update Password</button>

            </div>

        </div>



        <!-- Cards Section -->

        <div class="cards">

            <div class="card" onclick="location.href='edit-about.php'">

                <i class="fas fa-edit"></i>

                <h3>Edit About Section</h3>

                <p>Click here to edit about section</p>

            </div>

            <div class="card" onclick="location.href='add_project.html'">

                <i class="fas fa-plus-circle"></i>

                <h3>Add New Project</h3>

                <p>Click here to add a new project to your dashboard.</p>

            </div>



            <div class="card" onclick="location.href='edit-blog.php'">

                <i class="fas fa-folder"></i>

                <h3>Manage Post</h3>

                <p>Click here to manage your posts</p>

            </div>

        </div>

    </div>



    <script>
    // JavaScript for hamburger menu toggle

    const hamburger = document.getElementById('hamburger');

    const navLinks = document.getElementById('nav-links');



    hamburger.addEventListener('click', () => {

        navLinks.classList.toggle('active');

    });
    </script>

</body>



</html>