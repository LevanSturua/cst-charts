<?php
 header("Content-type: image/png");

$piechart = imagecreatetruecolor(500, 500);   //naxatis shekmna

//ferebi 
$color1 = imagecolorallocate($piechart, 255, 0, 0);
$color2 = imagecolorallocate($piechart, 0, 255, 0);
$color3 = imagecolorallocate($piechart, 0, 0, 255);  

//imagefilledarc - imagefilledarc — Draw a partial arc and fill it
//pie chart-ebis asagebad

 imagefilledarc($piechart, 250, 250, 500, 500, 0, 200, $color1, IMG_ARC_PIE);
 imagefilledarc($piechart, 250, 250, 500, 500, 200, 300, $color2, IMG_ARC_PIE);
 imagefilledarc($piechart, 250, 250, 500, 500, 300, 500, $color3, IMG_ARC_PIE );
 
 imagepng($piechart);
?>