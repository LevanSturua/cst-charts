<?php

function get_line_chart() {


$chart = imagecreate(830, 520);
$background = imagecolorallocate($chart, 255, 255, 255);	
imagecolortransparent($chart);


$red = imagecolorallocate($chart, 255, 0, 0);
$green = imagecolorallocate($chart, 0, 255, 0);
$blue = imagecolorallocate($chart, 0, 0, 255);
$black = imagecolorallocate($chart, 0, 0, 0);
$gray = imagecolorallocate($chart, 100, 100, 100);

//navarotka X-ebis
imagesetthickness($chart, 0.5);
imageline($chart, 60, 40, 760, 40, $gray);   
imageline($chart, 60, 60, 760, 60, $gray);
imageline($chart, 60, 80, 760, 80, $gray);
imageline($chart, 60, 100, 760, 100, $gray);
imageline($chart, 60, 120, 760, 120, $gray);
imageline($chart, 60, 140, 760, 140, $gray);
imageline($chart, 60, 160, 760, 160, $gray);
imageline($chart, 60, 180, 760, 180, $gray);
imageline($chart, 60, 200, 760, 200, $gray);
imageline($chart, 60, 220, 760, 220, $gray);
imageline($chart, 60, 240, 760, 240, $gray);
imageline($chart, 60, 260, 760, 260, $gray);
imageline($chart, 60, 280, 760, 280, $gray);
imageline($chart, 60, 300, 760, 300, $gray);
imageline($chart, 60, 320, 760, 320, $gray);
imageline($chart, 60, 340, 760, 340, $gray);
imageline($chart, 60, 360, 760, 360, $gray);
imageline($chart, 60, 380, 760, 380, $gray);
imageline($chart, 60, 400, 760, 400, $gray);
imageline($chart, 60, 420, 760, 420, $gray);

//navarotka Y-ebis
imageline($chart, 110, 40, 110, 440, $gray);
imageline($chart, 160, 40, 160, 440, $gray);
imageline($chart, 210, 40, 210, 440, $gray);
imageline($chart, 260, 40, 260, 440, $gray);
imageline($chart, 310, 40, 310, 440, $gray);
imageline($chart, 360, 40, 360, 440, $gray);
imageline($chart, 410, 40, 410, 440, $gray);
imageline($chart, 460, 40, 460, 440, $gray);
imageline($chart, 510, 40, 510, 440, $gray);
imageline($chart, 560, 40, 560, 440, $gray);
imageline($chart, 610, 40, 610, 440, $gray);
imageline($chart, 660, 40, 660, 440, $gray);
imageline($chart, 710, 40, 710, 440, $gray);
imageline($chart, 760, 40, 760, 440, $gray);

imagesetthickness($chart, 2); //abscisa da ordinata gerdzis sisqe
//abscisa da ordinata 
imageline($chart, 60, 40, 60, 440, $black);
imageline($chart, 60, 440, 760, 440, $black);

//x xazis 7 kviris dged dayofa 
imageline($chart, 60, 440, 60, 447, $black);	
imageline($chart, 110, 440, 110, 447, $black);  //monday
imageline($chart, 210, 440, 210, 447, $black);  //tuesday
imageline($chart, 310, 440, 310, 447, $black);  //wednesday
imageline($chart, 410, 440, 410, 447, $black);  //thursday
imageline($chart, 510, 440, 510, 447, $black);  //friday
imageline($chart, 610, 440, 610, 447, $black);  //saturday
imageline($chart, 710, 440, 710, 447, $black);  //sunday
imageline($chart, 760, 440, 760, 447, $black);

imagesetthickness($chart, 4); //xazebis sisqe

//lurji line-bi
imageline($chart, 110, 370, 210, 340, $blue);
imageline($chart, 210, 340, 410, 150, $blue);
imageline($chart, 410, 150, 510, 60, $blue);
imageline($chart, 510, 60, 610, 270, $blue);
imageline($chart, 610, 270, 710, 340, $blue);

// blue filledrectangle
imagefilledrectangle($chart, 105, 365, 115, 375, $blue);
imagefilledrectangle($chart, 205, 335, 215, 345, $blue);
imagefilledrectangle($chart, 305, 240, 315, 250, $blue);
imagefilledrectangle($chart, 405, 145, 415, 155, $blue);
imagefilledrectangle($chart, 505, 55, 515, 64, $blue);
imagefilledrectangle($chart, 605, 265, 615, 275, $blue);
imagefilledrectangle($chart, 705, 335, 715, 345, $blue);

//witeli line-bi
imageline($chart, 110, 280, 210, 260, $red);
imageline($chart, 210, 260, 310, 360, $red);
imageline($chart, 310, 360, 410, 290, $red);
imageline($chart, 410, 290, 510, 170, $red);
imageline($chart, 510, 170, 610, 150, $red);
imageline($chart, 610, 150, 710, 180, $red);

// red filledrecrangle
imagefilledrectangle($chart, 105, 275, 115, 285, $red);
imagefilledrectangle($chart, 205, 255, 215, 265, $red);
imagefilledrectangle($chart, 305, 355, 315, 365, $red);
imagefilledrectangle($chart, 405, 285, 415, 295, $red);
imagefilledrectangle($chart, 505, 165, 515, 175, $red);
imagefilledrectangle($chart, 605, 145, 615, 155, $red);

//mcvane line-bi
imageline($chart, 110, 120, 210, 160, $green);
imageline($chart, 210, 160, 310, 100, $green);
imageline($chart, 310, 100, 410, 230, $green);
imageline($chart, 410, 230, 510, 280, $green);
imageline($chart, 510, 280, 610, 380, $green);
imageline($chart, 610, 380, 710, 390, $green);

// green filledrectangle
imagefilledrectangle($chart, 105, 115, 115, 125, $green);
imagefilledrectangle($chart, 205, 155, 215, 165, $green);
imagefilledrectangle($chart, 305, 95, 315, 105, $green);
imagefilledrectangle($chart, 405, 225, 415, 235, $green);
imagefilledrectangle($chart, 505, 275, 515, 285, $green);
imagefilledrectangle($chart, 605, 375, 615, 385, $green);

imagepng($chart);
imagedestroy($chart);



}

