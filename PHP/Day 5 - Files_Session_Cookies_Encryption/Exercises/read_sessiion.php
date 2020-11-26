<?php

// start the session always 
// always start the session after html

session_start();

if (isset($_SESSION['page_view']))
    $_SESSION['page_view'] += 1;
else
    $_SESSION['page_view'] = 1;

echo 'Number of visits :' . $_SESSION['page_view'];


// Remove a specific key of the session
unset($_SESSION)

// Delete a session 

session_destroy();
