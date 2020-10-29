<?php

session_start();

// Check if we need to logout
if(isset($_POST['logoutBtn'])) {
    unset($_SESSION['username']);
    header('Location: login.php');
}

// Check if user logged in (username has to exist and not be empty)
// But also check for last activity
if(isset($_SESSION['username']) 
&& !empty($_SESSION['username']) 
&& (strtotime('now') - $_SESSION['last_activity']) < 10) {
    echo 'Welcome, ' . $_SESSION['username'];
} else {
    echo 'You need to login';
}

?>

<form method="post">
    <input type="submit" name="logoutBtn" value="LOG OUT">
</form>