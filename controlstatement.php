<?php
//   if else statements 
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


// while loop 
$counter = 0;
while ($counter <= 100){
    echo $counter;
    $counter +=5;
}
echo "<br>";


// for each loop 
$students= array("john", "james","sharon","jane");
foreach ($students as $student){

    echo $student;
echo "<br>";

}


// for loop 
for($i = 10; $i>=0; $i--)
{
echo $i;
echo "<br>";

}

//   do while loop 
$b = 0;
do {
echo $b;
    $b++;
echo "<br>";

}while($b < 6);

// Add numbers in an array 
$sum = 0;
$numarrs = array(10,20,5,5,20,10);
foreach ($numarrs as $arr){
$sum  = $sum + $arr;
}
echo "total sum-".$sum;