<?php


// DECLARE THE FUNCTION :
function speedUnitConverter($speed, $unit) {
    // Initialize 
    $convertedSpeed = 0;

    // Check if speed is int or float
    if(!is_int($speed) && !is_float($speed))
        return 'Speed should be integer or float<br>';

    // Check the unit to convert
    if($unit == 'MPH') {
        $convertedSpeed = $speed * 0.621371;
        return $speed . ' KMPH = ' . $convertedSpeed . ' MPH<br>';
    } else if($unit == 'KMPH') {
        $convertedSpeed = $speed / 0.621371;
        return $speed . ' MPH = ' . $convertedSpeed . ' KMPH<br>';
    } else {
        return 'Wrong unit of speed. Choose between MPH and KMPH<br>';
    }

}


// USE THE FUNCTION :
echo speedUnitConverter(1, 'MPH');
echo speedUnitConverter(1.5, 'KMPH');
// Those should return error message :
echo speedUnitConverter(1, 'RDM');
echo speedUnitConverter("1", 'MPH');
echo speedUnitConverter("e", 'MPH');
