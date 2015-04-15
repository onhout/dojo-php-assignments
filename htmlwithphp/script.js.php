<?php

header('Content-type: text/javascript');
function randomequation(){
    $rand1 = rand(1, 100);
    $rand2 = rand(1, 100);
    return $rand1.' X '.$rand2.' = '. ($rand1*$rand2);
}

?>

$(document).ready(function(){
    $('#clickme').click(function(){
        alert('<?php echo randomequation()?>');
    });
});