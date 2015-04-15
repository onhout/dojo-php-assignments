<?php
/**
 * Created by PhpStorm.
 * User: pl
 * Date: 4/12/15
 * Time: 18:30
 */

$users['first_name'] = "Michael";
$users['last_name'] = "Choi";

function printstuff($arr)
{
    echo 'There are ' . count($arr) . ' keys in this array: ' . key($arr) . ', ';
    next($arr);
    echo key($arr) . '.<br>';

    foreach ($arr as $keys => $value) {
        echo "The value in the key '$keys' is '$value'.<br>";
    }
}

printstuff($users);