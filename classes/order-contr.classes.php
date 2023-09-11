<?php

class orderContr extends order{
    private $username;
    private $carID;
    private $carName;
    private $address; 
    private $carPrice;




    public function __construct($username,$carID,$carName,$address,$carPrice){
        $this->username=$username;       
        $this->carID=$carID;
        $this->carName=$carName;
        $this->address=$address;
        $this->carPrice=$carPrice;

    }
    public function ordercarlist(){

        $this->setorder($this->username,$this->carID,$this->carName,$this->address,$this->carPrice);
    }
    

}
