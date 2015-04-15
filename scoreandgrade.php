<?php
/**
 * Created by PhpStorm.
 * User: pl
 * Date: 4/13/15
 * Time: 09:02
 */

$number = rand(50, 100);

function grade($num){
    switch($num){
        case $num < 50:
            return 'F';
        case $num >= 50 && $num < 70:
            return 'D';
        case $num >= 70 &&  $num < 80:
            return 'C';
        case $num >= 80 && $num < 90:
            return 'B';
        case $num >= 90 && $num <= 100:
            return 'A';
    }
}

echo '<h1>Your Score: '.$number.'/100</h1>';
echo '<h2>Your Grade: '.grade($number).'</h2>';