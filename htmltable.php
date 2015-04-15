<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HTML Table</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<?php
$users = array(
    array('first_name' => 'Michael', 'last_name' => 'Choi'),
    array('first_name' => 'John', 'last_name' => 'Supsupin'),
    array('first_name' => 'Mark', 'last_name' => 'Guillen'),
    array('first_name' => 'KB', 'last_name' => 'Tonel'),
    array('first_name' => 'Judy', 'last_name' => 'Sakira'),
    array('first_name' => 'Joe', 'last_name' => 'No'),
    array('first_name' => 'Mary', 'last_name' => 'Apple'),
    array('first_name' => 'Jennifer', 'last_name' => 'Lopez'),
    array('first_name' => 'Mark', 'last_name' => 'Zuckerburg'),
    array('first_name' => 'Joey', 'last_name' => 'Samsung'),
    array('first_name' => 'Zhu', 'last_name' => 'Tou'),
    array('first_name' => 'Salim', 'last_name' => 'Aziz'),
    array('first_name' => 'Russel', 'last_name' => 'Peter')
);
$thead = ['User #', 'First Name', 'Last Name', 'Full Name', 'Full name in upper case', 'Length of fullname (without space)'];
?>
<h1>FOREACH LOOP</h1>
<table class="table table-bordered text-center">
    <thead>
<?php foreach($thead as $head){
    echo'<td><strong>'.$head.'</strong></td>';
}?>
    </thead>
<?php
    $x=1;
    foreach($users as $rows){
        if ($x%5 == 0){
            echo '<tr class="danger">';
        } else {
            echo '<tr>';
        }
        echo '<td>'.$x++.'</td>';
        foreach($rows as $key => $value){
            echo '<td>'. $value .'</td>';
        }
        echo '<td>'.$rows['first_name'].' '.$rows['last_name'].'</td>'.
             '<td>'.strtoupper($rows['first_name']).' '.strtoupper($rows['last_name']).'</td>'.
             '<td>';
        echo strlen($rows['first_name']) + strlen($rows['last_name']).
             '</td>'.
             '</tr>';
    }

?>
</table>

<h1>FOR LOOP</h1>
<table class="table table-bordered text-center">
    <thead>
<?php
$y=1;
    for($i=0; $i<count($thead); $i++) {
        echo '<td><strong>' . $thead[$i] . '</strong></td>';
    }
?>
    </thead>
<?php
    for ($i=0; $i<count($users); $i++){
        if ($y%5==0){
            echo '<tr class="danger">';
        } else{
            echo '<tr>';
        }
        echo '<td>'.$y++.'</td>'.
             '<td>'.$users[$i]['first_name'].'</td>'.
             '<td>'.$users[$i]['last_name'].'</td>'.
             '<td>'.$users[$i]['first_name'].' '.$users[$i]['last_name'].'</td>'.
             '<td>'.strtoupper($users[$i]['first_name']).' '.strtoupper($users[$i]['last_name'].'</td>').'</td><td>';
        echo strlen($users[$i]['first_name']) + strlen($users[$i]['last_name']).
             '</td>'.
             '</tr>';
        echo '</tr>';
    }
?>
</table>
</body>
</html>