<html>
<title> Technical Admin Home</title>

<?php
// Validate if session exist and account type is a tech admin

session_start();
if(isset($_SESSION['userid']) && isset($_SESSION['usertype']) == 'TECHNICAL ADMIN')
{
    echo session_id();
    echo $_SESSION['userid']. " Welcome";
}
else
    header("location:../../login-page.php");
?>

<body>
<p> <a href="../../logout.php"> Logout</a> </p>

</body>
</html>


