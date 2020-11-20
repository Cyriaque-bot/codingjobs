<?php

function speedUnitConverter($speed, $unit) {
    
    // Check if speed is INT or FLOAT
    if(!is_int($speed) && !is_float($speed)) {
        return 'Speed should be integer or float';
    }

    // Check the unit to convert
    if($unit == 'MPH') {
        return $speed * 0.621371;
    } elseif($unit == 'KMPH') {
        return $speed / 0.621371;
    } else {
        return 'Wrong unit of speed. Choose between MPH or KMPH';
    }

}

// Use the function :
echo speedUnitConverter(1, 'MPH') . '<br>';
echo speedUnitConverter(1.5, 'KMPH') . '<br>';
// Those should return error message :
echo speedUnitConverter(1, 'RDM') . '<br>';
echo speedUnitConverter('1', 'MPH') . '<br>';
echo speedUnitConverter('e', 'MPH') . '<br>';
