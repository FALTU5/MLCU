
<?php

require 'db_connection.php';
$query = "select * from rootadmin";
$mysqli->query($query);
if($mysqli->affected_rows == 1)
{
header('Location:login-page.php');
}

?>