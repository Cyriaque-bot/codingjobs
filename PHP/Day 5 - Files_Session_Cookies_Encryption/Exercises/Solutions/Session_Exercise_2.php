<?php

// start the session BEFORE any HTML Tags
session_start();

// Set the timezone
date_default_timezone_set('Europe/Luxembourg');

if(isset($_POST['submitBtn'])) {
    unset($_SESSION['page_view']);
}


if(isset($_SESSION['page_view']))
    $_SESSION['page_view'] += 1;
else {
    $_SESSION['page_view'] = 1;
    $_SESSION['first_visit'] = date('Y-m-d H:i:s');
}

echo 'Number of visits : ' . $_SESSION['page_view'] . '<br>';
echo 'Date of first visit : ' . $_SESSION['first_visit'];

?>

<form action="" method="post">
    <input type="submit" name="submitBtn" value="RESET">
</form>
