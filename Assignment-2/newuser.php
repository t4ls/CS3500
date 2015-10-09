<?php

$file = 'read.txt';
$appendfile = file_get_contents($file);
$appendfile .=  $_POST['username']."\n";
file_put_contents($file, $appendfile);

?>
