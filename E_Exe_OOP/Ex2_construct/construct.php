<?php

// class : is like blueprint or teamplat of data and a way to organize the code
class Move
{
  public $led_step;
  public $speed;

  function __construct($ls){
   $this->led_step=$ls;
  }
}
// object 
$lion = new Move("46675755");
echo $lion->led_step;

?> 