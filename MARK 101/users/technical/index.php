<html>
<title> Technical Admin Home</title>

<?php
// Validate if session exist and account type is a tech admin

session_start();
if(isset($_SESSION['userid']) && isset($_SESSION['usertype']) == 'TECHNICAL ADMIN')
{
    echo $_SESSION['userid']. "welcome";
}
else
    header("location:../login-page.php");
?>

<body>
<a href="../../logout.php"> Logout</a>

</body>
</html>


