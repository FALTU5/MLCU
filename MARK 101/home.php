<html>
<body>

Hello
<?php
session_start();
echo $_SESSION['userid'];
echo $_SESSION['usertype'];
?>

</body>
</html>