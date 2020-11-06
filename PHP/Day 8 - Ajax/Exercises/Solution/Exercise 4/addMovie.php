<?php

// Array to handle errors
$errors = array();
// The answer to return (in json)
$response = array();

// Do something only if I get data
if (!empty($_POST)) {
  // Basics validations
  if (empty($_POST['title']))
    $errors['title'] = 'Title is mandatory';

  if (empty($_POST['views']))
    $errors['views'] = 'Views is mandatory';

  if (count($errors) == 0) {
    $conn = mysqli_connect('localhost', 'root', 'root', 'movie_db');

    $query = "INSERT INTO movies(title, views, director_id)
    VALUES('" . $_POST['title'] . "', '" . $_POST['views']  ."', " . $_POST['directors'] . ")";

    // execute the query
    $result_query = mysqli_query($conn, $query);

    if ($result_query) {
      $response['status'] = 'success';
      $response['message'] = 'Movie successfully added!';
    } 
    else{
      $response['status'] = 'error';
      $response['message'] = 'Something went wrong. Try again in a few minutes.';
    } 
  } else {
    $response['status'] = 'validation_error';
    $response['errors'] = $errors;
  }

  echo json_encode($response, JSON_PRETTY_PRINT);
}
