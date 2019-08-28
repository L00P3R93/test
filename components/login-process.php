<?php
    session_start();
    if(isset($_REQUEST['login_button'])||$_REQUEST['auto']==1){
        require '../connection/dbconn.php';
        $errmsg_arr = array();
        $errflag = false;
        $username=  mysqli_real_escape_string($dbconn,$_REQUEST['username']);
        $password=  mysqli_real_escape_string($dbconn,$_REQUEST['password']);
        $level = "";
        if($username == '') {
            $errmsg_arr[] = 'Username missing';
            $errflag = true;
        }
        if($password == '') {
            $errmsg_arr[] = 'Password missing';
            $errflag = true;
        }
        if($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: authentication-check.php");
            exit();
        }

        $sql2="SELECT * FROM users WHERE username='$username'AND password='$password'";
        $res2=  mysqli_query($dbconn,$sql2) or die(mysqli_errno());
        if($res2){
            $trws1= mysqli_num_rows($res2);
            if($trws1==1){
                $rws=  mysqli_fetch_array($res2);
                $_SESSION['username']=$rws['username'];
                $_SESSION['password']=$rws['password'];
                $level = "user";
                //header("location:../loader.php");
                header("location:../home.php?user_name=$username&request=login&status=success&level=$level");
            }
        }

        $sql3="SELECT * FROM admin WHERE username='$username'AND password='$password'";
        $res3=  mysqli_query($dbconn,$sql3) or die(mysqli_errno());
        if($res3){
            $trws1= mysqli_num_rows($res3);
            if($trws1==1){
                $rws=  mysqli_fetch_array($res3);
                $_SESSION['username']=$rws['username'];
                $_SESSION['password']=$rws['password'];
                $level = "admin";
                //header("location:../loader.php");
                header("location:../admin/index.php?user_name=$username&request=login&status=success&level=$level");
            }
        }else {
            $errmsg_arr[] = 'username and password not found';
            $errflag = true;
            if($errflag) {
                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                session_write_close();
                header("location: ../components/authentication-check.php");
                exit();
            }
        }
    }
?>