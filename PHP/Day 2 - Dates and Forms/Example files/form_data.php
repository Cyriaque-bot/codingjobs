<?php

// Make sure I clicked the button
if(isset($_POST['submitBtn'])) {
    
    // Save email and remove the white spaces before and after
    $email = trim($_POST['email']);
    $email = htmlspecialchars($email);

    $sanitizeEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

    if(filter_var($sanitizeEmail, FILTER_VALIDATE_EMAIL)) {
        echo 'Email valid !';
    } else {
        echo 'email not valid';
    }

}