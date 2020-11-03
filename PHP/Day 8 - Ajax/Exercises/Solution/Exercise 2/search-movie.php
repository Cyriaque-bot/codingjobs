<?php

if (!empty($_POST) && isset($_POST['search'])) {
    $mySearch = trim($_POST['search']);

    // Search into the DB
    require_once 'database.php';

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    $query = "SELECT *
    FROM movies
    WHERE title LIKE '%$mySearch%'";

    // Execute query
    $results = mysqli_query($conn, $query);

    if (mysqli_num_rows($results) == 0) {
        echo 'No movies matching your criteria';
    } else {
        // Retrieve movies
        $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

        foreach ($movies as $movie) {
            echo '<p><strong>Title : </strong>' . $movie['title'] . '</p>';
            echo '<p><strong>Views : </strong>' . $movie['views'] . '</p>';
            echo '<img src="images/' . $movie['poster'] . '">';
            echo '<hr>';
        }
    }
}
