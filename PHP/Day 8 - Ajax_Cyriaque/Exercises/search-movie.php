<?php

require_once 'Exercicedatabase.php';

// Je definis ma connection 
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

// Je définis ma requete 

//$query = 'SELECT * FROM movies WHERE title like "%' . $search . '%"';

// Check if click on the button (to search) 

if (isset($_POST['search'])) {
    $search = $_POST['search'];

    $query = 'SELECT * FROM movies WHERE title like "%' . $search . '%"';
}

// je balance ma requete danq une variable 


$results = mysqli_query($conn, $query);

// Fetch the resul as an associative array 

$movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

// Je fais ma boucle 
//var_dump($movies);

foreach ($movies as $movie) {
    echo $movie['title'];
}
