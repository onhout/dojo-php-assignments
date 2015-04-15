<?php
/**
 * Created by PhpStorm.
 * User: pl
 * Date: 4/13/15
 * Time: 10:00
 */

$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02);

function get_max_and_min($samp){
    $max = 0;
    for ($i=0; $i<count($samp); $i++){
        if ($samp[$i]>$max){
            $max = $samp[$i];
        }
    }
    $min = $max;
    for ($i=0; $i<count($samp); $i++){
        if ($samp[$i]<$min){
            $min = $samp[$i];
        }
    }
    return ['max'=>$max, 'min'=>$min];

}

var_dump(get_max_and_min($sample));
