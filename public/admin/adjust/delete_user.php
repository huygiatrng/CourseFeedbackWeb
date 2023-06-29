<?php
include '../../../includes/db_connect.php';

// Start session
if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// Only allow access to admins
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../../authentication/login.php");
    exit();
}

// Delete user
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    // Delete reports associated with the user
    $conn->query("DELETE FROM report WHERE user_id = '$user_id'");

    // Delete the user
    $conn->query("DELETE FROM Users WHERE user_id = '$user_id'");
}

// Redirect back to manage users
header("Location: ../manage_users.php");
exit();
?>