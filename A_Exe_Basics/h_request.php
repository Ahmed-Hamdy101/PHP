<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>

<form action="#" method="post">
<input type="email" name="email" id="">
<input type="text" name="username" id="">
<input type="submit" name="submit" value="Eval" id="">
</form>

</body>
</html>

<?php

if(isset($_REQUEST['submit'])) {
echo "email:".$_REQUEST['email']."<br>"."password:".$_REQUEST['text']."\n";
}
?>
