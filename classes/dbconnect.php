<?php
class dbc{
    protected function connect(){
        try{
            $username="root";
            $password="";
            $dbh=new PDO('mysql:host=localhost;dbname=carrental',$username,$password);
            return $dbh;
        }
        catch(PDOException $e)
        {
            echo "Error :".$e->getMessage()."<br/>";
            die();
        }
    }
}

