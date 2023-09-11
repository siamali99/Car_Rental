<?php
session_start();
?>


<?php
if(isset($_POST["submit"]))

{
    $carID=$_POST["carID"];
    $carName=$_POST["carName"];
    $carCondition=$_POST["carCondition"];
    $carQuality=$_POST["carQuality"];
    $carPrice=$_POST["carPrice"];
    $file=$_POST["file"];
    $day=$_POST["day"];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home Page</title>
<link rel="stylesheet" href="css/confirmation.css">
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
    <h2>Confirm Rent</h2>


    <div class="car-list">

      <div class="car-card">
        <!-- <img class="car-image" src="image/whitecar.jpeg" alt="Car Model 1"> -->
        <img class="car-image" src="image/<?php echo $file;?>" alt="">
        <h3>Car Model :<?php echo $carName?></h3>
        <div class="car-details">
          <p>Car Condition : <?php echo $carCondition; ?></p>
          <p>Car Quality : <?php echo $carQuality ?></p>
          <p>Total Rent : <?php echo $carPrice*$day ?>$</p>
          <form action="includes/order.inc.php" method="post">
          <input type="hidden" name="username" value="<?php echo $_SESSION["useruid"];?>">

            <input type="hidden" name="carID" value="<?php echo $carID;?>">
            <input type="hidden" name="carName" value="<?php echo $carName;?>">
            <input type="hidden" name="carPrice" value="<?php echo $carPrice*$day;?>">
            <input type="text" name="address" placeholder="Enter Address" required> <br><br>
            <button class="btn" type="submit" name="submit">Confirm</button>

          </form>
        </div>

      </div>
     
    </div>
    
    
  </div>
  
  <footer class="footer">
    <p>&copy; 2023 Your Company. All rights reserved.</p>
  </footer>
  
</body>
</html>
