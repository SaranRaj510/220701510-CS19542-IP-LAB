<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display and Export Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .export-button {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h1>Display and Export Data</h1>
    <div class="export-button">
        <form method="post" action="samplexl.php">
            <button type="submit" name="export" value="Export to Excel">Export to Excel</button>
        </form>
    </div>
    <table>
        <tr>
            <th>Event ID</th>
            <th>Event Name</th>
            <th>Date and Time</th>
            <th>Venue</th>
            <th>Description</th>
            <th>Participants</th>
        </tr>
        <?php
        $conn = new mysqli('localhost', 'root', '', 'test');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM culturals"; // Assuming 'culturals' is your table name
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['eventid'] . '</td>';
                echo '<td>' . $row['eventName'] . '</td>';
                echo '<td>' . $row['eventDateTime'] . '</td>';
                echo '<td>' . $row['eventVenue'] . '</td>';
                echo '<td>' . $row['eventDescription'] . '</td>';
                echo '<td>' . $row['eventParticipants'] . '</td>';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="6">No records found.</td></tr>';
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
