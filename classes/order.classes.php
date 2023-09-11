
<?php

class order extends dbc{

    protected function setorder($username,$carID,$carName,$address,$carPrice)
    {
        $stmt=$this->connect()->prepare('INSERT INTO orderlist (username,carID,carName,address,carPrice) VALUES (?,?,?,?,?);');
        $stmt2=$this->connect()->prepare('INSERT INTO orderlist2 (username,carID,carName,address,carPrice) VALUES (?,?,?,?,?);');



        $stmt2->execute(array($username,$carID,$carName,$address,$carPrice));
        if(!$stmt->execute(array($username,$carID,$carName,$address,$carPrice))){
            $stmt=null;
            header("location: ../confirmation.php?error=stmtfailed");
            exit();

        }

        $stmt=null;
    }
    


}
