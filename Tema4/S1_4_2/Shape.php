<?php

class Shape {
    
    protected $ample;
    protected $alt;

    public function __construct($ample, $alt){
        $this->ample = $ample;
        $this->alt = $alt;
    }

    public function getAmple(){
        return $this-> ample;
    }

    public function getAlt(){
        return $this-> alt;
    }

    public function setAmple($ample){
        $this-> ample = $ample;
    }

    public function setAlt($alt){
        $this-> alt = $alt;
    }

    public function area(){
        return 0;
    }

   

}