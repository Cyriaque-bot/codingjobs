<?php

// Connect to DB and retrieve all the cars
$conn = mysqli_connect('localhost', 'root', '', 'car_renting');
$query = "SELECT * FROM cars";
$result = mysqli_query($conn, $query);
$cars = mysqli_fetch_all($result, MYSQLI_ASSOC);