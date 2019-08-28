<?php
    //ini_set("display_errors",1);
    error_reporting(0);
    session_start();
    $temp=$_SESSION['username'];
    $id = $_GET['id'];
    if(isset($_POST)){

        require '../connection/dbconn.php';
        require '../../data/data.php';
    	$cusername = mysqli_real_escape_string($dbconn,$_REQUEST['category_user']);
        $category = mysqli_real_escape_string($dbconn,$_REQUEST['category']);
        $cbody = mysqli_real_escape_string($dbconn,$_REQUEST['category_body']);
        $userid = get_specific_data($dbconn,'users','username',$temp,'user_id');

        //Uploading values into the database
        if(!empty($_REQUEST['id']) && isset($id)){

             //Upload user image to database
            $sql1="UPDATE category SET user_id='$userid', username='$temp', category='$category', category_descr='$cbody' WHERE category_id=$id";
            $r=mysqli_query($dbconn,$sql1)or die(mysqli_error($dbconn));
            //Setting the error message
            if($r)
            {
                $message = '<p class="alert alert-success">Update Successful!</p>';
            }else{
                $message = '<p class="alert alert-danger">Could not Update Post because: '.mysqli_errno($dbconn);
                $message .= '<p class="alert alert-danger">'.$sql3.'</p>';
            }

        }else{
            $sql3 = "INSERT INTO category(user_id, username, category, category_descr) VALUES('$userid', '$temp', '$category', '$cbody')";
            $r = mysqli_query($dbconn, $sql3)or die(mysqli_error($dbconn));

            if($r)
            {
                $message = '<p class="alert alert-success">New Post Added Successfully!</p>';
            }else{
                $message = '<p class="alert alert-danger">Could not Add Post because: '.mysqli_errno($dbconn);
                $message .= '<p class="alert alert-danger">'.$sql4.'</p>';
            }
        }
        if(!empty($_REQUEST['id']) && isset($id)){
    		header("location:../category.php?id=".$id);
        }else{
        	header("location:../category.php");
        }
    }
?>