<?php
$email = $_REQUEST['emailme'];
$subj=$_REQUEST['subject'];
$message = $_REQUEST['message'];
$from = "192.168.1.8";
$header = "from:$from";

if(isset($_POST['submit'])) {
$filter =filter_var(mail($email,$subj,$message,$header), FILTER_SANITIZE_EMAIL);    
$vaild=filter_var(mail($email,$subj,$message,$header), FILTER_VALIDATE_EMAIL);
if($filter && $vaild) {
    echo "send succussfully!";
}else {
    echo "Message can not be retrived";
};
    # code...
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

<form action="<?php $PHP_SELF ?>" method="post">
to :<br>
<input type="email" name='emailme' id=""><br>
subject :<br>
<input type="text" name="subject" id=""> <br>
Message :<br>
<textarea name="message"  cols="30" rows="10">

</textarea><br>
<input type="submit" value="send" name="submit">
</form>
</body>
</html>