<?php
// $conn=mysqli_connect("localhost","root","","carrental");

if(isset($_POST["submit"]))
{
    $username=$_POST["username"];
    $carID=$_POST["carID"];
    $carCondition=$_POST["carCondition"];
    $carQuality=$_POST["carQuality"];

    include "../classes/dbconnect.php";
    include "../classes/rating.classes.php";
    include "../classes/rating-contr.classes.php";

    $order= new ratingContr($username,$carID,$carCondition,$carQuality);

    $order->ratinglist();

    header("location:../carlist.php?error=none");



}