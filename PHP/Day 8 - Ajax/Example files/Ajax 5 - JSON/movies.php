<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'movie_db');

$query = "SELECT title FROM movies";

$result = mysqli_query($conn, $query);

$movies = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($movies, JSON_PRETTY_PRINT);

/*foreach ($movies as $movie) {
    echo $movie['title'] . '<br>';
}*/
