<?php
//Hash a password 
//$password = '1234';

//$hash = md5($password)

// password hash will encrypt your passeword using the bctrypt() algorithm

$password = '12345';
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
echo $hashedPassword;
