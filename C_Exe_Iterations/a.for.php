<?php
// for loop
$star ="*"; 
for($i=0; $i <=5 ; $i++) { 
    echo "i:{$i}";
    for ($j=0; $j <=$i ; $j++) { 
        echo "J:{$j}".$star;
    }
    echo"<br>";
}
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
    <h1>hello</h1>
    <?php echo $star;?> 
</body>
</html>