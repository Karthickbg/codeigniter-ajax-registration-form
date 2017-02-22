<html>
	<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style>
		/*
 * Specific styles of signin component
 */
/*
 * General styles
 */
body, html {
    height: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
    overflow-x: hidden;
}

.card-container.card {
    max-width: 350px;
    padding: 5px 40px;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #user_name, #name_last,
.form-signin #inputPassword, #inputPassword2, #phone, #dob, #name  {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
    background-color: rgb(104, 145, 162);
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: rgb(173, 50, 126);
}


</style>
</head>
<body>
		<div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" id="form1" action="<?php echo base_url();?>index.php/Welcome/reg_user" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <div class="container">
                <label ><b>Register</b></label>
                </div>
                <input type="text" id="name" name="display_name" class="form-control" placeholder="First name" required>
                <input type="text" id="name_last" name="display_name" class="form-control" placeholder="Last name (OPTIONAL)" >
                <div id="usr_verify"></div>
                <input type="email" id="user_name" name="user" class="form-control" placeholder="Email address" required>
                <div id="pass_verify"></div>
                <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
                <div id="pass2_verify"></div>
                <input type="password" name="pass2" id="inputPassword2" class="form-control" placeholder="Retype password" required>
                <div id="mobile"></div>
                <input type="text" id="phone" name="mobile" class="form-control" placeholder="Phone"> 
                <br>
                
                <button class="btn btn-lg btn-primary btn-block btn-signin" id="click" type="submit">Sign up</button>
            </form><!-- /form -->
            
            
        </div><!-- /card-container -->
    </div><!-- /container -->
<script type="text/javascript">
$(document).ready(function(){
 $("#user_name").keyup(function(){
  if($("#user_name").val().length >= 4)
  {
  $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>index.php/Welcome/check_user",
   data: "name="+$("#user_name").val(),
   success: function(msg){
    if(msg=="true")
    {
     $("#usr_verify").text("Available");
    }
    else
    {
     $("#usr_verify").text("not available");
    }
   }
  });
  }
  else 
  {
   $("#usr_verify").text("")/*css({ "background-image" "none" })*/;
  }
 });
 $("#inputPassword").keyup(function(){
    
  if($("#inputPassword").val().length >2 && $("#inputPassword").val().length < 6)
  {
    $("#pass_verify").text("Minimum password length is 6");
  }
  else if($("#inputPassword").val().length >= 6)
  {
    $("#pass_verify").text("Valid password");
  }
  else if($("#inputPassword").val().length <=2){
    $("#pass_verify").text("");
  }
    
    });

$("#inputPassword2").keyup(function(){
    
  if($("#inputPassword2").val().length >= 1)
  {
    if($("#inputPassword2").val() != $("#inputPassword").val())
    {
         $("#pass2_verify").text("Passwords doesn't match");
        
    }
    else{
       $("#pass2_verify").text("Valid password");
    }
  }
  else {
    $("#pass2_verify").text("");   
  }
    
    });
   
$("#phone").keyup(function(){
    
     if($("#phone").val().length >= 1)
     {
        if(validatePhone('txtphone'))
        {
        if($("#phone").val().length < 10 || $("#phone").val().length > 10)
        {
        $("#mobile").text("Enter a 10 digit number");

        }
    else{
        $("#mobile").text("Valid");
        }
     }   
    else{
        $("#mobile").text("Enter the digits");
    }
    }
    
    else{
        $("#mobile").text("");
        }

function validatePhone(txtPhone) {
    var filter = /^[0-9-+]+$/;
    if (filter.test($("#phone").val())) {
        return true;
    }
    else {
        return false;
    }
}
});

});


</script>
</body>
</html>