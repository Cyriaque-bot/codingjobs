<?php

$errors = array();

// Do something only if I get data
if (!empty($_POST)) {
  // Basics validations
  if (empty($_POST['title']))
    $errors['title'] = 'Title is mandatory';

  if (empty($_POST['year']))
    $errors['year'] = 'Year of release is mandatory';

  if (count($errors) == 0) {
    $conn = mysqli_connect('localhost', 'root', '', 'moviedb');

    $query = "INSERT INTO movies(title, year_of_release, director_id)
    VALUES('" . $_POST['title'] . "', '" . $_POST['year']  ."' 1)";

    // execute the query
    $result_query = mysqli_query($conn, $query);

    if ($result_query)
      echo 'Movie successfully added!';
    else
      echo 'Error inserting into DB';
  } else {
    echo implode('<br>', $errors);
  }
}
