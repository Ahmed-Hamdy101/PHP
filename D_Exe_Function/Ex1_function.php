<?php
global $keyword;


// void
// function getName($name)
// {
//  echo "<div style='height:300px; width: 500px;padding:14px;color:green;background:black;text-align:center'> 
 
//  <p style='margin:55px;padding:30px;'> $name </p> 
 
//  </div>";
// }

// return  --  ARG 
function get_Name($name)
{
  return  "<div style='height:300px; width: 500px;padding:14px;color:green;background:black;text-align:center'> 
  <p style='margin:55px;padding:30px;'> $name </p>   
  </div>";
 }

$local = 99;

//closure --- global
//variable function
$Round = function()use($local){
echo "Hello {@$local}";
};


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
<form action="#" method="post">
      <fieldset> 
      <label> Name </label>
      <input type="text" name="name">
      <input type="submit" name="save">
      </fieldset>
        <?php  $name = $_POST['name']; echo get_Name($name); ?>
    </form>
  
</body>
</html>