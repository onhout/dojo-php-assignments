<?php
/**
 * Created by PhpStorm.
 * User: pl
 * Date: 4/11/15
 * Time: 16:59
 */

//Create a program that prints the sum of all the values in the array "A". Array "A" should have the following values:
//[1, 2, 5, 10, 255, 3].

$A = [1, 2, 5, 10, 255, 3];
$sum = 0;
for ($i=0; $i<count($A); $i++){
    $sum = $sum + $A[$i];
}
echo 'average: '.$sum/count($A);