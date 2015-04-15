<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Checker Board</title>
</head>
<body>
<?php
$blocklength = 30;
$colors = ['red', 'black']; //color array

echo '<div id="wrapper" style="width:'.($blocklength*64).'px">'; //determine width of wrapper so there wont be any clippings
createboard($blocklength, $colors);

function createblock($color){
    $block = '<div style="height: 64px; width: 64px; display:inline-block; background-color:'.$color.'"></div>';
    return $block;
}

function createboard($num, $colors){
    $offset = 0;
    for ($i=0; $i<$num; $i++){
        echo '<hr style="visibility: hidden; margin: -3px;">'; //instead of <br> giving a 3px space, this will make sure no empty space.
        for ($j=0; $j<$num; $j++){
            if ($offset == 0){
                echo createblock($colors[$offset]);//creating blocks using alternate colors in colors array
                $offset = 1;
            } else {
                echo createblock($colors[$offset]);
                $offset = 0;
            }
        }
        if ($num%2==0){ //this exists because in the case of even numbers, the loop will cause blocks to not crisscross.
            $offset = abs($offset-1); //this will make sure at the end of the loop to retain the previous color, comment this out to see what i mean
        }
    }
}
echo '</div>';
?>
</body>
</html>