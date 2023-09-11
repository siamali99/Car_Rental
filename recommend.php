<?php
session_start();
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "carrental");
$targetUserId = $_SESSION["useruid"];
include "classes/recommend.classes.php";

$query = "SELECT carID, SUM(carQuality * carQuality) + SUM(carCondition * carCondition) AS rating_squared_sum
          FROM ratinglist
          WHERE username != '$targetUserId' 
          GROUP BY carID";
$result = mysqli_query($conn, $query);

$similarCars = array();
while ($row = mysqli_fetch_assoc($result)) {
    $otherCarId = $row['carID'];
    $obj=new recommend();
    $similarity = $obj->calculateCarSimilarity($conn, $targetUserId, $otherCarId); // Implement a car similarity function
    $similarCars[$otherCarId] = $similarity;
}

arsort($similarCars);


$recommendedCarId = null;
foreach ($similarCars as $carId => $similarity) {
    $query = "SELECT carID FROM ratinglist WHERE username = '$targetUserId' AND carID = '$carId'";
    $result = mysqli_query($conn, $query);

    if (!$result || mysqli_num_rows($result) === 0) {
        $recommendedCarId = $carId;
        break; 
    }
}

// if ($recommendedCarId !== null) {
//     echo "Recommended Car ID: " . $recommendedCarId;
// } else {
//     echo "No recommended car found.";
// }

mysqli_close($conn);

?>

<?php
$link=mysqli_connect("localhost","root","","carrental");
$sql="SELECT * FROM carlist where id= '$recommendedCarId'";
$info=$link->query($sql);
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
