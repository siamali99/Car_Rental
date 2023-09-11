<?php
if(isset($_POST["submit"]))

{
    $username=$_POST["username"];
    $carID=$_POST["carID"];
    $carName=$_POST["carName"];
    $address=$_POST["address"];
    $carPrice=$_POST["carPrice"];

    include "../classes/dbconnect.php";
    include "../classes/order.classes.php";
    include "../classes/order-contr.classes.php";

    $order= new orderContr($username,$carID,$carName,$address,$carPrice);

    $order->ordercarlist();

    header("location:../carlist.php?error=none");



}