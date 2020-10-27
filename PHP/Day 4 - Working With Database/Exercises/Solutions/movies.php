<?php
// Retrieve all movies and display them : 

// Require DB configuration
require_once 'database.php';

// Connect to DB
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

$sql_query = 'SELECT * 
            FROM movies';

// Execute the query
$results = mysqli_query($conn, $sql_query);

// Fetch results as associative array
$movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

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

    <h2>Movies list</h2>

    <?php foreach ($movies as $movie) : ?>
        <hr>
        <p>
            <strong>Title : </strong>
            
            <a href="movie.php?id=<?= $movie['id']; ?>">
                <?= $movie['title']; ?>
            </a>
        </p>
        <p>
            <strong>Views : </strong>
            <?= $movie['views']; ?>
        </p>

        <img src="images/<?= $movie['poster'] ?>" width="100px">
    <?php endforeach; ?>

</body>

</html>