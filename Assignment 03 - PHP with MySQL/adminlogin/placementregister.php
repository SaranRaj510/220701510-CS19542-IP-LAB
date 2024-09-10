<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=placementregisterstudentlist.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
 
	$conn = mysqli_connect("localhost", "root", "", "test");
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
 
	$output = "";
 
	$output .="
		<table>
			<thead>
				<tr>
					<th>eventid</th>
					<th>eventName</th>
					<th>rollno</th>
					<th>name</th>
					<th>dept</th>
					<th>section</th>
					<th>yearofstudy</th>
					<th>phonenumber</th>
					<th>mailid</th>
				</tr>
			<tbody>
	";
 
	$query = $conn->query("SELECT * FROM `placementregister`") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
 
	$output .= "
				<tr>
					<td>".$fetch['eventid']."</td>
					<td>".$fetch['eventName']."</td>
					<td>".$fetch['rollno']."</td>
					<td>".$fetch['name']."</td>
					<td>".$fetch['dept']."</td>
					<td>".$fetch['section']."</td>
					<td>".$fetch['yearofstudy']."</td>
					<td>".$fetch['phonenumber']."</td>
					<td>".$fetch['mailid']."</td>
				</tr>
	";
	}
 
	$output .="
			</tbody>
 
		</table>
	";
 
	echo $output;
 
 
?>