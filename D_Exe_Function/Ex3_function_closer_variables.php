<?php

$local = 99;

//closure --- global
//variable function
$Round = function()use($local){
echo "Hello {@$local}";
};



?>