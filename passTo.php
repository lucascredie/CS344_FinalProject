<?php
	$response = json_decode($_POST['jsondata']);
	$servername = "localhost";
	$username = "admin";
	$password = "1234";
	$dbname = "greenfeefinal";
	$conn = new mysqli($servername, $username, $password);
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
	
	//INPUT INTO DATABASE BLOCK
	
	$status = $_POST["status"]
	
	if($status == "student")
	{
		$sql = "INSERT INTO "
	}
	
	if($status == "faculty")
	{
		
	}
	
	if($status == "staff")
	{
		
	}

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();
?>