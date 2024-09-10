<?php
 
$eventid = $_POST['eventid'];
$sportName = $_POST['sportName'];
$sportDateTime = $_POST['sportDateTime'];
$sportVenue= $_POST['sportVenue'];
$sportDescription = $_POST['sportDescription'];
$eventParticipants = $_POST['eventParticipants'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);}
else{
    $stmt=$conn->prepare("insert into sports(eventid, sportName, sportDateTime, sportVenue, sportDescription, eventParticipants)
    values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss",$eventid, $sportName, $sportDateTime, $sportVenue, $sportDescription, $eventParticipants);
    $execval = $stmt->execute();
	
    echo '<script>alert("added succeessfully");</script>';
    $Stmt->close();
    $conn->close();
}


?>