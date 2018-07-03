<?php

function pickRandomName(){
       
    $names = loadNames();
    $numNames = sizeof($names);
         
    $index = randomNumber($numNames);
    
    return $names[$index];
}

function randomNumber($max){
    $num = rand(0, $max);
    return $num;
}

?>