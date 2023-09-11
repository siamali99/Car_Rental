<?php

if(isset($_POST["submit"]))
{
    $uid=$_POST["uid"];
    $email=$_POST["email"];
    $pwd=$_POST["pass"];
    $pwdRepeat=$_POST["conpass"];


    // echo $uid;
    include "../classes/dbconnect.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    $signup= new SignupContr($uid,$pwd,$pwdRepeat,$email);

    $signup->signupUser();

    header("location:../login.php?error=none");

}
