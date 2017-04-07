<?php
session_start();
$username = $_SESSION['userid'];
session_unset($_SESSION['userid']);
header("location:login-page.php");
?>