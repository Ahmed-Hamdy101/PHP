<?php

try {
    
$name ="";
// $setAr=['A'];
echo 2/0;

} catch (Exception  $e) {
echo $e->getMessage();
echo $e->getTrace();
echo $e->getFile();
echo $e->getCode();


}




?>
