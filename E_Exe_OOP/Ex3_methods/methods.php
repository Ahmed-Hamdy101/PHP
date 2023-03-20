<?php

// class : is like blueprint or teamplat of data and a way to organize the code
class move
{
  public $led_step;
  public $speed;
  protected $live;

  function __construct(){
  //  $this->led_step=$ls;
  }
 // methos is like function and part of class  
 function setSpeed($in)
  {
    # code...
    $this->speed=$in;
    return $this->speed;
  }
}
class Access extends move{


}
// object 
// $lion = new Move("46675755");
// echo $lion->led_step;
// echo $lion->setSpeed("100wpm");

$wc = new Move();
$isd = new Access();

?> 