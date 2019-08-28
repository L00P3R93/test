<?php
    if($_POST){
        include '../connection/dbconn.php';
        require '../data/data.php';
        $user_name=mysqli_real_escape_string($dbconn,$_GET['usn']);
        $level=mysqli_real_escape_string($dbconn,$_GET['level']);
        $reset = mysqli_real_escape_string($dbconn,$_GET['reset']);
        $password1 = mysqli_real_escape_string($dbconn,$_REQUEST['user_password']);
        $password2 = mysqli_real_escape_string($dbconn,$_REQUEST['user_password2']);


        $sql1="UPDATE users SET password='$password1',reset_phrase='$reset' WHERE username='$user_name'";
        $r=mysqli_query($dbconn,$sql1);
        if($r){
            header('Location: ../login.php?reset=success');
        }else{
            header("Location: update-authentication.php");
        }

    }
?>
