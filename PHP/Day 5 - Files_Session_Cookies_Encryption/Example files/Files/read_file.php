<?php

// Read a file (but no format style/ no control)
/*$file_content = readfile("movies.txt");

echo $file_content;

// Count number of lines in a file :
// Convert file to array
$fileToArray = file('movies.txt');
echo count($fileToArray);
*/

// Check if the file exists before anything else
if (file_exists('movies.txt')) {

    // Open the file 
    $file_handle = fopen('movies.txt', 'r');

    // Loop until you reach the end of file (eof)
    while (!feof($file_handle)) {
        // Retrieve the current line :
        $line_of_text = fgets($file_handle);
        echo $line_of_text . '<br>';
    }

    // Close the file
    fclose($file_handle);
} else {
    echo 'File doesnt exists !';
}
