<?php
    session_start();
    if(isset($_REQUEST['login_button'])||$_REQUEST['auto']==1){
        require '../connection/dbconn.php';
        $errmsg_arr = array();
        $errflag = false;
        $username=  mysqli_real_escape_string($dbconn,$_REQUEST['username']);
        $password=  mysqli_real_escape_string($dbconn,$_REQUEST['password']);
        $level = mysqli_real_escape_string($dbconn, $_REQUEST['level']);
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
        if($level == 'chief'){
            $sql1="SELECT * FROM chief WHERE username='$username'AND password='$password'";
            $res1=  mysqli_query($dbconn,$sql1) or die(mysqli_errno());

            $trws1= mysqli_num_rows($res1);
            if($trws1==1){
                $rws=  mysqli_fetch_array($res1);
                $_SESSION['username']=$rws['username'];
                $_SESSION['password']=$rws['password'];
                $user_level = $rws['level'];
                //header("location:../loader.php");
                header("location:../home.php?user_name=$username&request=login&status=success&level=$level");
            }
        }else if($level == 'student'){
            $sql1="SELECT * FROM student WHERE username='$username'AND password='$password'";
            $res1=  mysqli_query($dbconn,$sql1) or die(mysqli_errno());

            $trws1= mysqli_num_rows($res1);
            if($trws1==1){
                $rws=  mysqli_fetch_array($res1);
                $_SESSION['username']=$rws['username'];
                $_SESSION['password']=$rws['password'];
                $user_level = $rws['level'];
                //header("location:../loader.php");
                header("location:../home.php?user_name=$username&request=login&status=success&level=$level");
            }
        }else if($level == 'admin'){
            $sql1="SELECT * FROM admin WHERE username='$username'AND password='$password'";
            $res1=  mysqli_query($dbconn,$sql1) or die(mysqli_errno());

            $trws1= mysqli_num_rows($res1);
            if($trws1==1){
                $rws=  mysqli_fetch_array($res1);
                $_SESSION['username']=$rws['username'];
                $_SESSION['password']=$rws['password'];
                $user_level = $rws['level'];
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