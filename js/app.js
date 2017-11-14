//WE WILL STORE DATA IN JAVASCRIPT UNTIL FINAL SUBMIT BUTTON SENDS USING AJAX TO PHP
$( document ).ready(function() {
    console.log( "ready!" );

    let status;
    //events
    $("input:radio[name=status]").change(function(){
        // console.log("changed");

        let statusInput = $("input:radio[name=status]:checked").val();
        // console.log(statusInput);

        if(statusInput == "student") {
            console.log("student!");
            $("#studentBox").slideDown("fast");
        } else {
            $("#studentBox").slideUp("fast");
        }
    });

    // $("#statusButtonSubmit").on("click",function(){
    //     setStatus(moveOn);
    // });

    // 
    

    function setStatus (moveOn) {
       
        let statusInput = $("input:radio[name=status]:checked").val();
        status = statusInput;
        console.log(status); 

        $("#statusForm").toggleSlideDown();
    }

    function moveOn() {
     
        console.log("do it");
    }

});