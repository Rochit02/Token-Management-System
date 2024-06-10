<?php
$conn = new mysqli("localhost", "root", "", "token_system");

$not_arrived_tokens = $conn->query("SELECT * FROM tokens WHERE status='not_arrived'");
$tokens = [];

while ($row = $not_arrived_tokens->fetch_assoc()) {
    $tokens[] = $row;
}

echo json_encode($tokens);
?>
