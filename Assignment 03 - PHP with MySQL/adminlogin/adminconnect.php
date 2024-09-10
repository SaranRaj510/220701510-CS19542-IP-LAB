<?php
 
$staffid = $_POST['staffid'];
$staffname = $_POST['staffname'];
$collegename = $_POST['collegename'];
$dept = $_POST['dept'];
$phonenumber = $_POST['phonenumber'];
$mailid = $_POST['mailid'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);}
else{
    $stmt=$conn->prepare("insert into adminregister(staffid, staffname, collegename, dept, phonenumber, mailid, password)
    values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssiss",$staffid, $staffname, $collegename, $dept, $phonenumber, $mailid, $password);
    $execval = $stmt->execute();
	
    echo '<script>alert("registered succeessfully");</script>';
    $Stmt->close();
    $conn->close();
}


?>