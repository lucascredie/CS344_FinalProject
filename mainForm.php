<?php include "header.php"; ?>

<!-- This is the page where all the common parts of the form will be -->

<body>

<!-- 1st Section of the Main Form (Contact Details) -->

	<!-- <form action ="" method="post" enctype="multipart/form-data">
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
	</form> -->
	
<!-- 2nd Section of the Main Form (Proposal Details) -->
   
<!-- <div id="proposalForm" class="form">

		<h1 class="formTitle"> Proposal Details </h1>
		<hr class="formHR">
		<h5 class="instructions"> Instructions: Please fill in answers 
			to the following 10 questions. You may copy and paste your text 
			from another document, if you wish. Click on the plus sign. </h5>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span> 1. Project Description <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					Please provide a summary of your project. 
					</label>
				<textarea name="summary" rows="8" class="textArea" placeholder="Enter summary"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span> 2. Student Input and Endorsement <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					How has your project sought student input and endorsement? This could include focus groups,
					presentation to the SGA Student Sustainability Committee, student org endorsement, etc.
					</label>
				<textarea name="input_endorsement" rows="8" class="textArea" placeholder="Enter summary"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span>  3. Anticipated Outcomes/Impact <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					What outcomes do you anticipate? Discuss environmental benefits, impact on the student experience, 
					and the education and outreach potential. If the project has environmental benefits, please quantify
					those benefits in terms of kilowatt-hours saved, tons of greenhouse gas emissions reduced, 
					gallons of storm-water treated, etc.
					</label>
				<textarea name="input_endorsement" rows="8" class="textArea" placeholder="Enter summary"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span>  4. Project Benchmarking <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					Have similar projects been implemented on other campuses? Have they been successful?
					How does this project differ? 
					</label>
				<textarea name="input_endorsement" rows="8" class="textArea" placeholder="Enter summary"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span>  5. Accountability <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					How will you measure and evaluate your project’s progress and success?  
					</label>
				<textarea name="input_endorsement" rows="8" class="textArea" placeholder="Enter summary"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span>  6. Cost Savings <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					Will the project result in expected cost savings? If yes, what is the payback period?
					</label>
				<textarea name="input_endorsement" rows="8" class="textArea" placeholder="Enter summary"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span>  7. Project Self Sufficiency <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					What is the total project budget? What is your plan for sustained funding? 
					Is this project receiving funding from other sources? If so, please explain.
					</label>
				<textarea name="input_endorsement" rows="8" class="textArea" placeholder="Enter summary"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span>  8. Project Lifespan <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					What is the expected lifespan of the project? 
					Who will be responsible for overseeing it during that time?
					</label>
				<textarea name="input_endorsement" rows="8" class="textArea" placeholder="Enter summary"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span>  9. Sustainability/Accountability <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					How will you ensure the sustained existence/maintenance of this project (including reporting requirements) 
					once you are no longer involved? If the project will conclude while you are involved, what will happen to the 
					materials purchased for the project and how will you return the project site to its original condition? 
					</label>
				<textarea name="input_endorsement" rows="8" class="textArea" placeholder="Enter summary"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span>  10. Potential <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					How can your project be scaled for broader campus application beyond the initial phase? 
					</label>
				<textarea name="input_endorsement" rows="8" class="textArea" placeholder="Enter summary"></textarea> 
			</div>
		
			<div class="buttonBox">
				<button id="proposalButtonBack" class="Button backButton">Back</button>
				<button id="proposalButtonNext" class="Button">Next</button>
			</div>
</div> -->
	
<!-- 3rd Section of the Main Form (Budget Details) -->
	
<div id="budgetForm" class="form">
		
		<h1 class="formTitle"> Budget Details </h1>
		<hr class="titleHR">
		<h5 class="instructions"> Instructions: Please provide an explanation/justification 
			for each line item for which funding is requested. [NOTE: All items are not required.]</h5>
		

		<h3 class="questionTitle"><span class="completed fa fa-check"></span>  1. Resource Materials: <span class="retractIcon fa fa-plus-circle"></span></h3>
		<div class="">
				<div class="moneyBox"><span class="fa fa-usd"></span><input name="resource_Budget" type="text" class="budgetInput" placeholder="amount" maxlength="5"></div>
				<label class="label">
					Explanation of Amount:
				</label>
			<textarea name="resource_explanation" rows="8" class="textArea" placeholder="Optional"></textarea> 
		</div>	

		<h3 class="questionTitle"><span class="completed fa fa-check"></span>  2. Educational Supplies: <span class="retractIcon fa fa-plus-circle"></span></h3>
		<div class="hide">
				<div class="moneyBox"><span class="fa fa-usd"></span><input name="supplies_Budget" type="text" class="budgetInput" placeholder="amount" maxlength="5"></div>
				<label class="label">
					Explanation of Amount:
				</label>
			<textarea name="supplies_explanation" rows="8" class="textArea" placeholder="Optional"></textarea> 
		</div>	

		<h3 class="questionTitle"><span class="completed fa fa-check"></span>  3. Student Support:  <span class="retractIcon fa fa-plus-circle"></span></h3>
		<div class="hide">
				<div class="moneyBox"><span class="fa fa-usd"></span><input name="studentSupport_Budget" type="text" class="budgetInput" placeholder="amount" maxlength="5"></div>
				<label class="label">
					Explanation of Amount:
				</label>
			<textarea name="studentSupport_explanation" rows="8" class="textArea" placeholder="Optional"></textarea> 
		</div>

		<h3 class="questionTitle"><span class="completed fa fa-check"></span>  4. Staff Support:  <span class="retractIcon fa fa-plus-circle"></span></h3>
		<div class="hide">
				<div class="moneyBox"><span class="fa fa-usd"></span><input name="staffSupport_Budget" type="text" class="budgetInput" placeholder="amount" maxlength="5"></div>
				<label class="label">
					Explanation of Amount:
				</label>
			<textarea name="staffSupport_explanation" rows="8" class="textArea" placeholder="Optional"></textarea> 
		</div>
		
		<h3 class="questionTitle"><span class="completed fa fa-check"></span>  5. Community Member Support:  <span class="retractIcon fa fa-plus-circle"></span></h3>
		<div class="hide">
				<div class="moneyBox"><span class="fa fa-usd"></span><input name="comunitySupport_Budget" type="text" class="budgetInput" placeholder="amount" maxlength="5"></div>
				<label class="label">
					Explanation of Amount:
				</label>
			<textarea name="communitySupport_explanation" rows="8" class="textArea" placeholder="Optional"></textarea> 
		</div>

		<h3 class="questionTitle"><span class="completed fa fa-check"></span>  6. Other:  <span class="retractIcon fa fa-plus-circle"></span></h3>
		<div class="hide">
				<div class="moneyBox"><span class="fa fa-usd"></span><input name="other_Budget" type="text" class="budgetInput" placeholder="amount" maxlength="5"></div>
				<label class="label">
					Explanation of Amount:
				</label>
			<textarea name="other_explanation" rows="8" class="textArea" placeholder="Optional"></textarea> 
		</div>
		

		<h3 class="questionTitle">  Total Budget:  <span id="totalBox"> $<span id="total"></span></span></h3>
		<h5 class="instructions">When you finish your proposal press finish. </h5>
		<div class="buttonBox">
			<button id="budgetButtonBack" class="Button backButton">Back</button>
			<button id="finalButtonNext" class="Button">Finish!</button>
		</div>
</div>

<div id="sucessForm" class="form">
	<h1 class="formTitle"> Budget Details </h1>
</div>
	
</body>

<?php include "footer.php"; ?>