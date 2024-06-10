<?php
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    
    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "token_system");

    // Update the counter status to 'counter closed'
    $conn->query("UPDATE users SET counter_status='counter closed' WHERE id='$user_id'");

    // Close the database connection
    $conn->close();
}

// Destroy the session and redirect to the login page
session_destroy();
header("Location: login.php");
exit();
?>
