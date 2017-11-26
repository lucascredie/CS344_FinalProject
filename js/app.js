// =============================================================================
//  TODO
// =============================================================================
 /*

 */

//WE WILL STORE DATA IN JAVASCRIPT UNTIL FINAL SUBMIT BUTTON SENDS USING AJAX TO PHP

// =============================================================================
//                              DATA SECTION
// =============================================================================
    let status;
    let group;
    let totalBudget;
//studentForm
    let groupName;
    let advisorName;
    let advisorEmail;
    let advisorDepartment;
    let advisorPhone;
//contactForm
    let projectTitle;
    let contactName;
    let contactEmail;
    let contactAfilliation;
//proposalForm
    let proposalSummary;
    let inputEndorsment;
    let anticipatedOutcome;
    let projectBenchmarking;
    let accountability;
    let costSavings;
    let selfSufficiency;
    let projectLifespan;
    let sustainability;
    let projectPotential;
//budgetForm
    let resourceBudget;
    let resourceExplanation;
    let suppliesBudget;
    let suppliesExplanation;
    let studentSupportBudget;
    let studentSupportExplanation;
    let staffSupportBudget;
    let staffSupportExplanation;
    let communitySupportBudget;
    let communitySupportExplanation;
    let otherBudget;
    let otherExplanation;

// =============================================================================
//                              APPLICATION
// =============================================================================
$( document ).ready(function() {
    console.log( "ready!" );
    //EVENTS
    /*  check for a change in input and display section 
        of project alone or in a group if user is a student */
    $("input:radio[name=status]").change(function(){
         //gets value of what is checked as soon as there is change
        let statusInput = $("input:radio[name=status]:checked").val(); 
       
        if(statusInput == "student") { //if value is student
            $("#studentBox").slideDown("fast"); //we show option for group
        } else {  
            $("#studentBox").slideUp("fast"); //otherwise we hide group name option
        } 
    }); 

    /*  check for status submit button clicked and move to next form */
    $("#statusButtonSubmit").on("click",function(){
        let statusInput = $("input:radio[name=status]:checked").val(); //status of submitter
        status = statusInput;

            if(statusInput == "student") {
                let groupInput = $("input:radio[name=group]:checked").val();
                group = groupInput;
            
                //hides group name of next form if the person is not working on group
                //this also sets value of group name if student is not ina group to Group Name
                //we set that value so validator doesnt break and to give a default value of null
                if(group == "alone") {
                    $(".groupNameInput").hide();
                    $(".groupNameInput").val("null");
                } else {
                     $(".groupNameInput").show();
                     $(".groupNameInput").val("");
                }
           
            move($("#statusForm"),$("#studentForm"));

        } else {
            // group = "null"; //can be something else depending on database 
            move($("#statusForm"), $("#contactForm"));
        }

        // console.log(status);
        // console.log(group);         
    });

    //STUDENT FORM
    // from student information TO contact
    $("#studentButtonNext").on("click", function(){
        clearErrors()
       let response = getInputValues("studentForm");
       
       //if the number of valid inputs we get is equal to the number of inputs of the form
       if(response[0].length == response[1]) {
           //everything is valid
           groupName = response[0][0];
           advisorName = response[0][1];
           advisorEmail = response[0][2];
           advisorDepartment = response[0][3];
           advisorPhone = response[0][4];

           move($("#studentForm"), $("#contactForm"));
       } 

    })

        //from student information BACK to status
        $("#studentButtonBack").on("click", function(){
            clearErrors()

            move($("#studentForm"), $("#statusForm"));
        })

       
    //from contact to proposal
    $("#contactButtonNext").on("click", function(){
        clearErrors()
        let response = getInputValues("contactForm");
    
        if(response[0].length == response[1]) {
            //everything is valid 
            projectTitle = response[0][0];
            contactName = response[0][1];
            contactEmail = response[0][2];
            contactAfilliation = response[0][3];

            move($("#contactForm"), $("#proposalForm"));
        } 

    })
     //from contact BACK to status or student info 
     $("#contactButtonBack").on("click", function(){
        clearErrors()
        //if user is a student
        if(status == "student") {
            //we move back to student info form
            move($("#contactForm"), $("#studentForm"));
        } else {
            //otherwise back to status form
            move($("#contactForm"), $("#statusForm"));
        }
    })
        
    //from proposal to budget
    $("#proposalButtonNext").on("click", function(){
        clearErrors()
        let response = getTextAreaValues("proposalForm");

        if(response[0].length == response[1]) {

            proposalSummary = response[0][0];
            inputEndorsment = response[0][1];
            anticipatedOutcome = response[0][2];
            projectBenchmarking = response[0][3];
            accountability = response[0][4];
            costSavings = response[0][5];
            selfSufficiency = response[0][6];
            projectLifespan = response[0][7];
            sustainability = response[0][8];
            projectPotential = response[0][9];

        move($("#proposalForm"), $("#budgetForm"));
        }
            
    })
    //from proposal BACK to contact
    $("#proposalButtonBack").on("click", function(){
        clearErrors()
        move($("#proposalForm"), $("#contactForm"));
            
    })

    // =========================================================================
    // FINAL SUBMIT - AJAX 
    // =========================================================================
    
    //budget form next buttton
     $("#finishButton").on("click", function(){
        //sucessfull anim
        let response = getBudgetValues("budgetForm");

        if(response[0].length == response[1]) {

            resourceBudget = response[0][0];
            resourceExplanation = response[2][0];

            suppliesBudget = response[0][1];
            suppliesExplanation = response[2][1];

            studentSupportBudget = response[0][2];
            studentSupportExplanation = response[2][2];

            staffSupportBudget = response[0][3];
            staffSupportExplanation = response[2][3];

            communitySupportBudget = response[0][4];
            communitySupportExplanation = response[2][4];

            otherBudget = response[0][5];
            otherExplanation = response[2][5];
            //DISPLAY FINISH 

            $("#budgetForm").hide();
            $("#budgetForm").addClass("animated zoomOut");
            $("#budgetForm").show();

			

//proposalForm
    let proposalSummary;
    let inputEndorsment;
    let anticipatedOutcome;
    let projectBenchmarking;
    let accountability;
    let costSavings;
    let selfSufficiency;
    let projectLifespan;
    let sustainability;
    let projectPotential;
//budgetForm
    let resourceBudget;
    let resourceExplanation;
    let suppliesBudget;
    let suppliesExplanation;
    let studentSupportBudget;
    let studentSupportExplanation;
    let staffSupportBudget;
    let staffSupportExplanation;
    let communitySupportBudget;
    let communitySupportExplanation;
    let otherBudget;
    let otherExplanation;
            //AJAX REQUEST GOES RIGHT HERE!!
			statusInput //user status
			$.ajax({
				type: "POST",
				url: "passTo.php",
				data: {u_name: contactName, campus_affiliation: contactAfilliation, email: contactEmail, Status: status, a_name: advisorName, a_email: advisorEmail, dept: advisorDepartment, phone: advisorPhone,
						group_name: groupName, title: projectTitle, amount: totalBudget, '002': , '003': , '004': , '005': , '006': , '007': , '008': , '009': , '010': , '011': , '012': }
			}).done(function( msg ) {
				alert( "Data Saved!");
        }
       

    })
        //from budget BACK to proposal
        $("#budgetButtonBack").on("click", function(){
            clearErrors()
            move($("#budgetForm"),$("#proposalForm"));
            
        })

    //retract icon functionality on proposal and budget forms
    $(".retractIcon ").on("click", function(){
        $(this).toggleClass("fa-minus-circle"); //toggle from + to -
        $(this).parent().next().slideToggle();   //opens div after it
       
    })

    //checkmark notice for proposal form
    $(".textAreaCheck").on("input", function(){
        //checks if user entered something in text area
        let currentVal = $(this).val();
        if(currentVal != "") {
            $(this).parent().prev().children().first().addClass("checked");
        } else {
            $(this).parent().prev().children().first().removeClass("checked");
        }
    });

    //checkmark for budget. Check if it is empty and add styles
    $(".budgetInput").on("input", function(){
        
        let currentVal = $(this).val();
        if(currentVal != "") {
            $(this).parent().parent().prev().children().first().addClass("checked"); //checkmark sign to green
            $(this).prev().addClass("checked"); //animated bounceIn
            $(this).prev().addClass("animated bounceIn");
            $(this).addClass("checkedBorder"); //border to green

        } else {
            $(this).parent().parent().prev().children().first().removeClass("checked");
            $(this).prev().removeClass("checked");
            $(this).prev().removeClass("animated bounceIn");
            $(this).removeClass("checkedBorder"); //border to green
            
        }

        //calculates total everytime user puts input
        calculateTotalValue();
       
    });
    //removes invalid input class
    $("input").on("focus", function(){
        $(this).removeClass("invalidInput animated shake");
        
    });
    $("textarea").on("focus", function(){
        $(this).removeClass("invalidInput animated shake");
        
    });
}); // END OF READY STATEMENT

    // =========================================================================
    //                          FUNCTIONS
    // =========================================================================

    function move(currentForm, nextForm) {
        //hides current form and show next.
        //animations are in html :)
        currentForm.hide();
        nextForm.show();
    }

    function calculateTotalValue() {
        //function called every time user tipes a number into budget input
        totalBudget = 0;
        //for each input we add it to total budget
        $(".budgetInput").each(function() {
            totalBudget += Number($(this).val());
         });

         //sets total div text
         $("#total").text(totalBudget);
         console.log("total:  " + totalBudget);

         //displays color green
         if(totalBudget != 0) {
            $("#total").addClass("checked");
         } else {
            $("#total").removeClass("checked");
         }
    }
   
    function getInputValues(formname) { 
        //create array
        let values = new Array();
        let numberOfInputs = 0; //this counts how many iterations
        //select form, find inputs div and all input tags inside. for each
        
        $("#"+formname).find(".inputs").find("input").each(function(){
            
            //get current value and type of input
            let currentValue = String($(this).val());
            let currentType = $(this).attr('type');
            console.log(`${currentValue} -> ${typeof(currentValue)} || ${currentType}`);
            $(this).removeClass("invalidInput animated shake");
            //validate based on type.
            if(validateInput(currentType, currentValue)) {
                //if valid put in array
                values.push(currentValue)

            } else {
                // $(this).val("invalid");
                $(this).addClass("invalidInput animated shake");
                displayError();
            }
            numberOfInputs++; //increment
        });

        console.log(values.length);
        return [values, numberOfInputs]; 
        //THIS RETURNS AN ARRAY OF ELEMENTS AND NUMBER OF INPUTS OF FORM
        //we do that com compaare them. if values  = 5 and number of inputs = 5 then all of them are valid.
    }

    function getTextAreaValues(formname) {
        //create array
        let values = new Array();
        let numberOfInputs = 0; //this counts how many iterations
        //select form, find inputs div and all input tags inside. for each
        
        $("#"+formname).find("textarea").each(function(){
            
            //get current value and type of input
            let currentValue = String($(this).val());
            console.log(currentValue);
            $(this).removeClass("invalidInput animated shake");


            //validate based on type.
            if(validateInput("textarea", currentValue)) {
            //     //if valid put in array
                values.push(currentValue);

            } else {
                // $(this).val("invalid");
                $(this).addClass("invalidInput animated shake");
                displayError();
            }
            numberOfInputs++; //increment
        });
        console.log(values.length);
        return [values, numberOfInputs]; 
        //THIS RETURNS AN ARRAY OF ELEMENTS AND NUMBER OF INPUTS OF FORM
        //we do that com compaare them. if values  = 5 and number of inputs = 5 then all of them are valid.
    }

    function getBudgetValues(formname) {
        //create arrays
        let values = new Array();
        let descriptions = new Array();
        let numberOfInputs = 0; //this counts how many iterations
        //select form, find inputs div and all input tags inside. for each
        
        $("#"+formname).find("input").each(function(){
            
            //get current value and type of input
            let currentValue = String($(this).val());
            
            $(this).removeClass("invalidInput animated shake");

            //validate based on type.
            if(validateInput("number", currentValue)) {
            //     //if valid put in array
                console.log(currentValue);
                values.push(currentValue);

            } else {
                // $(this).val("invalid");
                $(this).addClass("invalidInput animated shake");
                displayError();
            }
            numberOfInputs++; //increment
        });

        //optional anyways so not alot 
        $("#"+formname).find("textarea").each(function(){
                let currentDescription = $(this).val();

                if(validateInput("textarea",currentDescription)){
                    console.log(currentDescription);
                    if(currentDescription == "Optional") {
                        descriptions.push("null");
                    } else {
                        descriptions.push(currentDescription );
                    }
                }
        });

        console.log(values.length);
        return [values, numberOfInputs, descriptions]; 
        //THIS RETURNS AN ARRAY OF ELEMENTS AND NUMBER OF INPUTS OF FORM
        //we do that com compaare them. if values  = 5 and number of inputs = 5 then all of them are valid.
    }


    function displayError() {
        // $("#errorMessage").text("Please make sure you are entering valid information.");
        $(".errorMessage").slideDown();
    }
    function clearErrors() {
        //clear errors
        $(".errorMessage").slideUp();
        $("input").removeClass("invalidInput animated shake");
    }


   
    // =========================================================================
    //                        DATA VALIDATION FUNCTIONS
    // =========================================================================
    //note: this uses validator.js library :)

function validateInput(inputType, inputValue) {
    //validates depending on type, returns bool
    let isValid = false;
    if(inputType == "text") {
        isValid = isText(inputValue);
    } else if(inputType == "email") {
        isValid = isEmail(inputValue);
    } else if(inputType == "tel") {
        isValid = isPhone(inputValue);
        
    } else if(inputType == "number") {
        isValid = isNumber(inputValue);

    } else if(inputType == "textarea") {
        isValid = isTextArea(inputValue);
    }
    
    console.log("Is Valid: " + isValid);

    //handle what is not valid
    return isValid;
}

function isText(text) {
    let filteredText = validator.blacklist(text, [' ', '.', "'"]); //allows those characters
    return validator.isAlpha(filteredText);
}

function isEmail(email) {
    return validator.isEmail(email);
}

function isPhone(phoneStr) {
    return validator.isMobilePhone(phoneStr, "en-US"); //checks for phones in the US
}

function isNumber(num) {
    if(Number(num) >= 0 && validator.isNumeric(num)) {
        return true;
    } else {
        return false;
    }
}

function isTextArea(text) {
    let filteredText = validator.blacklist(text, [' ', '.',';','(',')','?','!','-','/','    ','\n']);
    return validator.isAlphanumeric(filteredText);
}
