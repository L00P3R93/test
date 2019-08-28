<?php
    session_start();
    include '../connection/dbconn.php';
    if(isset($_REQUEST['signup_button'])){
        $user_email=$_REQUEST['email'];
        $user_firstname=$_REQUEST['fname'];
        //$user_middlename = $_REQUEST['user_middlename'];
        $user_lastname=$_REQUEST['lname'];
        $user_name=$_REQUEST['username'];
        $user_password=$_REQUEST['password'];
        $user_password2=$_REQUEST['cpassword'];
        $level=$_REQUEST['level'];
        $reset = rand(0,99999);


        if($level == 'chief'){
            $sql1="INSERT INTO chief(username,password,reset_phrase,f_name,l_name,email) VALUES('$user_name','$user_password2','$reset','$user_firstname','$user_lastname','$user_email')";
            mysqli_query($dbconn,$sql1) or die(mysqli_error($dbconn));
            $_SESSION['username'] = $user_name;
            header('Location: ../update.registration.php?user_name='.$user_name.'&level='.$level);
        }else if($level == 'student'){
            $sql1="INSERT INTO student(username,password,reset_phrase,f_name,l_name,email) VALUES('$user_name','$user_password2','$reset','$user_firstname','$user_lastname','$user_email')";
            mysqli_query($dbconn,$sql1) or die(mysqli_error($dbconn));
            $_SESSION['username'] = $user_name;
            header('Location: ../update.registration.php?user_name='.$user_name.'&level='.$level);
        }


    }
?>