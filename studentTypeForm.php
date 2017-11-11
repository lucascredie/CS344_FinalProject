<?php include "header.php"; ?>

<!-- This is the page where the student type form will be -->

<body>
	<form action ="" method="post" enctype="multipart/form-data">
		<p>
			As a student, choose one of these options:
			<input type = "radio" name = "group" value = "alone"> This project is solely my own. 
			<input type = "radio" name = "group" value = "group"> This project is proposed on behalf of a group. 
		</p>
		<input type="submit" name ="Next Page">
	</form>
	
<!-- Once student form is complete the page will load the mainForm.php -->

</body>

<?php include "footer.php"; ?>