<?php

function myFirstFunction(){
 echo "welcome to my fist funstion";
} 

myFirstFunction();
// myFirstFunction();

function studentNames($fname, $lsname, $age){


echo  "<br>first name: ".$fname."<br>last name: ".$lsname."<br>age: ".$age;
}

studentNames("james", "makena",56);

studentNames(56,"makena", "james");
function multiply($a, $b){
    $c = $a * $b;
    return $c;
}
    
    echo "<br>answer is: ".multiply(1,3);
    