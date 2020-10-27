<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Website</title>
</head>

<body>
    <?php require_once 'nav.html'; ?>

    <h2>Welcome to my movie website</h2>

    <?php
    // Retrieve last three movies and display them : 

    // Require DB configuration
    require_once 'database.php';

    // Connect to DB
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

    $sql_query = 'SELECT * 
        FROM movies 
        ORDER BY views DESC 
        LIMIT 3';

    // Execute the query
    $results = mysqli_query($conn, $sql_query);

    // Fetch results as associative array
    $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

    foreach ($movies as $movie) {
        echo '<hr>';
        echo 'Title : ' . $movie['title'] . '<br>';
        echo 'Views : ' . $movie['views'] . '<br>';
        echo '<img src="images/' . $movie['poster'] . '" width="100px">';
    }

    // Close the connection to the DB
    mysqli_close($conn);

    ?>

</body>

</html>