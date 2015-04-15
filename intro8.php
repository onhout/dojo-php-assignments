<?php
/**
 * Created by PhpStorm.
 * User: pl
 * Date: 4/11/15
 * Time: 18:16
 */

$A = [2, 4, 10, 16];
function multiply($array, $num){
    for ($i=0; $i<count($array); $i++){
        $array[$i]=$array[$i]*$num;
    }
    return $array;
}

var_dump(multiply($A, 5));