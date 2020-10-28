<?php

// Open the file
// w: write mode (override the file)
// a: append (doesnt override)
$file_handle = fopen('books.txt', 'w');

// Write into the file
fwrite($file_handle, "THE CONTENT OF MY FILE IS HERE.\n");
fwrite($file_handle, "AGAIN LINE\n");