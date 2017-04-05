<?php
    require 'db_connection.php';

    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);

    // prepared query;
    $query = "select username as username,password as password,u_type as type from users where username = '$username' and password = '$password' UNION select t_username as username,t_password as password,t_acc_type as type from rootadmin where t_username = '$username' and t_password = '$password' ";
    //$query = "select * from rootadmin where t_username = '$username' and t_password = '$password' LIMIT 1";
    $result = $mysqli->query($query);
    if($mysqli->affected_rows)
    {
        while($row = $result->fetch_object())
        {
            session_start();
            $_SESSION['userid'] = $row->username;
            $_SESSION['usertype'] = $row->type;

        }
      echo "success";

    }
    else
    {
        echo "Invalid Username or Password";

    }




?>