<?php

// Validations
if(empty($_POST['firstname'])) {
    echo 'Firstname is mandatory';
} else {
    $conn = mysqli_connect('localhost', 'root', 'root', 'movie_db');

    $name = $_POST['firstname'];

    $query = "INSERT INTO directors(name)
    VALUES('$name')";

    $result = mysqli_query($conn, $query);

    if($result)
        echo 'Director successfully inserted';
    else
        echo 'Something went wrong. Try again in a few minutes.';
}   