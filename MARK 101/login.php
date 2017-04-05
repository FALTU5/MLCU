<?php
    require 'db_connection.php';

    $username = trim($mysqli->real_escape_string($_POST['username']));
    $password = $mysqli->real_escape_string($_POST['password']);

    // prepare query;
    $query = "select username as username,password as password,u_type as type from users where username = '$username' and password = '$password'
    LIMIT 1 UNION select t_username as username,t_password as password,t_acc_type as type from rootadmin where t_username = '$username'
    and t_password = '$password' LIMIT 1";

    $result = $mysqli->query($query);
    if($mysqli->affected_rows)
    {
        while($row = $result->fetch_object())       // fetching values from query result
        {
            $userid = $row->username;
            $usertype = $row->type;

        }
        
        $qry = "select * from account_type where acc_id = '$usertype'"; // fetching user type from database
        $result2 = $mysqli->query($qry);
        if($mysqli->affected_rows)
        {
            $rows = $result2->fetch_object();
            $userlevel = $rows->acc_title;      // user type fetched
        }
        session_start();
        $_SESSION['userid'] = $userid;
        $_SESSION['usertype'] = $userlevel;
        echo "success";

    }
    else
    {
        echo "Invalid Username or Password";

    }




?>