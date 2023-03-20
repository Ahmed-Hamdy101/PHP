<?php
 /*
 fwrite() : $stream the error it's happen because the double quotes
 PHP Fatal error:  Uncaught TypeError: fwrite(): Argument #1 ($stream) must be of type resource, bool given in /opt/lampp/htdocs/php/course/1/Ex04_files/B0_fwrite.php:6
Stack trace:
#0 /opt/lampp/htdocs/php/course/1/Ex04_files/B0_fwrite.php(6): fwrite()
#1 {main}
 */
$file = 'world.txt';
 $handle =fopen($file,'w');
$write = fwrite($handle , 'World is hello ');
echo $write;
fclose($handle);

// $fp = fopen('world.txt', 'w');
// fwrite($fp, '1');
// fwrite($fp, '23');
// fclose($fp);
?>