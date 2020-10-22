<?php

// Set the timezone
date_default_timezone_set('Europe/Luxembourg');

// Return the day's number
echo date('d') . '<br>';

// Return the month's number
echo date('m') . '<br>';

// Return the year
echo date('Y') . '<br>';

// Return the date of today
echo date('Y/m/d H:i:s') . '<br>';

// Only day and month :
echo date('l m');