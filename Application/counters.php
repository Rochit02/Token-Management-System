<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "token_system");

// Fetch the username of the logged-in user
$user_id = $_SESSION['user_id'];
$username = $conn->query("SELECT username FROM users WHERE id='$user_id'")->fetch_assoc()['username'];

// Handling next token
if (isset($_POST['next_token'])) {
    // Mark the current token as served
    $conn->query("UPDATE tokens SET status='served' WHERE status='assigned' AND assigned_to='$user_id'");

    // Assign next 'queued' token
    $next_token = $conn->query("SELECT token_number FROM tokens WHERE status='queued' ORDER BY token_number LIMIT 1")->fetch_assoc();
    if ($next_token) {
        $conn->query("UPDATE tokens SET status='assigned', assigned_to='$user_id' WHERE token_number='" . $next_token['token_number'] . "'");
    }
}

// Handling not arrived token
if (isset($_POST['not_arrived'])) {
    $conn->query("UPDATE tokens SET status='not_arrived' WHERE status='assigned' AND assigned_to='$user_id' LIMIT 1");
}

// Handling counter status
if (isset($_POST['status'])) {
    $status = $_POST['status'];
    if ($status == 'on a break' || $status == 'counter closed') {
        // Mark the current token as served if the counter is on a break or closed
        $conn->query("UPDATE tokens SET status='served' WHERE status='assigned' AND assigned_to='$user_id'");
    }
    $conn->query("UPDATE users SET counter_status='$status' WHERE id='$user_id'");
}

$current_token = $conn->query("SELECT * FROM tokens WHERE status='assigned' AND assigned_to='$user_id' LIMIT 1")->fetch_assoc();
$current_status = $conn->query("SELECT counter_status FROM users WHERE id='$user_id'")->fetch_assoc()['counter_status'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counters</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <header>
        <h2>Counters Page</h2>
        <div class="user-info">
            <h3>Welcome, <?= htmlspecialchars($username) ?></h3>
            <a href="logout.php">Logout</a>
        </div>
    </header>
    <main>
        <div class="current-token">
            <?php if ($current_token): ?>
                <p>Current Token: <?= htmlspecialchars($current_token['token_number']) ?> - <?= htmlspecialchars($current_token['name']) ?></p>
            <?php else: ?>
                <p>Current Token: No tokens assigned</p>
            <?php endif; ?>
        </div>
        <form method="POST" class="token-form">
            <button type="submit" name="next_token" value="next_token">Next Token</button>
            <button type="submit" name="not_arrived" value="not_arrived">Not Arrived</button>
        </form>
        <form method="POST" class="status-form">
            <button type="submit" name="status" value="active">Active</button>
            <button type="submit" name="status" value="on a break">On a Break</button>
            <button type="submit" name="status" value="counter closed">Counter Closed</button>
        </form>
        <p>Current Status: <?= htmlspecialchars(ucfirst($current_status)) ?></p>
    </main>
    <footer class="footer">
        <p>© 2024 Application made and hosted by Rochit Madamanchi a.k.a Ph@nt0mW36Hntr. All rights reserved.</p>
    </footer>
</body>
</html>
