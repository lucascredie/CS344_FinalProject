<?php include "header.php"; ?>

<?php include "nav.php"; ?>

<body>
    <h1 id="formTitle">What Are You?</h1>
    <div class="form">
		<p class="radioContainer">
			<label><input type = "radio" name = "status" value = "student"> Student </label> 
			<label><input type = "radio" name = "status" value = "faculty"> Faculty </label>
			<label><input type = "radio" name = "status" value = "staff"> Staff </label>
		</p>
		<button class="Button">Next</button>
	</div>

</body>

<?php include "footer.php"; ?>