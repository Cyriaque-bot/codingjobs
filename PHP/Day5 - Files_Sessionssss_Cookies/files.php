<?php
// read a file (but no format style/no contr)
/* file_content;*/
$x = "";
file_content('movies.txt');

// Open the file 
$file_handle = fopen('movies.txt', 'r');


// unction file exist
if (file_exists('movies.txt')) {

    // loop until you reach the end of the file (eof)
    while (!feof($file_handle)) {
        // retrieve the current line 
        $line_of_text = fgets($file_handle);
        echo $line_of_text;
    }
}

// Retrieve the current  line :
// feof($file_handle)
$line_of_text = fgets($file_handle);


// Close the file 

fclose($file_handle);
