<?php
    require '../connection/dbconn.php';
    $username = $_GET['username'];
    $level = $_GET['level'];
    if($_POST){
        $Destination = '../userfiles/appl_uploads';

        if(!isset($_FILES['document']) || !is_uploaded_file($_FILES['document']['tmp_name'])){
            $NewDocumentName= 'None';
            move_uploaded_file($_FILES['document']['tmp_name'], "$Destination/$NewDocumentName");
        }
        else{
            $RandomNum = rand(0, 9999999999);
            $ImageName = str_replace(' ','-',strtolower($_FILES['document']['name']));
            $ImageType = $_FILES['document']['type'];
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewDocumentName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            move_uploaded_file($_FILES['document']['tmp_name'], "$Destination/$NewDocumentName");
        }


        $userid = mysqli_real_escape_string($dbconn, $_REQUEST['userid']);
        $docname = mysqli_real_escape_string($dbconn, $_REQUEST['documentname']);

        $sql="INSERT INTO uploads(user_id,username,doc_file,doc_name) VALUES('$userid','$username','$NewDocumentName','$docname')";
        $r = mysqli_query($dbconn, $sql) or die(mysqli_error($dbconn));
        header("location: ../apply.php?user_name={$username}&level={$level}&ins=success&step=uploads");

    }

?>