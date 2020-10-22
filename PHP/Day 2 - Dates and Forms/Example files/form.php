<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form Example</title>
</head>
<body>

<?php
    ini_set('display_errors', '1');
        /*
            When the server receives data from a Form,
            he save those data into a superglobale variable.

            Those variables are available on every PHP Script :
                $_GET
                $_POST
            
            $_GET : it will send directly data to server
            using URL
            Example: page.php?firstname=simon
            page.php

            $_POST : will send data without modifying URL
            Use post when informations are sensitive.
        */
        var_dump($_GET);

        //var_dump($_GET);
        $firstName = '';

        // Make sure I clicked the button
        if(isset($_GET['submitBtn'])) {
            
            $firstName = $_GET['firstname'];
            // Firstname must not be empty
            if(empty($_GET['email'])) {
                echo 'Email is mandatory !!!!!!';
            } else {
                echo '<h2>Welcome, ' . $_GET['firstname'] . '</h2>';
            }

        }

    ?>

    <form action="" method="get">
        <input type="text" name="firstname" placeholder="first name" value='<?php echo $firstName; ?>'><br>
        <input type="text" name="email" placeholder="mail"><br>
        <input type="password" name="password" placeholder="password"><br>

        <input type="submit" name="submitBtn" value="SEND">
    </form>
    
</body>
</html>