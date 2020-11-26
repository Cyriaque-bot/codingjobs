<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $email = "";
    $Password = "";
    $Submission = "";

    // Retrieve last three movies and display them : 

    // Require DB configuration
    require_once 'Exercicedatabase.php';

    // Connect to DB
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

    $sql_query = 'SELECT Email, password
        FROM personne';

    // Execute the query
    $results = mysqli_query($conn, $sql_query);

    // Fetch results as associative array
    $personne = mysqli_fetch_all($results, MYSQLI_ASSOC);

    if (isset($Submission)) {
        foreach ($personne as $personnes) {
            echo '<hr>';
            echo 'Email : ' .  $personnes['Email'] . '<br>';
            echo 'Password : ' .  $personnes['password'] . '<br>';
            //echo '<img src="images/' . $movie['poster'] . '" width="100px">';

        }
        while (
            $personnes['Email'] == $email &&
            $personnes['password'] == $Password

        )
            echo "fucking name ";
    } else
        echo "thank you ";


    // Close the connection to the DB
    mysqli_close($conn);

    ?>

    <form action="" method="post">
        <br> <br>
        <input type="text" name="Email" placeholder="Email" value="<?php echo "$email" ?>"> <br> <br>
        <input type="text" name="Password" placeholder="Password" value="<?php echo "$Password" ?>"> <br> <br>
        <input type="submit" name="Submission">

    </form>

</body>

</html>