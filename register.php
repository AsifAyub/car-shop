<?php include('includes/header.php'); ?>
<!--Navigation starts here-->
<?php include('includes/navigation.php'); ?> 
<?php
if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email= $_POST['email'];
    
    $_SESSION['username']= $username;
    $_SESSION['password']=$password;
    $_SESSION['firstname']= $firstname;
    $_SESSION['lastname']=$lastname;
$query= "INSERT INTO users(username,user_first_name,user_last_name, user_password, user_email , date_joined) VALUES('$username','$firstname','$lastname','$password','$email', now())";
$insert_query= mysqli_query($connection,$query);
if(!$insert_query){
    die("Insert Query failed".mysqli_error($connection));
}
header("Location: index.php");
    


}
                         

?>
  
  
  
   
<!--   Navigation ends here -->

<!--body starts here-->

<div class="row">

<div class="col-md-8">
    <h2 class="heading2">Registeration here</h2>
    <hr>
    <form action="register.php" method="post" class="form">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="" >
        </div>
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" class="form-control" id="" >
        </div>
        
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" class="form-control" id="" >
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="" >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="" >
        </div>
        <div class="form-group">
            <input type="submit" value="Register" name="submit" class="btn btn-primary" >
        </div>
    </form>
    
</div>




<!--Sidebar starts here-->
<?php include('includes/sidebar.php'); ?>


</div>



</body>
</html>