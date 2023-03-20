<?php

class CallStack{

static $halflife = 0.5;

function __construct(){
// self::halflife =$same; error 
}

function getStatic(){
return self::halflife;
}

}
$obj = new CallStack();
// echo $obj->halflife;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo "<pre>".$obj::$halflife."<br>";
echo CallStack::$halflife;
// echo CallStack::getStatic();
 ?>
<script>
  document.write('<script src="http://' + (location.host || '127.0.0.1').split(':')[0] +
  ':80/livereload.js?snipver=1"></' + 'script>')
</script>
</body>
</html>