<?php include "header.php"; ?>

<?php include "nav.php"; ?>

<body>

	

<div id="statusForm" class="form animated zoomIn">

	<h1 class="formTitle">What is Your Status?</h1>
	<hr class="titleHR">

	<div class="inputs">
			
		<div class="pretty p-icon p-jelly">
        	<input type="radio" name="status" value="student" >
        	<div class="state p-success-o">
				<i class="icon fa fa-check"></i>
            	<label> Student</label>
        	</div>
		</div>

		<div class="pretty p-icon p-jelly">
        	<input type="radio" name="status" value="faculty" checked="checked">
        	<div class="state p-success-o">
				<i class="icon fa fa-check"></i>
            	<label> Faculty</label>
        	</div>
		</div>

		<div class="pretty p-icon p-jelly">
        	<input type="radio" name="status" value="staff">
        	<div class="state p-success-o">
				<i class="icon fa fa-check"></i>
            	<label> Staff</label>
        	</div>
		</div>

		<div id="studentBox">
			<h5 id="studentGroupTitle">As a student this is a</h5>

			<div class="pretty p-icon p-round p-plain p-smooth">
        		<input type="radio" name="group" value="alone" checked="checked">
        		<div class="state p-warning-o">
					<i class="icon fa fa-check-square-o"></i>
            		<label>Solo Project</label>
        		</div>
			</div>
			<br>
			<div class="pretty p-icon p-round p-plain p-smooth"> 
        		<input type="radio" name="group" value="group">
        		<div class="state p-warning-o">
					<i class="icon fa fa-check-square-o"></i>
            		<label>Group Project</label>
        		</div>
			</div>
		</div> <!-- student box for group -->

</div> <!-- status form -->

		<div class="buttonBox">
			<button id="statusButtonSubmit" class="Button">Next</button>
		</div>
</div> <!-- status form -->


<!-- Student info -->
<div id="studentForm" class="form animated zoomIn">

		<h1 class="formTitle">Information</h1>
		<hr class="titleHR">

		<div class="inputs">

			<label class="label groupNameInput">
			Name of Group (student org, campus dept, etc.): 
			</label>
			<input class="textInput groupNameInput" type="text" name="groupName">
			
			<label class="label">
			Name of Faculty or Staff Project Advisor: 
			</label>
			<input class="textInput" type="text" name="advisorName">

			<label class="label">
			Advisor’s Email Address: 
			</label>
			<input class="textInput" type="text" name="advisorEmail">

			<label class="label">
			Advisor’s Department or Organization: 
			</label>
			<input class="textInput" type="text" name="advisorDept">

			<label class="label">
			Advisor’s Phone Number(s):
			</label>
			<input class="textInput" type="text" name="advisorPhone">

		</div>

		<div class="buttonBox">
			<button id="studentButtonBack" class="Button backButton">Back</button>
			<button id="studentButtonNext" class="Button">Next</button>
		</div>

</div>

	<!-- 1st Section of the Main Form (Contact Details) -->

<div id="contactForm" class="form hide">
		<h1 class="formTitle"> Contact Details </h1>
		<hr class="formHR">

	<div class="inputs">

		<label class="label">
		Project Title:
		</label>
		<input class="textInput" type="text" name="projectTitle">

		<label class="label">
		Name and Title of Primary Contact:
		</label>
		<input class="textInput" type="text" name="contactName">

		<label class="label">
		Primary Contact Email
		</label>
		<input class="textInput" type="text" name="contactEmail">

		<label class="label">
		Campus Affiliation (Name of Organization, Department, or Office): 
		</label>
		<input class="textInput" type="text" name="afilliation">
	
	</div>

		<div class="buttonBox">
			<button id="contactButtonBack" class="Button backButton">Back</button>
			<button id="contactButtonNext" class="Button">Next</button>
		</div>
</div>

</body>

<?php include "footer.php"; ?>