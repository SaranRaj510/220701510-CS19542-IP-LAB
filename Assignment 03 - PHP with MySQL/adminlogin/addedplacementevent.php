<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Added Placement and Training Event Management</title>
    <style>
        body{
            background-color: #A69CAC;
        }
       table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 3px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            z-index: 1000;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        input{
            border-radius: 7px;
        }
    </style>
</head>
<body>
    <h1>Added Placement and Training Event Management</h1>

    <?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update Event Logic
if (isset($_POST['update'])) {
    $eventid = $_POST['eventid'];
    $eventName = $_POST['eventName'];
    $eventDateTime = $_POST['eventDateTime'];
    $eventVenue = $_POST['eventVenue'];
    $companyName = $_POST['companyName'];
    $officerName = $_POST['officerName'];
    $eventDescription = $_POST['eventDescription'];
    $eventParticipants = $_POST['eventParticipants'];

    $sql = "UPDATE placement SET eventName='$eventName', eventDateTime='$eventDateTime', eventVenue='$eventVenue', companyName='$companyName', officerName='$officerName',  eventDescription='$eventDescription', eventParticipants='$eventParticipants' WHERE eventid=$eventid";

    if ($conn->query($sql) === TRUE) {
        echo '<p>Event updated successfully.</p>';
    } else {
        echo '<p>Error updating event: ' . $conn->error . '</p>';
    }
}

// Delete Event Logic
if (isset($_POST['delete'])) {
    $eventid = $_POST['eventid'];

    $sql = "DELETE FROM placement WHERE eventid=$eventid";

    if ($conn->query($sql) === TRUE) {
        echo '<p>Event deleted successfully.</p>';
    } else {
        echo '<p>Error deleting event: ' . $conn->error . '</p>';
    }
}

// Fetch and display events
$sql = "SELECT * FROM placement";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table border="1">';
    echo '<tr><th>Event ID</th><th>Event Name</th><th>Date and Time</th><th>Venue</th><th>Company Name</th><th>Officer Name</th><th>Description</th><th>Participants</th><th>Actions</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['eventid'] . '</td>';
        echo '<form method="post" action="">';
        echo '<input type="hidden" name="eventid" value="' . $row['eventid'] . '">';
        echo '<td><input type="text" name="eventName" value="' . $row['eventName'] . '"></td>';
        echo '<td><input type="datetime-local" name="eventDateTime" value="' . $row['eventDateTime'] . '"></td>';
        echo '<td><input type="text" name="eventVenue" value="' . $row['eventVenue'] . '"></td>';
        echo '<td><input type="text" name="companyName" value="' . $row['companyName'] . '"></td>';
        echo '<td><input type="text" name="officerName" value="' . $row['officerName'] . '"></td>';
        echo '<td><input type="text" name="eventDescription" value="' . $row['eventDescription'] . '"></td>';
        echo '<td><input type="text" name="eventParticipants" value="' . $row['eventParticipants'] . '"></td>';
        echo '<td>';
        echo '<input type="submit" name="update" value="Update">';
        echo '<input type="submit" name="delete" value="Delete" onclick="return confirm(\'Are you sure you want to delete this event?\')">';
        echo '</td>';
        echo '</form>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'No records found.';
}

$conn->close();
?>
<a href="adminhome.php">back</a>
</body>
</html>
