<?php
// session 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/add.css">
<title>Forms Page</title>
</head>
<body>
<?php
  include('header.php');?>

<?php
    if(isset($_SESSION["useruid"]) && $_SESSION["useruid"]=="admin")
    {
      ?>
  <div class="content">
    <div class="form-container">
      <div class="form">
        <h2>Car Information</h2>
        <form action="includes/add.inc.php" method="post" enctype="multipart/form-data">
        <label for="carID">Car ID:</label>
        <input type="text" id="carID"value="car" name="carID" required>
        <label for="carName">Car Name:</label>
        <input type="text" id="carName" name="carName" value="car" required>
        <label for="carCondition">Car Condition:</label>
        <select id="carCondition" name="carCondition" required>
          <option value="Excellent">Excellent</option>
          <option value="Good">Good</option>
          <option value="Fair">Fair</option>
        </select>
        <label for="carQuality">Car Quality:</label>
        <select id="carQuality" name="carQuality" required>
          <option value="High">High</option>
          <option value="Medium">Medium</option>
          <option value="Low">Low</option>
        </select>
        <label for="carPrice">Price:</label>
        <input type="text" id="carPrice" name="carPrice" value="120" required>
        <label for="carSeats">Number of Seats:</label>
        <input type="text" id="carSeats" value="4" name="carSeats" required>
        <input type="file" id="carImage" name="image" accept="image/*" >
        <button type="submit" name="submit">Submit</button>
        </form>
      </div>
     <?php
     } else {
    header("location:login.php?error=loginrequired");

    }
    ?>

    </div>
  </div>
  <footer class="footer">
    <p>&copy; 2023 Your Company. All rights reserved.</p>
  </footer>
</body>
</html>


