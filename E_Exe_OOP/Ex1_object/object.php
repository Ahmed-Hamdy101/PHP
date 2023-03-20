<?php

// class : is like blueprint or teamplat of data and a way to organize the code
class Move
{
  //properites
  public $led_step=100;
  public $speed=12;
}

$lion = new Move();
echo $lion->led_step;

?>