<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'movie_db');
$query = 'SELECT * FROM movies';

$results = mysqli_query($conn, $query);
$movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

echo json_encode($movies, JSON_PRETTY_PRINT);