<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .alert {
            color: purple;
        }
    </style>
</head>

<body>
    <?php

    $avatar = 'banana.png';
    $firstName = 'Banana';
    $lastName = 'Guy';
    $char = array(
        'atk' => 6,
        'def' => 1,
        'life' => 10
    );
    ?>

    <h1>Your character</h1>
    <img src="<?php echo $avatar; ?>" alt="" width="100px">

    <p>Its name :
        <?php echo $firstName . ' ' . $lastName ?>
    </p>

    <ul>
        <li>Life : <?php echo $char['life']; ?></li>
        <li>Attack : <?php echo $char['atk']; ?></li>
        <li>Defense : <?php echo $char['def']; ?></li>
    </ul>

    <?php
    if ($char['atk'] > 9 || $char['def'] > 9) {
        echo '<div class="alert">
    	<strong>Congratulations !</strong> Your character is ready to fight.</strong>
	</div>';
    } elseif ($char['atk'] < 5 or $char['def'] < 5) {
        echo '<div class="alert">
    <strong>Wait !</strong> Your charachter is too weeeakk!
</div>';
    }

    ?>
</body>

</html>