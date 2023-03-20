<?php 
session_start();

if ($_SESSION['_n'] && $_SESSION['_s']) {
    session_destroy();
    header('Location:sessionp1.php');
}
?> 