<?php
$conn = new mysqli("localhost", "root", "", "token_system");

$queued_tokens = $conn->query("SELECT * FROM tokens WHERE status='queued'");
$tokens = [];

while ($row = $queued_tokens->fetch_assoc()) {
    $tokens[] = $row;
}

echo json_encode($tokens);
?>
