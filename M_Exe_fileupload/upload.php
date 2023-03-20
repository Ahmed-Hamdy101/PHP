<?php
// dirname + FILE its get currentFile of Dir or you working on
$dir = dirname(__FILE__)."/upload/";

$name = $_FILES['userfile']['name']; //get file name
echo '<pre>';
if ($_POST['submit']) {
    // move upload imagea to uploaded  ( "FILE,tmp|$dir.$name");
    move_uploaded_file($_FILES['userfile']['tmp_name'], $dir.$name);
    echo "<br>";
    echo " File is valid, and was successfully uploaded.\n";
} else {
    echo "\nPossible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fileupload</title>
</head>
<body><!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="<?php $_SERVER['']?>" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="userfile" type="file" />
    <input type="submit" name="submit" value="Send File" />
</form>

</body>
</html>