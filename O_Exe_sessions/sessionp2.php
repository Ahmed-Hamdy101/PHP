<?php

session_start();

echo "username : ".$_SESSION['_n'] ." <br> password: ".$_SESSION['_s'] ;
echo " <a href='sessionp3.php'> Logout</a>";
?>