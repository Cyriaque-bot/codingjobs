<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'movie_db');
$query = 'SELECT * FROM directors';

$results = mysqli_query($conn, $query);
$movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

foreach($movies as $movie) {
    echo '<option value="'. $movie['id'] .'">' . $movie['name'] . '</option>';
}