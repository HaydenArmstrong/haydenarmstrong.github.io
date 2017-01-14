<?php
    $your_text = "Helloooo Worldddd";

    $IMG = imagecreate( 250, 80 );
    $background = imagecolorallocate($IMG, 0,0,255);
    $text_color = imagecolorallocate($IMG, 255,255,0); 
    $line_color = imagecolorallocate($IMG, 128,255,0);
    imagestring( $IMG, 10, 1, 25, $your_text,  $text_color );
    imagesetthickness ( $IMG, 5 );
    imageline( $IMG, 30, 45, 165, 45, $line_color );
    header( "Content-type: image/png" );
    imagepng($IMG);
    imagecolordeallocate($IMG, $line_color );
    imagecolordeallocate($IMG, $text_color );
    imagecolordeallocate($IMG, $background );
    imagedestroy($IMG); 
    exit;   
?>