<?php include "header.php"; ?>

<!-- This is the page where all the common parts of the form will be -->

<body>

<!-- 1st Section of the Main Form (Contact Details) -->

	<form action ="" method="post" enctype="multipart/form-data">
		<h1> Contact Details </h1>
		<p> 
			Project Title:
			<input type="text" name="projectTitle">
		</p>
		<p>
			Name and Title of Primary Contact: 
			<input type="text" name="contactName">
		</p>
		<p>
			Campus Affiliation (Name of Organization, Department, or Office): 
			<input type="text" name="affiliation">
		</p>
		<p>
			Email Address: 
			<input type="text" name="email">
		</p>
		<input type="submit" name ="Next Page">
	</form>
	
<!-- 2nd Section of the Main Form (Proposal Details) -->
   
   <form action ="" method="post" enctype="multipart/form-data">
		<h1> Proposal Details </h1>
		<h2> Instructions: Please fill in answers to the following 10 questions. You may copy and paste your text from another document, if you wish. </h2>
			<h3> 1. Project Description.</h3>
				<p>
					Please provide a summary of your project. 
				</p>
				<textarea name="summary" rows="6" cols="70">
					Enter your text here. 
				</textarea> 
			<br>
			<h3> 2. Student Input and Endorsement</h3>
				<p>
					How has your project sought student input and endorsement? This could include focus groups,
					presentation to the SGA Student Sustainability Committee, student org endorsement, etc.
				</p>
				<textarea name="input_endorsment" rows="6" cols="70">
					Enter your text here. 
				</textarea> 
			<br>
			<h3> 3. Anticipated Outcomes/Impact</h3>
				<p>
						What outcomes do you anticipate? Discuss environmental benefits, impact on the student experience, 
						and the education and outreach potential. If the project has environmental benefits, please quantify
						those benefits in terms of kilowatt-hours saved, tons of greenhouse gas emissions reduced, 
						gallons of storm-water treated, etc.
				</p>
				<textarea name="outcomes_impact" rows="6" cols="70">
					Enter your text here. 
				</textarea> 
			<br>
			<h3> 4. Project Benchmarking</h3>
				<p>
					Have similar projects been implemented on other campuses? Have they been successful?
					How does this project differ? 
				</p>
				<textarea name="benchmarking" rows="6" cols="70">
					Enter your text here. 
				</textarea> 
			<br>
			<h3> 5. Accountability</h3>
				<p>
					How will you measure and evaluate your project’s progress and success?  
				</p>
				<textarea name="accountability" rows="6" cols="70">
					Enter your text here. 
				</textarea> 
			<br>
			<h3> 6. Cost Savings</h3>
				<p>
					Will the project result in expected cost savings? If yes, what is the payback period? 
				</p>
				<textarea name="costSavings" rows="6" cols="70">
					Enter your text here. 
				</textarea> 
			<br>
			<h3> 7. Project Self Sufficiency</h3>
				<p>
					What is the total project budget? What is your plan for sustained funding? 
					Is this project receiving funding from other sources? If so, please explain.
				</p>
				<textarea name="selfSufficiency" rows="6" cols="70">
					Enter your text here. 
				</textarea> 
			<br>
			<h3> 8. Project Lifespan</h3>
				<p>
					What is the expected lifespan of the project? 
					Who will be responsible for overseeing it during that time?
				</p>
				<textarea name="lifespan" rows="6" cols="70">
					Enter your text here. 
				</textarea> 
			<br>
			<h3> 9. Project Sustainability/Accountability  </h3>
				<p>
					How will you ensure the sustained existence/maintenance of this project (including reporting requirements) 
					once you are no longer involved? If the project will conclude while you are involved, what will happen to the 
					materials purchased for the project and how will you return the project site to its original condition? 
				</p>
				<textarea name="sustainability" rows="6" cols="70">
					Enter your text here. 
				</textarea> 
			<br>
			<h3> 10. Potential</h3>
				<p>
					How can your project be scaled for broader campus application beyond the initial phase? 
				</p>
				<textarea name="summary" rows="6" cols="70">
					Enter your text here. 
				</textarea> 
			<br>
		<input type="submit" name ="Next Page">
	</form>
	
<!-- 3rd Section of the Main Form (Budget Details) -->
	
	<form action ="" method="post" enctype="multipart/form-data">
		<h1> Budget Form</h1>
		<h2>Instructions: Please provide an explanation/justification for each line item for which funding is requested. [NOTE: All items are not required.] </h2>
		<p> 
			Resource Materials:
			<input type="text" name="material_amount" placeholder="$">
			Explanation of Amount:
			<textarea name="material_explanation" rows="6" cols="70">
					Enter your text here. 
			</textarea> 
		</p>
		<p>
			Educational Supplies: 
			<input type="text" name="supplies_amount" placeholder="$">
			Explanation of Amount:
			<textarea name="supplies_explanation" rows="6" cols="70">
					Enter your text here. 
			</textarea> 
		</p>
		<p>
			Student Support: 
			<input type="text" name="studentSupport_amount" placeholder="$">
			Explanation of Amount:
			<textarea name="studentSupport_explanation" rows="6" cols="70">
					Enter your text here. 
			</textarea> 
		</p>
		<p>
			Staff Support:
			<input type="text" name="staffSupport_amount" placeholder="$">
			Explanation of Amount:
			<textarea name="staffSupport_explanation" rows="6" cols="70">
					Enter your text here. 
			</textarea> 
		</p>
		<p>
			Community Member Support:
			<input type="text" name="communitySupport_amount" placeholder="$">
			Explanation of Amount:
			<textarea name="communitySupport_explanation" rows="6" cols="70">
					Enter your text here. 
			</textarea> 
		</p>
		<p>
			Other: 
			<input type="text" name="other_amount" placeholder="$">
			Explanation of Amount:
			<textarea name="other_explanation" rows="6" cols="70">
					Enter your text here. 
			</textarea> 
		</p>
		<p>
			Total Amount: 
			<input type="text" name="other_amount" placeholder="$">
			Other Comments or Additional Justification: 
			<textarea name="other_comments" rows="6" cols="70">
					Enter your text here. 
			</textarea> 
		</p>
		
	
<!-- Final Submit Button  -->
		
		<h1>If you are finished with your proposal please press submit. </h1>
		<br>
		<input type="submit" name ="Submit Proposal">
	</form>
	
</body>

<?php include "footer.php"; ?>