<?php
$conn = new mysqli("localhost", "root", "", "token_system");

$assigned_tokens = $conn->query("SELECT tokens.*, users.username FROM tokens LEFT JOIN users ON tokens.assigned_to = users.id WHERE status='assigned'");
$tokens = [];

while ($row = $assigned_tokens->fetch_assoc()) {
    $tokens[] = $row;
}

echo json_encode($tokens);
?>
