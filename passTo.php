TODO generate UID and ID for user and project
<?php
	$a_name = $_POST["a_name"];
	$email = $_POST["email"];
	$dept = $_POST["dept"];
	$phone = $_POST["phone"];
	
	$advisor_name = $_POST["advisor_name"];
	$group_name = $_POST["group_name"];
	$title = $_POST["title"];
	$amount = $_POST["amount"];
	$contact_name = $_POST["contact_name"];
	$group = $_POST["Fgroup"];
	
	$Q1 = $_POST["Q1"];
	$Q2 = $_POST["Q2"];
	$Q3 = $_POST["Q3"];
	$Q4 = $_POST["Q4"];
	$Q5 = $_POST["Q5"];
	$Q6 = $_POST["Q6"];
	$Q7 = $_POST["Q7"];
	$Q8 = $_POST["Q8"];
	$Q9 = $_POST["Q9"];
	$Q10 = $_POST["Q10"];
	$Q11 = $_POST["Q11"];
	$Q12 = $_POST["Q12"];
	
	$u_name = $_POST["u_name"];
	$campus_affiliation = $_POST["campus_affiliation"];
	$Uemail = $_POST["Uemail"];
	
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
	
	$sql = "INSERT INTO advisor (a_name, email, dept, phone)
			VALUES ('$a_name', '$email', '$dept', '$phone')";
	$sql = "INSERT INTO project (advisor_name, group_name, title, amount, contact_name, group)
			VALUES ('$advisor_name', '$group_name', '$title', '$amount', '$contact_name', '$group')";
	$sql = "INSERT INTO answer ()"

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();
?>