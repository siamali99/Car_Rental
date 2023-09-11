<?php

class ratingContr extends rating{
    private $username;
    private $carID;
    private $carCondition;
    private $carQuality; 


    public function __construct($username,$carID,$carCondition,$carQuality){
        $this->username=$username;       
        $this->carID=$carID;
        $this->carCondition=$carCondition;
        $this->carQuality=$carQuality;


    }
    public function ratinglist(){

        $this->setrating($this->username,$this->carID,$this->carCondition,$this->carQuality);
    }
    

}
