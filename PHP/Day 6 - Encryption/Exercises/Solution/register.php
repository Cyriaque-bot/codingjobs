<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
</head>
<body>

<?php require_once 'nav.html'; ?>

<?php

    // Initialize an array to handle errors
    $errors = array();

    // Initialize empty variables
    $username = '';
    $sanitizeEmail = '';
    $password = '';

    if(isset($_POST['registerBtn'])) {
        // Validations on the inputs
        $username = strip_tags(trim($_POST['username']));
        $mail = trim($_POST['email']);
        $sanitizeEmail = filter_var($mail, FILTER_SANITIZE_EMAIL);
        $password = htmlspecialchars(trim($_POST['password']));

        if(empty($username)) {
            $errors['username'] = 'Username is mandatory.';
        }

        if(empty($password)) {
            $errors['password'] = 'Password is mandatory';
        }

        if(!filter_var($sanitizeEmail, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email has to be a valid one.';
        }


        // I need to check if there are some errors
        if(count($errors) == 0) {
            // Save the user in db
            require_once 'database.php';
            $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

            // Make sure the email is not already taken
            $query = "SELECT * FROM users WHERE email = '$sanitizeEmail'";

            $resultMail = mysqli_query($conn, $query);

            // Make sure the username is not already taken
            $query = "SELECT * FROM users WHERE username = '$username'";

            $resultUsername = mysqli_query($conn, $query);

            if(mysqli_num_rows($resultMail) > 0) {
                $errors['email'] = 'Email already taken';
            } elseif(mysqli_num_rows($resultUsername) > 0) {
                $errors['username'] = 'Username already taken';
            }
            else {
                $hashPassword = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO users(username, email, password)
                VALUES ('$username', '$sanitizeEmail', '$hashPassword');";
    
                $result = mysqli_query($conn, $query);
    
                if($result)
                    echo 'You successfully registered to our website.';
                else
                    echo 'Something wrong. Please try again in a few minutes.';
            }
            
        }
        
    }

?>

<form action="" method="post">
    <input type="text" name="username" placeholder="Username" value="<?= $username; ?>">
    <?php if(isset($errors['username'])) echo $errors['username']; ?>
    <br>
    
    <input type="text" name="email" placeholder="Email" 
    value="<?= $sanitizeEmail; ?>">
    <?php if(isset($errors['email'])) echo $errors['email']; ?>
    <br>

    <input type="password" name="password" placeholder="Password" value="<?= $password; ?>">
    <?php if(isset($errors['password'])) echo $errors['password']; ?>
    <br>

    <input type="submit" name="registerBtn" value="Register">
</form>
    
</body>
</html>