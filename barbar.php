<?php

include "barchartfunction.php";
header("Content-type: image/png");
imagepng(get_bar_chart());
