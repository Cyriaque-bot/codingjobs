<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $url = 'fakeurl.php';
    ?>

    <a href="<?= htmlspecialchars($url); ?>">Click</a>


    <br>
    <?php
    $url = "fakeurl.php' onmouseover='alert(document.cookie)";

    echo "<a href ='" . htmlspecialchars($url) . "'>Click</a>";
    ?>

    <br>
    <a href="<?= htmlspecialchars($url, ENT_QUOTES); ?>">Click</a>

</body>

</html>