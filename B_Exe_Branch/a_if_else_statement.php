<?php
// If something is true do it
$day = Date('Y')+1;
echo $day."\n";
if ($day != '2023'){
    echo "we are in {$day} wrong year !"."\n";
}else {
    $default= '2023';
    echo "Year By Default is : {$default}";
}








?>