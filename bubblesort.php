<?php
/**
 * Created by PhpStorm.
 * User: pl
 * Date: 4/15/15
 * Time: 14:16
 */
function createarray(){
    $arr = [];
    for ($i=0; $i<2000; $i++){
        array_push($arr, rand(0, 1000));
    }
    return $arr;
}

function bubblesort($arr){
    echo '<b>Beginning array:</b><p>'. print_r($arr, true). '</p>';
    for ($l = (count($arr)-1); $l>0; $l--) {
        for ($i = 0; $i < (count($arr) - 1); $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
            }
        }
    }
    return $arr;
}

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bubble Sort</title>
</head>
<body>
<h1>Bubble Sort</h1>
<?php $time_start = microtime(true);?>
<p><?php echo '<b>Finished sorting:</b><p>'.print_r(bubblesort(createarray()), true).'</p>';?></p>
<?php $time_end = microtime(true);?>
<h2>Time to finish sorting the array: <?php echo ($time_end-$time_start)?>seconds.</h2>
</body>
</html>