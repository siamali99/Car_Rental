
<?php

class rating extends dbc{

    protected function setrating($username,$carID,$carCondition,$carQuality)
    {
        $stmt=$this->connect()->prepare('INSERT INTO ratinglist (username,carID,carCondition,carQuality) VALUES (?,?,?,?);');


        if(!$stmt->execute(array($username,$carID,$carCondition,$carQuality))){
            $stmt=null;
            header("location: ../carlist.php?error=stmtfailed");
            exit();

        }
        $stmt2=$this->connect()->prepare("DELETE FROM orderlist2 WHERE username = '$username'");
        // $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt2->execute();

        $stmt=null;
        $stmt2=null;

    }
    


}
