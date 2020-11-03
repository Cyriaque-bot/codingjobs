<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My&nbsp;title</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="myInput" placeholder="Email">
        <input type="submit" name="mySubmit" value="SEND">
    </form>

    <?php

    if (isset($_GET['mySubmit'])) {
        // Display as original
        echo '<br>' . $_GET['myInput'];

        // Convert the HTML Tags
        // "&" covert to "&amp;"
        // "<" convert to "&lt;"
        $str = htmlspecialchars($_GET['myInput']);
        echo '<br>' . $str;

        // Remove all special HTML Tags
        $str2 = strip_tags($_GET['myInput']);
        echo '<br>' . $str2;
    }
    ?>
</body>

</html>