<html>
<body>

Hello
<?php
session_start();
 include 'functions/user_access.php';
 access($_SESSION['usertype']);
?>

</body>
</html>