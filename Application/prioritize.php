<?php

$conn = new mysqli("localhost", "root", "", "token_system");

if (isset($_GET['id'])) {
    $token_id = $_GET['id'];
    $conn->query("UPDATE tokens SET status='queued' WHERE token_number='$token_id'");
}

header("Location: tokens.php");
exit();
?>
