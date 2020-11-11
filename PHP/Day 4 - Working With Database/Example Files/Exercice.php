<?php

/*
1. First, you have to add an attribut to the 'movies' table.
Call this attribut 'poster', it'll save the path of the poster (image) file for each movie*/

require_once 'Exercicedatabase.php';
echo "Welcome to the freakin movie website";

//2 - Last tree movies 

$db_name = 'moviedatabase';
$db_found = mysqli_select_db($conn, $db_name);
$imgUrl = "<img src= 'C:\xampp\htdocs\PHP\codingjobs\codingjobs\PHP\Day 4 - Working With Database\Fight-Club.jpg'>";
if ($db_found) {
    echo "$db_name found !<br>";
    // Prepare my query
    $query = "select * from movies limit 3";
    //Send the query to the DB
    $results = mysqli_query($conn, $query);

    $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);
    echo '<pre>';
    var_dump($movies);
    echo '</pre>';
} else {
    echo '$db_name not found';
}


//3 - pages movies
// insert on my table of the information