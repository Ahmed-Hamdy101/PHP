<?php

//fopen(file , option);
$file="world.txt"; 
$fSystem =fopen($file,"r");
//fread (// file is opened , length)
$read = fread($fSystem ,100);
echo $read;
fclose($fSystem);

?>