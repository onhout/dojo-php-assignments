<?php
/**
 * Created by PhpStorm.
 * User: pl
 * Date: 4/11/15
 * Time: 18:24
 */

$A = [2, 3, 'hello'];

function print_list($array){
    echo '<ul>';
    for ($i = 0; $i<count($array); $i++){
        echo '<li>'.$array[$i].'</li>';
    }
    echo'</ul>';
}
print_list($A);