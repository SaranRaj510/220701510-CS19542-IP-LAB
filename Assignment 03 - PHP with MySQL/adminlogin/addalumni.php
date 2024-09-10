<?php
 
$eventid = $_POST['eventid'];
$eventName = $_POST['eventName'];
$eventDateTime = $_POST['eventDateTime'];
$eventVenue= $_POST['eventVenue'];
$eventDescription = $_POST['eventDescription'];
$alumniName = $_POST['alumniName'];
$alumniPosition = $_POST['alumniPosition'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);}
else{
    $stmt=$conn->prepare("insert into alumni(eventid, eventName, eventDateTime, eventVenue, eventDescription, alumniName, alumniPosition)
    values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssss",$eventid, $eventName, $eventDateTime, $eventVenue, $eventDescription, $alumniName, $alumniPosition);
    $execval = $stmt->execute();
	
    echo '<script>alert("added succeessfully");</script>';
    $Stmt->close();
    $conn->close();
}


?>