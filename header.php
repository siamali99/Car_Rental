
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/home.css">
</head>
<body>

<?php
    if(!isset($_SESSION["useruid"]))
    {
      header("location:login.php?error=none");
    }
      ?>
  <header>
    <h1>Car Rental</h1>
    <nav>
      <a href="home.php">Home</a>
      <a href="carlist.php">Cars</a>
      <a href="recommend.php">Recommended</a>
      <a href="orderhistory.php">Orders</a>
      <a href="history.php">Previous Orders</a>
      <a href="includes/logout.inc.php">Logout</a>
      
    </nav>
  </header>
</body>
</html>
