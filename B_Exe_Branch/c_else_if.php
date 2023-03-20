<?php

$getIncrease = 122;

if ($getIncrease++ == $getIncrease+1) {
    var_dump("true");
    $getIncrease++;
}
elseif ($getIncrease > 122) {
    echo " the number get increased !"."{$getIncrease}"."\n";
}else {
    echo " the numer status is 0 "."{$getIncrease}";
}



?>