<?php
session_start();
?>
<!-- orderlist (username,carID,carName,address,carPrice) -->
<?php
$link=mysqli_connect("localhost","root","","carrental");
if($_SESSION["useruid"]=="admin"){
    $sql="SELECT * FROM orderlist ";
}
else
{
    $username=$_SESSION["useruid"];
    $sql="SELECT * FROM orderlist2  WHERE username = '$username'";
    
}

$info=$link->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/orderhistory.css">
    <title>Car Ratings</title>
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
        <h2>Rate Cars</h2>
        <?php
    while($row=mysqli_fetch_assoc($info)){

    ?>
        <div class="car">
            <div>
                <h2><?php echo $row["carName"];?></h2>
                <!-- <h2><?php echo $_SESSION["useruid"];?></h2> -->
                <p class="price">Total Rent: <?php echo $row["carPrice"];?></p>
            </div>
            <div class="rating-form">
            <form action="includes/rating.inc.php" method="post">
          <input type="hidden" name="username" value="<?php echo $_SESSION["useruid"];?>">
            <input type="hidden" name="carID" value="<?php echo $row["carID"];?>">
                <label for="condition-rating">Car Condition Rating:</label>
                <select id="condition-rating" name="carCondition" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
                <label for="quality-rating">Car Quality Rating:</label>
                <select id="quality-rating" name="carQuality" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
                <button type="submit" name="submit">Submit Rating</button>
            </form>
            </div>
        </div>   
        <?php }?> 
<!-- add     -->
    </div>
    <footer class="footer">
        <p>&copy; 2023 Your Company. All rights reserved.</p>
    </footer>
</body>
</html>
