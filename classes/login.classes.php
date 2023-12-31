<?php

class Login extends dbc{

    protected function getUser($uid,$pwd)
    {
        
        $stmt=$this->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid = ?;');


        if(!$stmt->execute(array($uid))){
            $stmt=null;
            header("location: ../signup.php?error=stmtfailed");
            exit();

        }
        if($stmt->rowCount()==0)
        {
            $stmt=null;
            header("location:../login.php?error=usernotfound");
            // echo "<script>alert('user not found');<?script>";
            exit();
        }
        $pwdHashed=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd=password_verify($pwd,$pwdHashed[0]["users_pwd"]);

        if($checkPwd==false)
        {
            $stmt=null;
            header("location:../login.php?error=wrongpassword");
            exit();
        }
        elseif($checkPwd==true)
        {
            $stmt=$this->connect()->prepare('SELECT * FROM users WHERE users_uid = ? AND users_pwd = ?;');
            if(!$stmt->execute(array($uid,$pwdHashed[0]["users_pwd"]))){
                $stmt=null;
                header("location: ../signup.php?error=stmtfailed");
                exit();
    
            }
            if($stmt->rowCount()==0)
            {
                $stmt=null;
                header("location:../login.php?error=usernotfound");
                exit();
            }

            $user=$stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"]=$user[0]["users_id"];
            $_SESSION["useruid"]=$user[0]["users_uid"];


            
        }
        $stmt=null;
    }
    


}
