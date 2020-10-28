<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        if(isset($_POST['submitBtn'])) {
            // Get info from the form (and remove white spaces)
            $mail = trim($_POST['email']);
            $password = trim($_POST['password']);

            if(file_exists('users.txt')) {

                $file_handle = fopen('users.txt', 'r');

                $message = 'You are not allow on the website';

                // Loop every line of the txt file
                while(!feof($file_handle)) {
                    // Get the current line with all user informations
                    $currentLine = fgets($file_handle);

                    // Make it an array to separate mail and password
                    $currentUser = explode(';', $currentLine);
                    
                    // Grab value of mail and password
                    $pos = strpos($currentUser[0], '=');
                    $userMail = substr($currentUser[0], $pos+1);

                    $pos = strpos($currentUser[1], '=');
                    $userPassword = substr($currentUser[1], $pos+1);

                    // Check if there is a match
                    if($mail == trim($userMail) &&
                    $password == trim($userPassword)) {
                        $message = 'Welcome to the website';
                        break;
                    }
                }

                echo $message;

            } else {
                echo 'Something went wrong.';
            }
        }

    ?>



    <form action="" method="post">
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="submitBtn" value="signin">
    </form>
</body>
</html>