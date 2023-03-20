<?php
session_start();

$_post_user = $_POST['_name'];
$_post_pass = $_POST['_secret'];

if (isset($_POST['_sub']) && $_post_user && $_post_user ) {
    $_SESSION['_n']=$_post_user;
    $_SESSION['_s']=$_post_pass;
    header("Location:sessionp2.php");
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
<form action="<?php $_SERVER["PHP_SELF"]  ?>" method="post">
<input type="text" name="_name" id="">
<input type="password" name="_secret" id="">
<input type="submit" name="_sub" id="">
<?php var_dump($_POST['_sub'] ,$client ,$crediential);
     ?>
</form>    

</body>
</html>