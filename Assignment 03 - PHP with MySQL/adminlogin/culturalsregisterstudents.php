<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Register for Culturals</title>
    <style>
        body{
            background-color: #A69CAC;
        }
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
        input {
            margin-top: 7px;
        }
    </style>
</head>
<body>
    <h1>Students Register for Culturals Events</h1>
    <?php
    if (isset($_GET['registered'])) {
        echo '<p>You have successfully registered for the event: Event ID ' . htmlspecialchars($_GET['eventid']) . '</p>';
    }

    $conn = new mysqli('localhost', 'root', '', 'test');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM culturalsregisters"; // Assuming 'culturals' is your table name
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="table-container">';
        echo '<table border="1">';
        echo '<tr><th>Event ID</th><th>Event Name</th><th>Roll no</th><th>Name</th><th>Dept</th><th>Section</th><th>Year of Study</th><th>Phonenumber</th><th>Mail ID</th></tr>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['eventid'] . '</td>';
            echo '<td>' . $row['eventName'] . '</td>';
            echo '<td>' . $row['rollno'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['dept'] . '</td>';
            echo '<td>' . $row['section'] . '</td>';
            echo '<td>' . $row['yearofstudy'] . '</td>';
            echo '<td>' . $row['phonenumber'] . '</td>';
            echo '<td>' . $row['mailid'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
    } else {
        echo 'No records found.';
    }

    $conn->close();
    ?>

    <!-- Form to trigger export -->
    <form method="post" action="cregister.php">
        <button type="submit" name="export">Export to Excel</button>
    </form>
</body>
</html>
