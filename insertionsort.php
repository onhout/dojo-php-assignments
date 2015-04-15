<?php

//this algorithm is essentially compare the smallest number against the first index, insert it to the left, and move the rest to the right

function createarr(){
    $arr = [];
    for ($i=0; $i<2000; $i++) {
        array_push($arr, rand(0, 10000));
    }
    return $arr;
}


function insertionsort($arr){
    echo 'BEGIN-><br>'.print_r($arr, true);
    for ($i=0; $i<count($arr); $i++){
        $temp = $arr[$i];
        for ($j=$i; $arr[$j-1]>$temp && $j>0; $j--){
            $arr[$j]=$arr[$j-1];
            $arr[$j-1] = $temp;
        }
    }
    echo '<br>DONE-><br>'. print_r($arr, true);
}

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insertion Sort</title>
</head>
<body>
<h1>Insertion Sort</h1>
<?php $time_start = microtime(true)?>
<p><?php insertionsort(createarr())?></p>
<?php $time_end = microtime(true)?>
<h2>It took <?php echo $time_end-$time_start?> seconds to finish sorting the array.</h2>
</body>
</html>