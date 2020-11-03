<?php

$hashPassword = '$2y$10$Nw6eQ12N2svCBK8FHOMmheZ0lh9tcMiQMrDNRv8iOUel6JsOdkb9G';
$passwordToVerify = '1234';

if(password_verify($passwordToVerify, $hashPassword)) {
    echo 'Passwords are matching !';
} else {
    echo 'Wrong password';
}