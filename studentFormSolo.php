<?php include "header.php"; ?>

<!-- This is the page where the form is if the studen is solo --> 

<body>
	<form action ="" method="post" enctype="multipart/form-data">
		<p> 
			Name of Faculty or Staff Project Advisor: 
			<input type="text" name="advisorName">
			Advisor’s Email Address: 
			<input type="text" name="advisorEmail">
			Advisor’s Department or Organization: 
			<input type="text" name="advisorDept">
			Advisor’s Phone Number(s):
			<input type="text" name="advisorPhone">
		</p>
		<input type="submit" name ="Next Page">
	</form>
	
<!-- Once student form is complete the page will load the mainForm.php -->
	
</body>

<?php include "footer.php"; ?>