<?php
if (isset($_POST['register'])) {
    $eventid = $_POST['eventid'];
    $eventName = $_POST['eventName'];
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $section = $_POST['section'];
    $yearofstudy = $_POST['yearofstudy'];
    $phonenumber = $_POST['phonenumber'];
    $mailid = $_POST['mailid'];

    $conn = new mysqli('localhost', 'root', '', 'test');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the registration details into the database
    $stmt=$conn->prepare("insert into alumniregister(eventid, eventName, rollno, name, dept, section, yearofstudy, phonenumber, mailid)
    values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isissssis",$eventid, $eventName, $rollno, $name, $dept, $section, $yearofstudy, $phonenumber, $mailid);

    if ($stmt->execute()) {
        // Redirect back to the main page with a success message
        echo '<script>alert("registered succeessfully");</script>';
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
