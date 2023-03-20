<?php

do 
{
    $step = 0;
    // $step = (int) $step;  
    // $step = intval($step);  
    $step++;
    if ($step>=1) {
        # code...
        $color = "red";
        echo "<p style='color:{$color}'>he stepd {{$step}} step</p>";
        $step++;
        if ($step<=2) {
            $color = "grey";
            echo "<p style='color:{$color}'>he stepd {$step} step</p>";
            $step++;
            
    }
    }
} while ($step < 1);



?>


