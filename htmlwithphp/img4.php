<?php
/*$my_img = imagecreate( 200, 80 );
$background = imagecolorallocate( $my_img, 0, 0, 255 );
$text_color = imagecolorallocate( $my_img, 255, 255, 0 );
$line_color = imagecolorallocate( $my_img, 128, 255, 0 );
imagestring( $my_img, 4, 30, 25, "thesitewizard.com", $text_color );
imagesetthickness ( $my_img, 10 );
imageline( $my_img, 30, 45, 165, 45, $line_color );

header( "Content-type: image/png" );
imagepng( $my_img );
imagecolordeallocate( $line_color, 128, 255, 0  );
imagecolordeallocate( $text_color, 255, 255, 0 );
imagecolordeallocate( $background, 0, 0, 255  );
imagedestroy( $my_img );*/


function red(){
    return rand(0, 255);
}

function green(){
    return rand(0, 255);
}

function blue(){
    return rand(0, 255);
}

function randomstring(){
    $string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
    $randomstr = '';
    $strlength = strlen($string);
    for ($i=0; $i<10; $i++){
        $randomstr .= $string[rand(0, $strlength-1)];
    }
    return $randomstr;
}

function createimg(){
    $redtext = red();
    $greentext = green();
    $bluetext = blue();
    $redbg = red();
    $greenbg = green();
    $bluebg = blue();
    $img = imagecreate(150, 75);
    $background = imagecolorallocate($img, $redbg, $greenbg, $bluebg);
    $textcolor = imagecolorallocate($img, $redtext, $greentext, $bluetext);
    imagestring($img, 4, 30, 25,randomstring(), $textcolor);
    header("Content-type: image/png");
    imagepng($img);
    imagecolordeallocate($textcolor, $redtext, $greentext, $bluetext);
    imagecolordeallocate($background, $redbg, $greenbg, $bluebg);
    imagedestroy($img);
}

createimg();