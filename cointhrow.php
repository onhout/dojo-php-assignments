<?php
/**
 * Created by PhpStorm.
 * User: pl
 * Date: 4/13/15
 * Time: 09:39
 */
$head = 0;
$tail = 0;
echo '<h1><b><i><u>Starting the Program</u></i></b></h1>';
for ($i=1; $i<21; $i++){
    $word='';
    $num = rand(0, 1);
    if ($num == 0){
        $tail++;
        $word='tail';
    } else{
        $head++;
        $word='head';
    }
    echo '<h3><i>Attempt #'.$i.': Throwing a coin... its a '.$word.'!... Got '.$head.' heads(s) so far and '.$tail.' tails(s) so far.</i></h3>';
}
echo '<h1><b><i><u>Ending the program - thank you!</u></i></b></h1>';