<?php
/**
 * Created by PhpStorm.
 * User: pl
 * Date: 4/13/15
 * Time: 09:25
 */

$states= ['CA', 'WA', 'VA', 'UT', 'AZ'];

function createdropforloop($array){
    echo '<select>';
    for ($i=0; $i<count($array); $i++){
        echo '<option value="'.$array[$i].'">'.$array[$i].'</option>';
    }
    echo '</select>';
}

function createdropforeach($array){
    echo '<select>';
    foreach ($array as $singleitem){
        echo '<option value="'.$singleitem.'">'.$singleitem.'</option>';
    }
    echo '</select>';
}

createdropforloop($states);
createdropforeach($states);
array_push($states, 'NJ', 'NY', 'DE');
createdropforeach($states);

