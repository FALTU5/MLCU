<?php require'files/check installation.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #E2E2E2;
}
</style>
</head>
<link href="file:///C|/wamp/www/Final/Home/css.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/main.css">
<body background="images/bg_2.jpg">

<div class="container">
<div class="header">
    <a href="#">
        <img src="images/header_bg-3.png" width="960" height="115" id="Insert_logo" style="background-color: #C6D580; display:block;" />
    </a></div>
    
    <style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
</style>
   <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
</div>


<div class="content">
 <form action="file:///C|/wamp/www/Final/Home/as.php" method="POST">
<h1>New User</h1>

<label for="username"><strong>Username:</strong></label>
<input type="text" placeholder="Username" name="username"> 
<br>
<label for="password"><strong>Password: </strong></label>
<input type="password" placeholder="Password" name="password" id="password" onkeypress="return RestrictSpace()">
<br>
<label for="confirm_password"><strong>Confirm Password: </strong></label>
<input type="password" placeholder="Confirm Password" id="confirm_password" onkeypress="return RestrictSpace()" >
<span id="message" > </span>
<br>
<label for="account_type"><strong>Account type: </strong></label>
<select>   </select> <br>
<button type="submit" name="submit" value="Sign up" id = "signup">Sign Up </button>

</form>
</body>

<script src = "script/jquery-3.1.1.min.js"> </script>
<script src = "script/password.js"></script>
</body>
</html>
