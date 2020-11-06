<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'movie_db');
$query = 'SELECT * FROM directors';

$results = mysqli_query($conn, $query);
$directors = mysqli_fetch_all($results, MYSQLI_ASSOC);

echo json_encode($directors, JSON_PRETTY_PRINT);