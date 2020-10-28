<?php

// start the session BEFORE any HTML Tags
session_start();

if(isset($_SESSION['page_view']))
    $_SESSION['page_view'] += 1;
else
    $_SESSION['page_view'] = 1;


echo 'Number of visits : ' . $_SESSION['page_view'];


// Remove a specific key of the session :
unset($_SESSION['page_view']);
// Delete the whole session : 
session_destroy();