<?php

function calculateArea($width, $height) {
    
    $area = $width * $height;
    
    return $area;
}


$width = 5;
$height = 8;
$area = calculateArea($width, $height);


echo "The area of a rectangle with a width of $width and height of $height is $area.";
?>
