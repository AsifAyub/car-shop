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
  $select_query="SELECT * from cars ORDER BY car_id DESC";
  $result=mysqli_query($connection, $select_query);
  while($row=mysqli_fetch_assoc($result)){
      $car_id=$row['car_id'];
      $make=$row['make'];
      $model=$row['model'];
      $color=$row['color'];
      $category=$row['category'];
      $date=$row['date'];
      $image=$row['image'];
      $description=substr($row['description'],0,110);
  
  
  
  
?>  
        <h2><a href="car_info.php?car_id=<?php echo $car_id;  ?>"><?php echo $make." ". $model; ?></a></h2>
        <p><?php echo "Color ".$color; ?></p>
         <p><?php echo "Category ".$category; ?></p>
        <p><?php echo "Published on ".$date; ?></p>
        <a href="car_info.php?car_id=<?php echo $car_id;  ?>"><img src="images/<?php echo   $image; ?>" alt="" width=150 height=200></a>
         <p><?php echo "Description ".$description; ?></p>
         <a href="car_info.php?car_id=<?php echo $car_id;  ?>" class="btn btn-primary">Read more</a>
         <hr><br>
     
   <?php  } ?>
    </div>
</div>




<!--Sidebar starts here-->
<?php include('includes/sidebar.php'); ?>


</div>



</body>
</html>