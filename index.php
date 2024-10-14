<?php

$numberCasual = [];

function randNumber() {
    
    $length = 15
    for ($i=0; $i < $length ; $i++) { 
        
        $numberRandom = rand(0, 100);
        if (in_array($numberRandom , $numberCasual) ) {
            $numberCasual[] = $numberRandom ;
        }
    }
}

randNumber();

var_dump($numberCasual);