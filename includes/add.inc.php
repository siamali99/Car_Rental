<?php
// $conn=mysqli_connect("localhost","root","","carrental");

if(isset($_POST["submit"]))
{
    $carID=$_POST["carID"];
    $carName=$_POST["carName"];
    $carCondition=$_POST["carCondition"];
    $carQuality=$_POST["carQuality"];
    $carPrice=$_POST["carPrice"];
    $carSeats=$_POST["carSeats"];


    $file=$_FILES['image']['name'];
    $filesize=$_FILES["image"]["size"];
    $tmpName=$_FILES["image"]["tmp_name"];
    $validImageExtension=['jpg','jpeg','png'];
    $imageExtension=explode('.',$file);
    $imageExtension=strtolower(end($imageExtension));

    $newImageName=uniqid();
    $newImageName .='.' . $imageExtension;

    move_uploaded_file($tmpName,'../image/'.$newImageName);
    
    include "../classes/dbconnect.php";
    include "../classes/addcar.classes.php";
    include "../classes/addcar-contr.classes.php";

    $addcar= new addcarContr($carID,$carName,$carCondition,$carQuality,$carPrice,$carSeats,$newImageName);
    $addcar->addcarlist();

    header("location:../add.php?error=none");

}