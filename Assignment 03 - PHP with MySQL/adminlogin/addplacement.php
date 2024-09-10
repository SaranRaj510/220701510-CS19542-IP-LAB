<?php
 
$eventid = $_POST['eventid'];
$eventName = $_POST['eventName'];
$eventDateTime = $_POST['eventDateTime'];
$eventVenue = $_POST['eventVenue'];
$companyName = $_POST['companyName'];
$officerName = $_POST['officerName'];
$eventDescription = $_POST['eventDescription'];
$eventParticipants = $_POST['eventParticipants'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);}
else{
    $stmt=$conn->prepare("insert into placement(eventid, eventName, eventDateTime, eventVenue, companyName, officerName, eventDescription, eventParticipants)
    values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssss",$eventid, $eventName, $eventDateTime, $eventVenue, $companyName, $officerName, $eventDescription, $eventParticipants);
    $execval = $stmt->execute();
	
    echo '<script>alert("added succeessfully");</script>';
    $Stmt->close();
    $conn->close();
}


?>