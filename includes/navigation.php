   <?php session_start(); ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="./index.php">Car-Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php">Home</span></a>
      </li>
      <li class="nav-item">
        <a href="./buy_a_car.php" class="nav-link" >Buy car</a>
      </li>
      <li class="nav-item">
        <a href="./place_an_add.php" class="nav-link">Place an  add</a>
      </li>
      <?php  if(isset($_SESSION['username'])){
             $username=$_SESSION['username'];
             if($username!=''){
             echo  "<li class='nav-item' '><a class='nav-link username'>Welcome $username</a></li>";
             echo "<li class='nav-item' ><a  class='nav-link' style='float: right;' href='includes/logout.php'>logout</a></li>";
             }
       }  ?>
         
         
      
    </ul>
  </div>
</nav>