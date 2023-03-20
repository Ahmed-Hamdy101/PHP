<?php
require('interface.php');

class Method implements Drink{


public function Go(){

echo "he is ......Move";
}

} 
$action = new Method();

$action->Go();


?>