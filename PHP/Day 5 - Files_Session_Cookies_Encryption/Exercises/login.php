<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    require_once 'Exercicedatabase.php';



    //  $email = "";
    // $password = "";
    //$submit = "";

    // = 'SELECT * 
    //FROM users';

    // Execute the query        
    //$results = mysqli_query($conn, $sql_query);


    if (isset($_POST['Submission'])) {
        // retrieve the value 
        session_start();
        $email = trim($_POST['email']);
        $sql_query = 'SELECT username FROM users WHERE email LIKE "%' . $email . '%"';
        $results = mysqli_query($conn, $sql_query);
        $user = mysqli_fetch_all($results, MYSQLI_ASSOC);

        $_SESSION['userLogin'] = true;
        if (isset($_SESSION['userLogin'])) {
            var_dump($user);
        } else {
            echo 'Fucking Users';
        }
    }
    //if (isset($_SESSION['page_view']))
    //  $_SESSION['page_view'] += 1;  
    // else
    // $_SESSION['page_view'] =
    ?>

    <form action="" method="post">
        <input type="text" name="email" placeholder="Email" value=""> <br><br>
        <input type=" text" name="password" placeholder="Password" value=""><br><br>


        <input type="submit" name="Submission">
    </form>
</body>

</html>