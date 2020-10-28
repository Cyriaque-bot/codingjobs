<?php

/*
		Create a script that saves in the last_access.log file the timestamp of this time (now).

		We will replace the old timestamp.

		Choose the right setting to open the file
	 */

//  Create the file 
//fopen('books.txt', 'w');
$logfile = fopen('last_access.log', 'w');;
$da = strtotime('now');
fwrite($logfile, $da);


//fwrite(last_access . log, 'test');

	 //echo date('Y/m/d H:i:s')