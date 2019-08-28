<?php
    require '../connection/dbconn.php';
    $username = $_GET['username'];
    $level = $_GET['level'];
    if($_POST){
        $userid = $_REQUEST['del_user_id'];
        $sql_del = "DELETE FROM users WHERE user_id=$userid";
        $q_del = mysqli_query($dbconn,$sql_del) or die(mysqli_error($dbconn));
        header("location: ../users.php?user_name={$username}&level={$level}&del=success");
    }
?>