<?php

// Hash a password
$password = '1234';
/*
$hash = md5($password); // Works, but dangerous
$hash2 = sha1($password);
echo $hash;
echo $hash2;
*/

// Password hash will encrypt your password usign the bcrypt() algorithm
$password = '1234';
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

echo $hashedPassword;

?>

