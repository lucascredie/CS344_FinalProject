<!DOCTYPE html5>
<?php
	$servername = "localhost";
	$username = "admin";
	$password = "1234";
	$dbname = "greenfee2";
	$conn = new mysqli($servername, $username, $password);
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		} 

	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
	VALUES ('John', 'Doe', 'john@example.com')";
	
	//INPUT INTO DATABASE BLOCK
	
	$status = $_POST["status"]
	
	if($status == "student")
	{
		$sql = "INSERT INTO MyGuests (Project_type, Project_title, Total_amount, Primary_contact, Campus_affiliation, Email, Phone, Name_of_group, Advisor, Advisor_email, Advisor_Depart_Organiz, 
		Advisor_phone, Project_description, Input_Endorsement, Anticipated_out_impact, Project_benchmarking, Accountability, Cost_savings, Project_self_sufficiency, Project_lifespan, Project_sustainability, Potential)
	VALUES ($_POST['group'], $_POST['projectTitle'], $_POST[''], $_POST['contactName'], $_POST['contactAffiliation'], $_POST['contactEmail'], $_POST[''], $_POST['groupName'], $_POST['advisorName'], 
	$_POST['advisorEmail'], $_POST['advisorDepartment'], $_POST['advisorPhone'], $_POST['proposalSummary'], $_POST['inputEndorsement'], $_POST['anticipatedOutcome'], $_POST['projectBenchmarking'], 
	$_POST['accountability'], $_POST['costSavings'], $_POST['selfSufficiency'], $_POST['projectLifespan'], $_POST['sustainability'], $_POST['potential'])";
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

<html>
	<head>
		<meta charset="utf-8">
		<title> Submission Confirmation </title>
		<link href="index.css" rel="stylesheet"/>
		
		
	</head>
	
	<body>
		<header>
		</header>
		
		
		<main>
		
		</main>
		
		<footer>
		</footer>
		
	</body>




</html>