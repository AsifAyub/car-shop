<?php
session_start();

       $_SESSION['username']='';
       $_SESSION['password']='';
       $_SESSION['firstname']='';
       $_SESSION['lastname']='';
       $_SESSION['user_role']='';
    
     header("Location: ../index.php");

?>