<?php
/*
    Create two pages :

    `create-session.php`
        The page will initialize a session variable 'viewed' to `true`;

    `get-viewed.php`
        The page will display a message 'You have visited the page.
        create-session ', if the 'viewed' variable is assigned.

        Otherwise, it will display the message 'You have not visited
        the create-session page '
 */



// start the session BEFORE any HTML Tags
session_start();

if (isset($_SESSION['get-view']))
    $_SESSION['get-view'] += 1;
else
    $_SESSION['get-view'] = 1;


echo 'Number of visits : ' . $_SESSION['get-view'];


// Remove a specific key of the session :
unset($_SESSION['get-view']);
// Delete the whole session : 
//session_destroy();
