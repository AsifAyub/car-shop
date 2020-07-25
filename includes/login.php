<?php  include('db.php'); ?>
<?php session_start();  ?>
<?php
if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    
    $query= "SELECT * FROM users WHERE username='$username'";
    $select_query= mysqli_query($connection, $query);
    if(!$connection){
        die("Query Failed".mysqli_error($connection));
    }
    while($row=mysqli_fetch_assoc($select_query)){
         $db_id=$row['id'];
         $db_username=$row['username'];
         $db_user_password=$row['user_password'];
         $db_user_first_name=$row['user_first_name'];
         $db_user_last_name=$row['user_last_name'];
         $db_user_email=$row['user_email'];
         $db_user_role=$row['user_role'];
         $db_user_datejoined=$row['date_joined'];
    }
    if($username === $db_username && $password === $db_user_password){
       $_SESSION['username']=$db_username;
       $_SESSION['password']=$db_user_password;
       $_SESSION['firstname']=$db_user_first_name;
       $_SESSION['lastname']=$db_user_last_name;
       $_SESSION['user_role']=$db_user_role;
        header("Location: ../index.php");
    }else{
        $message= "Invalid usernameor password";
        header("Location: ./index.php?invalid='$message'");
    }
}  





?>