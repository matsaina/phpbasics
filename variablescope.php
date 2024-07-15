<?php
// local variable - variable decalred inside a function

function addNumber($a,$b){
    $add = $a + $b;
    return $add;
}
echo addNumber(3,4);


//global  variable - declared outside the function

$number = 60;
function addNumber1($a,$b){
    global $number;
    $add = $a + $b + $number;
    return $add;
}
echo addNumber1(3,4);
