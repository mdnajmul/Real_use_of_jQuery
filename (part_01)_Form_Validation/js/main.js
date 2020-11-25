$(function(){
    //First, hide all error field 
    $("#username_error_msg").hide();
    $("#password_error_msg").hide();
    $("#repassword_error_msg").hide();
    $("#email_error_msg").hide();
    
    //Here some variables are declared & value set false
    var error_username = false;
    var error_password = false;
    var error_repassword = false;
    var error_email = false;
    
    //Username field
    $("#username").focusout(function(){
        check_username();
    });
    
    //Password field
    $("#password").focusout(function(){
        check_password();
    });
    
    //re-password field
    $("#repassword").focusout(function(){
        check_repassword();
    });
    
    //email field
    $("#email").focusout(function(){
        check_email();
    });
    
    //create function for validate username
    function check_username(){
        var username_length = $("#username").val().length;
        if((username_length < 5 || username_length > 20) && username_length !=0){
            $("#username_error_msg").html("Username should be between 5 to 20 characters!");
            $("#username_error_msg").show();
            error_username = true;
        } else{
           $("#username_error_msg").hide(); 
        }
    }
    
    //create function for validate password
    function check_password(){
        var password_length = $("#password").val().length;
        if(password_length < 8 && password_length !=0){
            $("#password_error_msg").html("Password should be minimum 8 characters!");
            $("#password_error_msg").show();
            error_password = true;
        } else{
           $("#password_error_msg").hide(); 
        }
    }
    
    //create function for validate re-password
    function check_repassword(){
        var password = $("#password").val();
        var repassword = $("#repassword").val();
        if(password != repassword){
            $("#repassword_error_msg").html("Password did not matched !!");
            $("#repassword_error_msg").show();
            error_repassword = true;
        } else{
           $("#repassword_error_msg").hide(); 
        }
    }
    
    //create function for validate email
    function check_email(){
        var pattern = new RegExp(/([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})/i);
        
        if(pattern.test($('#email').val())){
            $("#email_error_msg").hide();
        } else{
            $("#email_error_msg").html("Please enter a valid email address !!");
            $("#email_error_msg").show();
            error_email = true;
        }
    }
    
    //submit form when click submit button
    $("#myform").submit(function(){
        var error_username = false;
        var error_password = false;
        var error_repassword = false;
        var error_email = false;
        
        if(error_username == false && error_password == false && error_repassword == false && error_email == false){
            return true;
        } else{
            return false;
        }
        
    });
    
});