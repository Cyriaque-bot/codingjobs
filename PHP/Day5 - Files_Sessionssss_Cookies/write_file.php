<?php

// Open the file 

$file_handle = fopen('books.txt', 'w');

// write into the file

// w:write mode 
//a : append
$file_handle = fopen('books.txt', 'w');

// Write into the file 

fwrite($file_handle, "the content of my file is here.\r");
fwrite($file_handle, "AGAIN LINE\r");


// copy a file 
copy('movies.txt', 'MyCopy.txt');

// Delete a file 
unlink('movies.txt');


fwrite($file_handle, "the content of my file is here.\r");
