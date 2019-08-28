<?php
    //error_reporting(0);
    session_start();
    $temp= $_SESSION['username'];

    ini_set("display_errors",1);
    if(isset($_POST)){
        require '../connection/dbconn.php';
        session_start();
        $Destination = '../userfiles/avatars';

        if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name'])){
            $NewImageName= 'default.jpg';
            move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }
        else{
            $RandomNum = rand(0, 9999999999);
            $ImageName = str_replace(' ','-',strtolower($_FILES['ImageFile']['name']));
            $ImageType = $_FILES['ImageFile']['type'];
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }
        $user_firstname=$_REQUEST['user_firstname'];
        $user_lastname=$_REQUEST['user_lastname'];
        $user_id_no=$_REQUEST['user_id_no'];
        $user_phone=$_REQUEST['user_phone'];
        $user_level = mysqli_real_escape_string($dbconn, $_REQUEST['level']);
        //$user_eid_no = mysqli_real_escape_string($dbconn, $_REQUEST['user_eid_no']);
        $gender=$_REQUEST['gender'];
        $user_email=$_REQUEST['user_email'];


        if($user_level == 'chief'){
            $sql3="UPDATE chief SET f_name='$user_firstname',l_name='$user_lastname',id='$user_id_no',email='$user_email',phone='$user_phone',gender='$gender',avatar='$NewImageName' WHERE username = '$temp'";
            //$user_name=$_SESSION['user_name'];
            $sql4="INSERT INTO chief (f_name,l_name,id,email,phone,gender,avatar) VALUES ('$user_firstname','$user_lastname','$user_id_no','$user_email','$user_phone','$gender','$NewImageName') WHERE username = '$temp'";
            $result = mysqli_query($dbconn,"SELECT * FROM chief WHERE username = '$user_name'");
            if( mysqli_num_rows($result) > 0) {
                mysqli_query($dbconn,$sql4)or die(mysqli_error($dbconn));
                header("location:../home.php?user_name=$temp&level=chief");
            }
            else{
                mysqli_query($dbconn,$sql3)or die(mysqli_error($dbconn));
                header("location:../home.php?user_name=$temp&level=chief");
            }
        }else if($user_level == 'student'){
            $sql3="UPDATE student SET f_name='$user_firstname',l_name='$user_lastname',id='$user_id_no',email='$user_email',phone='$user_phone',gender='$gender',avatar='$NewImageName' WHERE username = '$temp'";
            //$user_name=$_SESSION['user_name'];
            $sql4="INSERT INTO student (f_name,l_name,id,email,phone,gender,avatar) VALUES ('$user_firstname','$user_lastname','$user_id_no','$user_email','$user_phone','$gender','$NewImageName') WHERE username = '$temp'";
            $result = mysqli_query($dbconn,"SELECT * FROM student WHERE username = '$user_name'");
            if( mysqli_num_rows($result) > 0) {
                mysqli_query($dbconn,$sql4)or die(mysqli_error($dbconn));
                header("location:../home.php?user_name=$temp&level=student");
            }
            else{
                mysqli_query($dbconn,$sql3)or die(mysqli_error($dbconn));
                header("location:../home.php?user_name=$temp&level=student");
            }
        }
    }
?>