<?php
$mysqli = new mysqli('localhost','root','','mlcu_university');
if($mysqli->connect_error)
{
    die('Connection failed: '. $mysqli->connect_error);
}
?>