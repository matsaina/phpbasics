<?php

$num = 9;


if ($num%2==0){

    echo "even number";
}else{

    echo "odd number";
echo "<br>";
}

$age = 19;
if($age >= 18 ){

    echo "can vote";
}else{

    echo "cannot vote";
    
}
echo "<br>";

$counter = 0;

while ($counter <= 100){

    echo $counter;
    $counter +=5;
}
echo "<br>";

$students= array("john", "james","sharon","jane");

foreach ($students as $student){

    echo $student;
echo "<br>";

}






