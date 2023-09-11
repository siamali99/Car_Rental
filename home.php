<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/home.css">
<title>Car Rental</title>
</head>
<body>
  <?php
  include('header.php');?>
  <div class="hero-section">
    <?php
    if(isset($_SESSION["useruid"]))
    {
      ?>
    
    <h2>Welcome to our Website <?php echo $_SESSION["useruid"];?></h2>
    <?php     
    if($_SESSION["useruid"]=="admin")
    {
      ?>
      <a href="add.php" class="add" ><button style="width:60px; background-color:white; color:black; "><b>Add Car</b></button></a>
      
    <?php
    }
  }
    else {
    header("location:login.php?error=none");

    }
    ?>
    <p>Discover amazing experiences with us.</p>
  </div>
  <footer class="footer">
    <p>&copy; 2023 Your Company. All rights reserved.</p>
  </footer>
</body>
</html>
