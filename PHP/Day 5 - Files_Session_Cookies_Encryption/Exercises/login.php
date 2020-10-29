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
    $email = "";
    $password = "";
    $submit = "";

    session_start();

    if (isset($submit))
        if (isset($_SESSION['page_view']))
            $_SESSION['page_view'] += 1;
        else
            $_SESSION['page_view'] = 1;


    ?>

    <form action="" method="post">
        <input type="text" name="email" placeholder="Email" value="<?php echo " $email" ?>"> <br><br>
        <input type="text" name="password" placeholder="Password" value="<?php echo " $password" ?>"><br><br>

        <input type="submit" name="Submission">
    </form>
</body>

</html>