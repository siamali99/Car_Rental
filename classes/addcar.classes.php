<?php

class addcar extends dbc{

    protected function setcar($carID,$carName,$carCondition,$carQuality,$carPrice,$carSeats,$file)
    {
        $stmt=$this->connect()->prepare('INSERT INTO carlist (carID,carName,carCondition,carQuality,carPrice,carSeats,file) VALUES (?,?,?,?,?,?,?);');


        if(!$stmt->execute(array($carID,$carName,$carCondition,$carQuality,$carPrice,$carSeats,$file))){
            $stmt=null;
            header("location: ../signup.php?error=stmtfailed");
            exit();

        }

        $stmt=null;
    }
    


}
