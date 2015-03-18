<?php

class Dice{
    protected $sidor;
    
    public function __construct($sidor = 6) {
        $this->sidor = $sidor;
    }
    
    public function getSides(){
        return $this->sidor;
    }
    public function roll($times = 1){
        
        $slag = array();
        
        for($i = 0; $i<$times; $i++){
            array_push($slag, rand(1, $this->sidor));
        }//for
        return $slag;
    }//roll
}