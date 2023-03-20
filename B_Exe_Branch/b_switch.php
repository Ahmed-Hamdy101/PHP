<?php
$Months= array('0'=>'Jan','1'=>'Feb','2'=>'Mar','3'=>'April');
switch ($Months) {
    case substr( $Months['0'],0,3) == substr(Date('M'),0,3):
        echo Date('M')."\n";
        break;
    
    default:
        echo 'Error Follwing Code at Line 5 !'."\n";
        break;
}

?>