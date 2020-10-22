<?php

/*
    STRTOTIME function will 'convert' a date, or a string, 
    into timestamp.
    Argument must be in english.
*/

echo strtotime('now') . '<br>';
echo strtotime('19 October 1990') . '<br>';
echo strtotime('next Thursday') . '<br>';
echo strtotime('+2 days') . '<br>';