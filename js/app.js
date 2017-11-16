//WE WILL STORE DATA IN JAVASCRIPT UNTIL FINAL SUBMIT BUTTON SENDS USING AJAX TO PHP
$( document ).ready(function() {
    console.log( "ready!" );
    //DATA
    let status;
    let group;
    let totalBudget;
    //EVENTS

    /*  check for a change in input and display section 
        of project alone or in a group if user is a student */
    $("input:radio[name=status]").change(function(){
         //gets value of what is checked
        let statusInput = $("input:radio[name=status]:checked").val(); 
       
        if(statusInput == "student") { //if student
            $("#studentBox").slideDown("fast"); //show option for group
        } else {  
            $("#studentBox").slideUp("fast"); //otherwise hide
        } }); 

    /*  check for status submit button clicked and move to next form */
    $("#statusButtonSubmit").on("click",function(){
        let statusInput = $("input:radio[name=status]:checked").val();
        status = statusInput;

        if(statusInput == "student") {
            let groupInput = $("input:radio[name=group]:checked").val();
            group = groupInput;
            
            //hides group name if the person is alone
            if(group == "alone") {
                $(".groupNameInput").hide();
            } else {
                $(".groupNameInput").show();
            }
           
            move($("#statusForm"),$("#studentForm"));


        } else {
            group = null; //can be something else too  
            move($("#statusForm"), $("#contactForm"));
        }

        console.log(status);
        console.log(group);
                
    });
    // from student information to contact
    $("#studentButtonNext").on("click", function(){
        console.log("baaack");

        move($("#studentForm"), $("#contactForm"));
    
    })
    //from student information to status
    $("#studentButtonBack").on("click", function(){
        console.log("baaack");

        move($("#studentForm"), $("#statusForm"));
    
    })
    //from contact back to status or student info deppending on users choice
    $("#contactButtonBack").on("click", function(){
        console.log("baaack");
        if(status == "student") {
            move($("#contactForm"), $("#studentForm"));
        } else {
            move($("#contactForm"), $("#statusForm"));
        }
    })
    //from contact to proposal
    $("#contactButtonNext").on("click", function(){

        move($("#contactForm"), $("#proposalForm"));
    
    })
    //from proposal back to contact
    $("#proposalButtonBack").on("click", function(){
        
        move($("#proposalForm"), $("#contactForm"));
            
    })
    //from proposal to budget
    $("#proposalButtonNext").on("click", function(){
        
        move($("#proposalForm"), $("#budgetForm"));
            
    })

    $("#budgetButtonBack").on("click", function(){
        
        move($("#budgetForm"),$("#proposalForm"));
            
    })

    //retract icon functionality
    $(".retractIcon ").on("click", function(){
        $(this).toggleClass("fa-minus-circle")
        console.log("rectract");
        $(this).parent().next().slideToggle();   //toggles div after it
       
    })
    //validation checkmark for form
    $(".textAreaCheck").on("input", function(){
        let currentVal = $(this).val();
        if(currentVal != "") {
            $(this).parent().prev().children().first().addClass("checked");
        } else {
            $(this).parent().prev().children().first().removeClass("checked");
        }
    });

    //validation checkmark for budget
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
        totalBudget = 0;
        $(".budgetInput").each(function() {
            totalBudget += Number($(this).val());
         });
         $("#total").text(totalBudget);
         console.log("total:  " + totalBudget);

         if(totalBudget != 0) {
            $("#total").addClass("checked");
         } else {
            $("#total").removeClass("checked");
         }
       
    });


    function move(currentForm, nextForm) {
        currentForm.hide();
        nextForm.show();
    }

});
