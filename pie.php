<?php

include "chartfunctions.php";

header("Content-type: image/png");
imagepng(get_pie_chart());
