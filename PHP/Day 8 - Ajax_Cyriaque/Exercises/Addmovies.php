<?php


if (empty($_POST['movie'])) {

    echo 'movie is mandatory';
} else {
    $conn = mysqli_connect('localhost', 'root', '', 'movie_db');

    $name = $_POST['movie'];

    $query = "INSERT INTO movies(title) VALUES('$name')";

    $result = mysqli_query($conn, $query);

    if ($result)

        echo 'movie successfully inserted';
    else
        echo  'Something went wrong.Try again in a few minutes.';
}
