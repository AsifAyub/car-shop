<?php include('includes/header.php'); ?>
<!--Navigation starts here-->
<?php include('includes/navigation.php'); ?>
 
<!--   Navigation ends here -->

<!--body starts here-->

<div class="row">

<div class="col-md-8">
    
     <h2 class="heading2">All vehicles</h2>
     <hr>
     <div class="cars_list_table">
       
       <?php  
         if(isset($_GET['car_id'])){
             $car_id=$_GET['car_id'];
  $select_query="SELECT * from cars WHERE car_id=$car_id ";
  $result=mysqli_query($connection, $select_query);
  while($row=mysqli_fetch_assoc($result)){
      $make=$row['make'];
      $model=$row['model'];
      $color=$row['color'];
      $category=$row['category'];
      $date=$row['date'];
      $image=$row['image'];
      $description=$row['description'];
  
  
  
  
?>  
        <h2><?php echo $make." ". $model; ?></h2>
        <p><?php echo "Color ".$color; ?></p>
         <p><?php echo "Category ".$category; ?></p>
        <p><?php echo "Published on ".$date; ?></p>
        <img src="images/<?php echo   $image; ?>" alt="" width=150 height=200>
         <p><?php echo "Description ".$description; ?></p>
         <hr><br>
     
   <?php  } }?>
    </div>
</div>




<!--Sidebar starts here-->
<?php include('includes/sidebar.php'); ?>


</div>



</body>
</html>