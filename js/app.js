//WE WILL STORE DATA IN JAVASCRIPT UNTIL FINAL SUBMIT BUTTON SENDS USING AJAX TO PHP

// =============================================================================
//                              DATA SECTION
// =============================================================================
    let status;
    let group;
    let totalBudget;


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
        let statusInput = $("input:radio[name=status]:checked").val();
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
    
       let response = getInputValues("studentForm");
       
       //if the number of valid inputs we get is equal to the number of inputs of the form
       if(response[0].length == response[1]) {
           //everything is valid so we move
           move($("#studentForm"), $("#contactForm"));
       } 

    })

        //from student information BACK to status
        $("#studentButtonBack").on("click", function(){
            clearErrors()

            move($("#studentForm"), $("#statusForm"));
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
    //from contact to proposal
    $("#contactButtonNext").on("click", function(){
      

        let response = getInputValues("contactForm");

        if(response[0].length == response[1]) {
            //everything is valid so we move
            move($("#contactForm"), $("#proposalForm"));
        } 

    })
        //from proposal BACK to contact
        $("#proposalButtonBack").on("click", function(){
            clearErrors()
            move($("#proposalForm"), $("#contactForm"));
                
        })
    //from proposal to budget
    $("#proposalButtonNext").on("click", function(){
        
        move($("#proposalForm"), $("#budgetForm"));
            
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

    // FINAL SUBMIT
    $("#finishButton").on("click", function(){
        //sucessfull anim

        console.log("finished");
        $("#budgetForm").hide();
        // $("#budgetForm").addClass("animated bounceOutUp");
        $("#budgetForm").show();

    })

    
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

    function displayError() {
        // $("#errorMessage").text("Please make sure you are entering valid information.");
        $(".errorMessage").slideDown();
    }
    function clearErrors() {
        $(".errorMessage").slideUp();
        $("input").removeClass("invalidInput animated shake");
    }


   
    // =========================================================================
    //                        DATA VALIDATION FUNCTIONS
    // =========================================================================
    //note: this uses validator.js library :)

function validateInput(inputType, inputValue) {
    let isValid = false;
    if(inputType == "text") {
        isValid = isText(inputValue);
    } else if(inputType == "email") {
        isValid = isEmail(inputValue);
    } else if(inputType == "tel") {
        isValid = isPhone(inputValue);
        
    } else if(inputType == "number") {
        isValid = isNumber(inputValue);
    }
    else if(inputType == "textArea") {
        isValid = isTextArea(inputValue);
    }
    console.log("Is Valid: " + isValid);

    //handle what is not valid
    return isValid;
}

function isText(text) {
    let filteredText = validator.blacklist(text, [' ', '.', "'"]);
    return validator.isAlpha(filteredText);
}

function isEmail(email) {
    return validator.isEmail(email);
}

function isPhone(phoneStr) {
    return validator.isMobilePhone(phoneStr, "en-US"); //checks for phones in the US
}

function isNumber(num) {
    return validator.isNumeric(num); //checks if string contains only numbers
}

function isTextArea(text) {
    let filteredText = validator.blacklist(text, [' ', '.',';','(',')','?','!','-','/','    ']);
    return validator.isAlpha(filteredText);
    
}




    // =============================================================================
    //                          DATA SANITIZATION??
    // =============================================================================
