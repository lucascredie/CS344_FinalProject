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

    /*  check for submit button clicked and move to next form */
    $("#statusButtonSubmit").on("click",function(){
        let statusInput = $("input:radio[name=status]:checked").val();
        status = statusInput;

        if(statusInput == "student") {
            let groupInput = $("input:radio[name=group]:checked").val();
            group = groupInput;

            // console.log("dasdas");
            $("#statusForm").slideUp();

            $("#studentForm").slideDown();

        } else {
            group = null; //can be something else too
            
        }

        console.log(status);
        console.log(group);
                
    });

    $("#studentButtonBack").on("click", function(){
        // console.log("baaack");

        $("#studentForm").slideUp();
        $("#statusForm").slideDown();
    
    })

});