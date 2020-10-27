<?php
require_once 'Exercicedatabase.php';
$db_name = 'moviedatabase';
$db_found = mysqli_select_db($conn, $db_name);
$imgUrl = "<img src= 'C:\xampp\htdocs\PHP\codingjobs\codingjobs\PHP\Day 4 - Working With Database\Fight-Club.jpg'>";
if ($db_found) {
    echo "$db_name found !<br>";
    // Prepare my query
    $query = "select * from movies limit 3";
    //Send the query to the DB


    $results = mysqli_query($conn, $query);

    while ($db_record = mysqli_fetch_assoc($results)) {
        echo '<hr>';
        echo $db_record['title'] . '<br>';
        echo $db_record['yearofrelease'] . '<br>';
        echo $db_record['poster'] . '<br>';
    }

    //   $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);
    //   echo '<pre>';
    //  var_dump($movies);
    //  echo '</pre>';
    //} else {
    // echo '$db_name not found';
}
