<?php

// Grab the id from the URL 
$id = (int) $_GET['id'];

// Make sure to get a correct id (greater than 0)
if($id <= 0) {
    die('The page you are trying to access doesnt exists. <a href="/">Home page</a>');
}

// Connect to DB and retrieve the specific car.
$conn = mysqli_connect('localhost', 'root', '', 'car_renting');
$query = "SELECT * 
FROM cars
WHERE id_car = $id";

$result = mysqli_query($conn, $query);

$car = mysqli_fetch_assoc($result);