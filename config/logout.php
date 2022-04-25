<?php
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['fname']);
    unset($_SESSION['mname']);
    unset($_SESSION['sname']);
    header('Location:../index.php');
    
?>

         