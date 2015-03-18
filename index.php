<?php
    require 'Dice.php';
    
    $dice1 = new Dice(20);
    $dice2 = new Dice(8);
    
    
//    echo $dice1->getSides();
    
    $array = $dice1->roll(5);
    var_dump($array);
    
    
    
