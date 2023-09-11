<?php

class addcarContr extends addcar{
    private $carID;
    private $carName;
    private $carCondition;
    private $carQuality;
    private $carPrice;
    private $carSeats;
    private $file;


    public function __construct($carID,$carName,$carCondition,$carQuality,$carPrice,$carSeats,$file){
        $this->carID=$carID;
        $this->carName=$carName;
        $this->carCondition=$carCondition;
        $this->carQuality=$carQuality;
        $this->carPrice=$carPrice;
        $this->carSeats=$carSeats;
        $this->file=$file;
    }
    public function addcarlist(){

        $this->setcar($this->carID,$this->carName,$this->carCondition, $this->carQuality,$this->carPrice,$this->carSeats, $this->file);
    }
    

}
