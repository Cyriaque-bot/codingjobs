<?php
/*
    Step 1: Create a page that indicates how often it has been visited by the user.
    No need for forms, just the $ _SESSION array

    Step 2: Also post the date of first visit by the client.

    Step 3: Add a 'Reset' submit (in a form, of course)
    When you click on the button, the counter is reset.


 */
session_start();


if (isset($_SESSION['PagesVisited']))
    $_SESSION['PagesVisited'] += 1;
else
    $_SESSION['PagesVisited'] = 1;


echo 'Number of visits : ' . $_SESSION['PagesVisited'];


// Remove a specific key of the session :
unset($_SESSION['PagesVisited']);
// Delete the whole session : 
