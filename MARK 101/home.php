<html>
<body>

Hello
<?php
session_start();
if(isset($_SESSION['userid']))
{
     include 'functions/user_access.php';
     access($_SESSION['usertype']);
}
else
{
    header('Location:login-page.php');
}

    exit;
 ?>
</body>
</html>