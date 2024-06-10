<?php
$conn = new mysqli("localhost", "root", "", "token_system");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Token Lists</title>
    <link rel="stylesheet" href="css/styles3.css">
    <script>
        function fetchAndUpdate(url, elementId) {
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    const element = document.getElementById(elementId);
                    element.innerHTML = '';
                    data.forEach(item => {
                        const li = document.createElement('li');
                        if (elementId === 'assignedTokensList') {
                            li.textContent = `${item.token_number} - ${item.name} (Assigned to: ${item.username})`;
                        } else {
                            li.textContent = `${item.token_number} - ${item.name}`;
                        }
                        element.appendChild(li);
                    });
                });
        }

        function fetchCounterStatus() {
            fetch('fetch_counters.php')
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.getElementById('countersTableBody');
                    tableBody.innerHTML = '';
                    data.forEach(item => {
                        const tr = document.createElement('tr');
                        const td1 = document.createElement('td');
                        const td2 = document.createElement('td');
                        td1.textContent = item.username;
                        td2.textContent = item.counter_status.charAt(0).toUpperCase() + item.counter_status.slice(1);
                        tr.appendChild(td1);
                        tr.appendChild(td2);
                        tableBody.appendChild(tr);
                    });
                });
        }

        function refreshData() {
            fetchAndUpdate('fetch_queued_tokens.php', 'queuedTokensList');
            fetchAndUpdate('fetch_not_arrived_tokens.php', 'notArrivedTokensList');
            fetchAndUpdate('fetch_assigned_tokens.php', 'assignedTokensList');
            fetchCounterStatus();
        }

        setInterval(refreshData, 1000); // Refresh every 1000 milliseconds (1 second)
        window.onload = refreshData; // Fetch data when the page loads
    </script>
</head>
<body>
    <header>
        <h1>Token Management System</h1>
    </header>
    <main>
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

        <div class="column">
            <h2>Assigned Tokens</h2>
            <ul id="assignedTokensList">
                <!-- Dynamic Content -->
            </ul>
        </div>

        <div class="column">
            <h2>Counter Status</h2>
            <table>
                <thead>
                    <tr>
                        <th>Counter</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody id="countersTableBody">
                    <!-- Dynamic Content -->
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <p>© 2024 Application made and hosted by Rochit Madamanchi a.k.a Ph@nt0mW36Hntr. All rights reserved.</p>
    </footer>
</body>
</html>
