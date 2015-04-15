<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<table class="table table-bordered text-center">
    <thead>
<?php for($i=0; $i<=9; $i++){
    echo'<td><strong>'.$i.'</strong></td>';
}?>
    </thead>
<?php
for($i=1; $i<=9; $i++){
    echo '<tr>';
    echo '<td><strong>'.$i.'</strong></td>';
        for($j=1; $j<=9; $j++){
            echo '<td>'. $i*$j .'</td>';
        }
    echo '</tr>';
}
?>
</table>
</body>
</html>