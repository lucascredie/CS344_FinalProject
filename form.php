<?php include "header.php"; ?>

<?php include "nav.php"; ?>

<body>

<div id="progress" class="hide">
	<div id="bar">
	
	</div>
	<p id="percent"> Completion 0%</p>
	
</div>

<div id="statusForm" class="form animated zoomIn">

	<h1 class="formTitle">What is your status?</h1>
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

		<h1 class="formTitle">Student Information</h1>
		<hr class="titleHR">

		<div class="inputs">

			<label class="label groupNameInput">
			Name of Group (student org, campus dept, etc.): 
			</label>
			<input class="textInput groupNameInput" type="text" name="groupName" value="">
			
			<label class="label">
			Name of Faculty or Staff Project Advisor: 
			</label>
			<input class="textInput" type="text" name="advisorName">

			<label class="label">
			Advisor’s Email Address: 
			</label>
			<input class="textInput" type="email" name="advisorEmail">

			<label class="label">
			Advisor’s Department or Organization: 
			</label>
			<input class="textInput" type="text" name="advisorDepartment">

			<label class="label">
			Advisor’s Phone Number(s):
			</label>
			<input class="textInput" type="tel" name="advisorPhone">

		</div>
		<p class="errorMessage hide"> Please make sure you are entering valid information.</p>
		<div class="buttonBox">
			<button id="studentButtonBack" class="Button backButton">Back</button>
			<button id="studentButtonNext" class="Button">Next</button>
		</div>

</div>

	<!-- 1st Section of the Main Form (Contact Details) -->

<div id="contactForm" class="form hide animated zoomIn">
		<h1 class="formTitle"> Contact Details </h1>
		<hr class="titleHR">

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
		<input class="textInput" type="email" name="contactEmail">

		<label class="label">
		Campus Affiliation (Name of Organization, Department, or Office): 
		</label>
		<input class="textInput" type="text" name="contactAfilliation">
	
	</div>

		<p class="errorMessage hide"> Please make sure you are entering valid information.</p>
		<div class="buttonBox">
			<button id="contactButtonBack" class="Button backButton">Back</button>
			<button id="contactButtonNext" class="Button">Next</button>
		</div>
</div>

<!-- Proposal -->

<div id="proposalForm" class="form animated zoomIn hide">

		<h1 class="formTitle"> Proposal Details </h1>
		<hr class="titleHR">
		<h5 class="instructions"> Instructions: Please fill in answers 
			to the following 12 questions. You may copy and paste your text 
			from another document if you wish. Click on the plus signs to expand
			the questions and input your answers. </h5>

		<div class="inputs">
			<h3 class="questionTitle"><span class="completed fa fa-check"></span> 1. Student Experience <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					Explain how the project includes opportunities for student involvement and/or will positively impact the student experience.
					</label>
				<textarea name="studentExperience" rows="8" class="textArea textAreaCheck" placeholder="Enter Answer Here" maxlength="600"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span> 2. Connection to Campus <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					Explain how the project directly addresses environmental sustainability on the WSU campus or other on-campus activities.
					</label>
				<textarea name="connectionToCampus" rows="8" class="textArea textAreaCheck" placeholder="Enter Answer Here" maxlength="600"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span>  3. Feasibility and Institutional Support <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					Explain how the project is feasible and has support from appropriate campus individuals and entities. Please note that individual students 
					or student organizations must have the signature of a faculty or staff advisor who is committed to advising throughout the project's implementation.
					</label>
				<textarea name="feasibilityAndSupport" rows="8" class="textArea textAreaCheck" placeholder="Enter Answer Here" maxlength="600"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span>  4. Schedule and Budget Request <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					Explain how the project's schedule and budget are reasonable and can conform to established timelines, constraints, and parameters.
					</label>
				<textarea name="appropriateness" rows="8" class="textArea textAreaCheck" placeholder="Enter Answer Here" maxlength="600"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span>  5. Accountability <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					How will you measure and evaluate your project’s progress and success?  
					</label>
				<textarea name="accountability" rows="8" class="textArea textAreaCheck" placeholder="Enter summary" maxlength="600"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span>  6. Innovation <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					Explain how the project is innovative in nature and how it does or does not include routine maintenance or code-compliant activities.
					Please note funding may support narrowing the gap between code-compliant and more sustainable alternatives.
					</label>
				<textarea name="inovation" rows="8" class="textArea textAreaCheck" placeholder="Enter Answer Here" maxlength="600"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span>  7. Environmental Benefits <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					Explain how the project demonstrates a reduction in WSU's carbon footprint or provides other environmental benefits such as water conservation, 
					storm water management, biodiversity conservation, and waste minimization.
					</label>
				<textarea name="environmentalBenefits" rows="8" class="textArea textAreaCheck" placeholder="Enter Answer Here" maxlength="600"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span>  8. Regional Connection <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					Explain how/if the project provides an intellectual and/or emotional linkage with the unique landscape of the Driftless Area/ Mississippi River,
					as well as the cultural lifeways of this special place that is Winona, MN. 
					</label>
				<textarea name="regionalConnection" rows="8" class="textArea textAreaCheck" placeholder="Enter Answer Here" maxlength="600"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span>  9. Outreach and Education <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					Explain how the project considers interdisciplinary and experiential education and outreach opportunities. As well as how the project has 
					included them as part of its implementation plan. 
					</label>
				<textarea name="outreachAndEducation" rows="8" class="textArea textAreaCheck" placeholder="Enter Answer Here" maxlength="600"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span>  10. Self Sufficiency <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					Explain how the project includes matching funds from sources beyond SGF or includes a plan for sustained funding.
					</label>
				<textarea name="selfSufficiency" rows="8" class="textArea textAreaCheck" placeholder="Enter Answer Here" maxlength="600"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span> 11. Potential for Broad Application <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					Explain how the project has the potential to be scalable across the campus.
					</label>
				<textarea name="potential" rows="8" class="textArea textAreaCheck" placeholder="Enter Answer Here" maxlength="600"></textarea> 
			</div>

			<h3 class="questionTitle"><span class="completed fa fa-check"></span> 12. Cost/Benefit Analysis <span class="retractIcon fa fa-plus-circle"></span></h3>
			<div class="hide">
					<label class="label">
					Explain and outline how this project has project payback, lifecycle costs and savings, etc. (As appropiate) Please note that an an expanded 
					and detailed explanation of fees for this project can be found on the next page of this form.
					</label>
				<textarea name="costBenefit" rows="8" class="textArea textAreaCheck" placeholder="Enter Answer Here" maxlength="600"></textarea> 
			</div>
		</div>

			<p class="errorMessage hide"> Please make sure you are entering valid information.</p>
			<div class="buttonBox">
				<button id="proposalButtonBack" class="Button backButton">Back</button>
				<button id="proposalButtonNext" class="Button">Next</button>
			</div>
</div>

<!-- BUDGET -->

<div id="budgetForm" class="form animated zoomIn hide">
		
		<h1 class="formTitle"> Budget Details </h1>
		<hr class="titleHR">
		<h5 class="instructions"> Instructions: Please provide an explanation/justification 
			for each line item for which funding is requested. [NOTE: Not all items are required, but please put 
			in a 0 for the areas that are not applicable.]</h5>
		

		<h3 class="questionTitle"><span class="completed fa fa-check"></span>  1. Resource Materials: <span class="retractIcon fa fa-plus-circle"></span></h3>
		<div class="hide">
				<div class="moneyBox"><span class="fa fa-usd"></span><input name="resourceBudget" type="number" class="budgetInput" placeholder="amount" max="99999" min="0"></div>
				<label class="label">
					Explanation of Amount:
				</label>
			<textarea name="resourceExplanation" rows="8" class="textArea" placeholder="Optional" maxlength="600">Optional</textarea> 
		</div>	

		<h3 class="questionTitle"><span class="completed fa fa-check"></span>  2. Educational Supplies: <span class="retractIcon fa fa-plus-circle"></span></h3>
		<div class="hide">
				<div class="moneyBox"><span class="fa fa-usd"></span><input name="suppliesBudget" type="number" class="budgetInput" placeholder="amount" max="99999" min="0"></div>
				<label class="label">
					Explanation of Amount:
				</label>
			<textarea name="suppliesExplanation" rows="8" class="textArea" placeholder="Optional" maxlength="600">Optional</textarea> 
		</div>	

		<h3 class="questionTitle"><span class="completed fa fa-check"></span>  3. Student Support:  <span class="retractIcon fa fa-plus-circle"></span></h3>
		<div class="hide">
				<div class="moneyBox"><span class="fa fa-usd"></span><input name="studentSupportBudget" type="number" class="budgetInput" placeholder="amount" max="99999" min="0"></div>
				<label class="label">
					Explanation of Amount:
				</label>
			<textarea name="studentSupportExplanation" rows="8" class="textArea" placeholder="Optional" maxlength="600">Optional</textarea> 
		</div>

		<h3 class="questionTitle"><span class="completed fa fa-check"></span>  4. Staff Support:  <span class="retractIcon fa fa-plus-circle"></span></h3>
		<div class="hide">
				<div class="moneyBox"><span class="fa fa-usd"></span><input name="staffSupportBudget" type="number" class="budgetInput" placeholder="amount" max="99999" min="0"></div>
				<label class="label">
					Explanation of Amount:
				</label>
			<textarea name="staffSupportExplanation" rows="8" class="textArea" placeholder="Optional" maxlength="600">Optional</textarea> 
		</div>
		
		<h3 class="questionTitle"><span class="completed fa fa-check"></span>  5. Community Member Support:  <span class="retractIcon fa fa-plus-circle"></span></h3>
		<div class="hide">
				<div class="moneyBox"><span class="fa fa-usd"></span><input name="communitySupportBudget" type="number" class="budgetInput" placeholder="amount" max="99999" min="0"></div>
				<label class="label">
					Explanation of Amount:Optional
				</label>
			<textarea name="communitySupportExplanation" rows="8" class="textArea" placeholder="Optional" maxlength="600">Optional</textarea> 
		</div>

		<h3 class="questionTitle"><span class="completed fa fa-check"></span>  6. Other:  <span class="retractIcon fa fa-plus-circle"></span></h3>
		<div class="hide">
				<div class="moneyBox"><span class="fa fa-usd"></span><input name="otherBudget" type="number" class="budgetInput" placeholder="amount" max="99999" min="0"></div>
				<label class="label">
					Explanation of Amount:
				</label>
			<textarea name="otherExplanation" rows="8" class="textArea" placeholder="Optional" maxlength="600">Optional</textarea> 
		</div>
		

		<h3 class="questionTitle">  Total Budget:  <span id="totalBox"> $<span id="total"></span></span></h3>
		<h5 class="instructions">When you finish your proposal press finish. </h5>
		<p class="errorMessage hide"> Please make sure you are entering valid information.</p>
		<div class="buttonBox">
			<button id="budgetButtonBack" class="Button backButton">Back</button>
			<button id="finishButton" class="Button">Finish!</button>
		</div>
</div>

<div id="sucess" class="hide">
		<h1 id="sucessTitle" class="animated fadeIn">Thank you for making WSU Greener!</h1>

			<div id="sucessAnim">
				<?php include "plant.php" ?>
			</div>

		<p class="animated bounceIn">We appreciate the time you spent on your idea. We'll get back to you soon!</p>

		<div class="buttonBox">
			<a href="index.php" id="backToStartButton" class="Button">Home</a>
		</div>

	</div>



</body>

<?php include "footer.php"; ?>