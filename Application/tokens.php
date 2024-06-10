<?php
session_start();
$conn = new mysqli("localhost", "root", "", "token_system");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    
    // Insert new token into the database
    $sql = "INSERT INTO tokens (name, status) VALUES ('$name', 'queued')";
    if ($conn->query($sql) === TRUE) {
        echo "Token generated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Prevent form resubmission on refresh
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_GET['delete'])) {
    $token_number = $_GET['delete'];
    $conn->query("DELETE FROM tokens WHERE token_number='$token_number'");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$queued_tokens = $conn->query("SELECT token_number, name FROM tokens WHERE status='queued'");
$not_arrived_tokens = $conn->query("SELECT token_number, name FROM tokens WHERE status='not_arrived'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Token Generation</title>
    <link rel="stylesheet" href="styles4.css">
    <script>
        function fetchAndUpdate(url, elementId) {
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    const element = document.getElementById(elementId);
                    element.innerHTML = '';
                    data.forEach(item => {
                        const li = document.createElement('li');
                        li.innerHTML = `
                            ${item.token_number} - ${item.name}
                            ${elementId === 'notArrivedTokensList' ? `<a href="prioritize.php?id=${item.token_number}" class="btn btn-prioritize">Prioritize</a>` : ''}
                            <a href="?delete=${item.token_number}" class="btn btn-delete">Delete</a>
                        `;
                        element.appendChild(li);
                    });
                });
        }

        function refreshData() {
            fetchAndUpdate('fetch_queued_tokens.php', 'queuedTokensList');
            fetchAndUpdate('fetch_not_arrived_tokens.php', 'notArrivedTokensList');
        }

        setInterval(refreshData, 1000); // Refresh every 1000 milliseconds (1 second)
        window.onload = refreshData; // Fetch data when the page loads
    </script>
</head>
<body>
    <header>
        <h1>Token Generation</h1>
    </header>
    <main>
        <form method="POST">
            <label for="name">Create token:</label>
            <div class="form-group">
                <input type="text" name="name" id="name" placeholder="Name" required>
                <button type="submit">Generate Token</button>
            </div>
        </form>
        <div class="columns">
            <div class="column">
                <h2>Queued Tokens</h2>
                <ul id="queuedTokensList">
                    <!-- Dynamic Content -->
                </ul>
            </div>
            <div class="column">
                <h2>Not Arrived Tokens</h2>
                <ul id="notArrivedTokensList">
                    <!-- Dynamic Content -->
                </ul>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Application made and hosted by Rochit Madamanchi a.k.a Ph@nt0mW36Hntr. All rights reserved.</p>
    </footer>
</body>
</html>
