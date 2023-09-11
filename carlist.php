<?php
session_start();
?>


<?php
$link=mysqli_connect("localhost","root","","carrental");
$sql="SELECT * FROM carlist";
$info=$link->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home Page</title>
<link rel="stylesheet" href="css/carlist.css">
</head>
<body>

  <?php
    if(!isset($_SESSION["useruid"]))
    {
      header("location:login.php?error=none");
    }
      ?>

   

<?php
  include('header.php');?>
  <div class="content">
    <h2>Available Cars for Rental</h2>


    <div class="car-list">
    <?php
    while($row=mysqli_fetch_assoc($info)){

    ?>
      <div class="car-card">
        <img class="car-image" src="image/<?php echo $row["file"];?>" alt="Car Model 1">
        <h3><?php echo $row["carName"];?></h3>
        <div class="car-details">
          <p>Car Condition : <?php echo $row["carCondition"];?></p>
          <p>Car Quality : <?php echo $row["carQuality"];?></p>
          <p>Rent Per day : <?php echo $row["carPrice"];?>$</p>
          <p>Number of Seats: <?php echo $row["carSeats"];?></p>
          <!-- <p>Customer Name: <?php echo $_SESSION["useruid"];?></p> -->

          <form action="confirmation.php" method="post">
            <input type="hidden" name="carCondition" value="<?php echo $row["carCondition"];?>">
            <input type="hidden" name="carName" value="<?php echo $row["carName"];?>">

            <input type="hidden" name="file" value="<?php echo $row["file"];?>">
            <input type="number" name="day" placeholder="Enter total days"required><br><br>
            <input type="hidden" name="carID" value="<?php echo $row["id"];?>">
            <input type="hidden" name="carQuality" value="<?php echo $row["carQuality"];?>">
            <input type="hidden" name="carPrice" value="<?php echo $row["carPrice"];?>">
            <button class="btn" type="submit" name="submit">Rent Now</button>

          </form>
        </div>
        
      </div>
     

      <?php }?>
    </div>
    
    
  </div>
  
  <footer class="footer">
    <p>&copy; 2023 Your Company. All rights reserved.</p>
  </footer>
  
</body>
</html>
