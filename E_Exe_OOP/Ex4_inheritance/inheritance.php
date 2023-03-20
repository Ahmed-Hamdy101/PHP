<?php
require("../Ex3_methods/methods.php");

class Animal extends Move{
 public $type = "";
function __construct($ls , $t){
parent::__construct($ls);
$this->type=$t;
}

function getType(){
   return $this->type; 
}

}
// object

$lion = new Move("46675755");
// echo $lion->led_step;
// echo $lion->setSpeed("100wpm");
$tiger = new Animal("","CATS");
// echo $/tiger->getType();


?>