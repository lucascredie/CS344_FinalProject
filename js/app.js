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
                if(group == "alone") {
                    $(".groupNameInput").hide();
                } else {
                     $(".groupNameInput").show();
                }
           
            move($("#statusForm"),$("#studentForm"));

        } else {
            group = null; //can be something else depending on database 
            move($("#statusForm"), $("#contactForm"));
        }

        // console.log(status);
        // console.log(group);         
    });

    // from student information TO contact
    $("#studentButtonNext").on("click", function(){
        console.log("baaack");

        move($("#studentForm"), $("#contactForm"));
    })

    //from student information BACK to status
    $("#studentButtonBack").on("click", function(){
        console.log("baaack");

        move($("#studentForm"), $("#statusForm"));
    })

    //from contact BACK to status or student info 
    $("#contactButtonBack").on("click", function(){
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

        move($("#contactForm"), $("#proposalForm"));
    
    })
        //from proposal BACK to contact
        $("#proposalButtonBack").on("click", function(){
            
            move($("#proposalForm"), $("#contactForm"));
                
        })
    //from proposal to budget
    $("#proposalButtonNext").on("click", function(){
        
        move($("#proposalForm"), $("#budgetForm"));
            
    })
    //from budget BACK to proposal
    $("#budgetButtonBack").on("click", function(){
        
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

    // FINAL SUBMIT
    $("#finishButton").on("click", function(){
        //sucessfull anim
        console.log("finished");
        $("#budgetForm").hide();
        // $("#budgetForm").addClass("animated bounceOutUp");
        $("#budgetForm").show();

        
    })

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

    function setValue() {
    
    }

});
