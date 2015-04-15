<?php

//Create a program that prints the average of the values in the array called "A". Array "A" should have the following values:
$A = [1, 2, 5, 10, 255, 3];
$sum = 0;
for ($i=0; $i<count($A); $i++){
    $sum = $sum + $A[$i];
}
echo 'average: '.$sum/count($A);