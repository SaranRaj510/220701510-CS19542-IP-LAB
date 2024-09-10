<?php
 
$rollno = $_POST['rollno'];
$name = $_POST['name'];
$dept = $_POST['dept'];
$collegename = $_POST['collegename'];
$yearofstudy = $_POST['yearofstudy'];
$phonenumber = $_POST['phonenumber'];
$mailid = $_POST['mailid'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);}
else{
    $stmt=$conn->prepare("insert into registration(rollno, name, dept, collegename, yearofstudy, phonenumber, mailid, password)
    values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssiss",$rollno, $name, $dept, $collegename, $yearofstudy, $phonenumber, $mailid, $password);
    $execval = $stmt->execute();
	
    echo "registered succeessfully";
    $Stmt->close();
    $conn->close();
}


?>