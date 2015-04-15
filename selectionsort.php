<?php



function createarray(){
    $arr = [];
    for ($i=0; $i<2000; $i++){
        array_push($arr, rand(0, 10000));
    }
    return $arr;
}
//This sorting algorithm is essentially find the smallest number in the array, comparing to the current array, and swap it to the left.
function sorting($arr){
    for ($i=0; $i<count($arr); $i++){
        for ($j=0; $j<count($arr); $j++){
            if ($arr[$i] < $arr[$j]){
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}



?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Selection Sort</title>
</head>
<body>
    <p><?php echo print_r(createarray())?></p>
    <?php $time_start = microtime(true);?>
    <p><?php echo print_r(sorting(createarray()))?></p>
    <?php $time_end = microtime(true);
    echo '<h1>it took ' .($time_end - $time_start). 'sec to finish sorting the array.</h1>';?>

</body>
</html>