<?php include "header.php"; ?>

<?php include "nav.php"; ?>

<body>
	<h1 id="formTitle">What Are You?</h1>
	<hr id="titleHR">

    <div id="statusForm" class=" radioContainer">

	<div class="inputs">
			
		<div class="pretty p-icon p-curve p-jelly">
        	<input type="radio" name="status" value="student" >
        	<div class="state p-success">
				<i class="icon fa fa-check"></i>
            	<label> Student</label>
        	</div>
		</div>

	

		<div class="pretty p-icon p-curve p-jelly">
        	<input type="radio" name="status" value="faculty" checked="checked">
        	<div class="state p-success">
				<i class="icon fa fa-check"></i>
            	<label> Faculty</label>
        	</div>
		</div>



		<div class="pretty p-icon p-curve p-jelly">
        	<input type="radio" name="status" value="staff">
        	<div class="state p-success">
				<i class="icon fa fa-check"></i>
            	<label> Staff</label>
        	</div>
		</div>

		<div id="studentBox">
			<h5 id="studentGroupTitle">As a student this is a</h5>

			<div class="pretty p-icon p-curve p-jelly">
        		<input type="radio" name="group" value="alone">
        		<div class="state p-success">
					<i class="icon fa fa-check"></i>
            		<label>Solo Project</label>
        		</div>
			</div>
			<br>
			<div class="pretty p-icon p-curve p-jelly">
        		<input type="radio" name="group" value="group">
        		<div class="state p-success">
					<i class="icon fa fa-check"></i>
            		<label>Group Project</label>
        		</div>
			</div>

		</div>

		</div>

		<!-- </p> -->
		<button id="statusButtonSubmit" class="Button">Next</button>
	</div>

</body>

<?php include "footer.php"; ?>