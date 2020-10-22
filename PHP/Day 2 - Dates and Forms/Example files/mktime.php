<?php

// Convert a date into timestamp
$timeStamp = mktime(19, 00, 30, 04, 22, 2019);

// Convert a timestamp into date
echo date('Y-m-d H:i:s', $timeStamp);