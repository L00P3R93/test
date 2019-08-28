<?php
    if($_POST){
        include '../connection/dbconn.php';
        require '../data/data.php';
        $user_name=mysqli_real_escape_string($dbconn,$_GET['usn']);
        $level=mysqli_real_escape_string($dbconn,$_GET['level']);
        $reset = mysqli_real_escape_string($dbconn,$_GET['reset']);
        $password1 = mysqli_real_escape_string($dbconn,$_REQUEST['user_password']);
        $password2 = mysqli_real_escape_string($dbconn,$_REQUEST['user_password2']);

        //if($password1 == $password2){
            if($level=='doctor'){
                $user_id = get_specific_data($dbconn,'farmers','username',$user_name,'id');
                $sql1="UPDATE doctor SET password='$password1',reset_phrase='$reset' WHERE username=$user_name";
                $r = mysqli_query($dbconn,$sql1);
                if($r){
                    header('Location: ../login.php?reset=success');
                }else{
                    header('Location: ../login.php?reset=fail');
                }

            }else if($level=='warden'){
                $sql1="UPDATE warden SET password='$password1',reset_phrase='$reset' WHERE username='$user_name'";
                $r=mysqli_query($dbconn,$sql1);
                if($r){
                    header('Location: ../login.php?reset=success');
                }else{
                    header('Location: ../login.php?reset=fail');
                }
            }else if($level=='officer'){
                $sql1="UPDATE officer SET password='$password1',reset_phrase='$reset' WHERE username='$user_name'";
                $r=mysqli_query($dbconn,$sql1);
                if($r){
                    header('Location: ../login.php?reset=success');
                }else{
                    header('Location: ../login.php?reset=fail');
                }
            }
        /*}else{
            header("Location: update-authentication.php");
        }*/
    }
?>
