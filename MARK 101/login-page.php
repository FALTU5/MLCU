<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Responsive Login Form</title>
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <link rel='stylesheet' type='text/css'>

<div class="login">
  <div class="login-header">
    <h1>Login</h1>
  </div>
  <div class="login-form">
    <h3>Username:</h3>
    <input type="text" placeholder="Username" name="username" id = "username"/><br>
    <h3>Password:</h3>
    <input type="password" placeholder="Password" name="password" id="password" />
    <br>
    <input type="button" value="Login" class="login-button" id="login-submit" />
    <br>
    <div id = "msg"></div>
    <br>
    <a class="sign-up">Sign Up! Contact the Admin</a>
    <br>
  </div>
</div>
</body>

<script type="text/javascript" src = "script/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="script/login.js"></script>
</html>
