<?php
/**
 * Created by PhpStorm.
 * User: pl
 * Date: 4/13/15
 * Time: 10:26
 */

$x = array(4, 6, 1, 3, 5, 7, 25);
$s =array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");

function draw_stars($arr){
    echo '<h1>Part I</h1>';
    for ($i=0; $i<count($arr); $i++){
        echo str_repeat('*',$arr[$i]). '<br>';
    }
}

function draw_stars_part2($arr){
    echo '<h1>Part II</h1>';
    for ($i=0; $i<count($arr); $i++){
        if (is_numeric($arr[$i])){
            echo str_repeat('*', $arr[$i]).'<br>';
        } else {
            echo str_repeat(strtolower($arr[$i][0]), strlen($arr[$i])).'<br>';
        }
    }
}


draw_stars($x);
draw_stars_part2($s);