<?php
$conn = new mysqli("localhost", "root", "", "token_system");

$counters = $conn->query("SELECT username, counter_status FROM users");
$counters_list = [];

while ($row = $counters->fetch_assoc()) {
    $counters_list[] = $row;
}

echo json_encode($counters_list);
?>
