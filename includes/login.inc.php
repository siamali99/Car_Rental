<?php

if(isset($_POST["submit"]))
{
    $uid=$_POST["uid"];
    $pwd=$_POST["pass"];


    if (isset($_POST['remember'])){
        //set up cookie
        setcookie("username", $uid, time() + (86400 * 30)); 
        setcookie("password", $pwd, time() + (86400 * 30)); 

    }
    else
    {
        if(isset($_COOKIE["username"]))
        {
            setcookie("username","");
        }
        if(isset($_COOKIE["password"]))
        {
            setcookie("password","");
        }

    }

    // echo $uid;
    include "../classes/dbconnect.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";

    $login= new loginContr($uid,$pwd);

    $login->loginUser();
    // if(isset($_POST['remember']))
    // {
    //     setcookie('username',$uid,time()+60*60*7);
    //     setcookie('password',$pwd,time()+60*60*7);

    // }


    header("location:../home.php?error=none");

}
