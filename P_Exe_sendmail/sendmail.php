 <?php
$tosend = $_POST['tosend'];
$subj=$_POST['subject'];
$message = $_POST['message'];
$from = "192.168.1.6";
$header = "from:$from";

    
if(isset($_POST['submit'])) {
    mail($tosend,$subj,$message,$header);
    echo "send succussfully!";
}else {
    echo "error";
};
    # code...



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

<form action="<?php $PHP_SELF ?>" method="post">
to :<br>
<input type="text" name='tosend' id=""><br>
subject :<br>
<input type="text" name="subject" id=""> <br>
Message :<br>
<textarea name="message"  cols="30" rows="10">

</textarea><br>
<input type="submit" value="send" name="submit">
</form>
</body>
</html>