<?php

include "linechartfunction.php";

header("Content-type: image/jpg");
imagepng(get_line_chart());

