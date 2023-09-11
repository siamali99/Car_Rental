<?php

class showcar extends dbc{

    protected function showcar()
    {
        $stmt=$this->connect()->prepare('SELECT userName FROM users WHERE carID = ?;');

        if(!$stmt->execute(array("car1"))){
            $stmt=null;
            header("location: ../add.php?error=stmtfailed");
            exit();

        }
        $user=$stmt->fetchAll(PDO::FETCH_ASSOC);
        echo $user["userName";]
    }
    


}
