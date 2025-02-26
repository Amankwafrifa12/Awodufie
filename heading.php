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
