//WE WILL STORE DATA IN JAVASCRIPT UNTIL FINAL SUBMIT BUTTON SENDS USING AJAX TO PHP
$( document ).ready(function() {
    console.log( "ready!" );
    //DATA
    let status;
    let group;

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
    //from contact back to status
    $("#contactButtonBack").on("click", function(){
        console.log("baaack");

        move($("#contactForm"), $("#statusForm"));
    
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
        
        // move(, $("#proposalForm"));
            
    })

    //retract icon functionality
    $(".retractIcon ").on("click", function(){
        $(this).toggleClass("fa-minus-circle")
        console.log("rectract");
        $(this).parent().next().slideToggle();   //toggles div after it
       
    })
    //validation checkmark for form
    $(".textArea").on("input", function(){
        let currentVal = $(this).val();
        if(currentVal != "") {
            $(this).parent().prev().children().first().addClass("checked");
        } else {
            $(this).parent().prev().children().first().removeClass("checked");
        }
    });



    function move(currentForm, nextForm) {
        currentForm.hide();
        nextForm.show();
    }

});