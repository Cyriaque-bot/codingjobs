<?php
// Retrieve a specific movie and display it : 

// Retrieve the movie id
$id = $_GET['id'];

// Require DB configuration
require_once 'database.php';

// Connect to DB
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

$sql_query = 'SELECT * 
            FROM movies
            INNER JOIN directors 
            ON movies.director_id = directors.id
            WHERE movies.id = ' . $id;

// Execute the query
$results = mysqli_query($conn, $sql_query);

// Number of records I retrieve
$numOfResult = mysqli_num_rows($results);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Website</title>
</head>

<body>
    <?php require_once 'nav.html'; ?>

    <h2>Movie</h2>

    <?php
    if ($numOfResult == 0)
        echo 'Movie was not found';
    else {
        // Fetch the movie as associative array
        $movie = mysqli_fetch_assoc($results);
        echo 'Title : ' . $movie['title'] . '<br>';
        echo 'Views : ' . $movie['views'] . '<br>';
        echo 'Director : ' . $movie['name'] . '<br>';
        echo '<img src="images/' . $movie['poster'] . '" width="100px">';
    }
    ?>

</body>

</html>