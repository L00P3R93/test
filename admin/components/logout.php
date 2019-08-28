<?php
    session_start();
    require '../connection/dbconn.php';
    session_destroy();
    header('location:../index.php?logout=success');
?>