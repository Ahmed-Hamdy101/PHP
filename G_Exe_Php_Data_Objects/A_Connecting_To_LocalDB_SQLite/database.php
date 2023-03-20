<?php
//Remove flight 
ini_set('display_errors','On');

/* Connect to PDO */
// $db=new PDO('sqlite:./db/app.db'); // conection with db using PDO object
try{
   
   $db_exe = new PDO('sqlite:./var/www/html/php/PHP/6_Exec_PDO/A_PDO_LocalDB/db/app.db');
   $db_exe->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//error reporting ....
   exit;
}catch(Exception $e){
    //echo 'error2';	
    echo $e->getMessage();	
    die();	
    }
?>