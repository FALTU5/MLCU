<?php require'files/check installation.php'; ?>

<html>
<title> Installation</title>

<body>
<form action="as.php" method="POST">

Username: <input type=" textbox" placeholder="Username" name="username"> <br>
Password: <input type="password" placeholder="Password" name="password" id="password"> <br>
Confirm Password: <input type="password" placeholder="Confirm Password" id="confirm_password" >
<span id="message" > </span>
<br>
Account type: <select> <?php ?>  </select> <br>
<input type="submit" name="submit" value="Sign up" id = "signup">

</form>
</body>

<script src = "script/jquery-3.1.1.min.js"> </script>
<script>

   $('#confirm_password').on('keyup', function() {
       if($(this).val() != $('#password').val())
       {
           $('#message').html('Password Mismatch').css('color', 'red');
           $('#signup').attr({disabled:true});
       }
        else
       {
           $('#message').html('Password Match').css('color', 'green');
           $('#signup').attr({disabled:false});
       }
    });

</script>
</html>
