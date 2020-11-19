<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car detail page</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>

    <?php require_once 'get-car.php'; ?>

    <?php if (mysqli_num_rows($result) == 0) : ?>
        <p class="error">Car doesnt exists in the DB.</p>
    <?php else : ?>
        <h2><?= $car['name']; ?></h2>
        <h3><?= $car['brand_name']; ?></h3>
        <img width="70px" src="<?= $car['photo']; ?>">
        <hr>

        <p><strong>Price : </strong> <?= $car['price']; ?></p>
        <p><strong>Type : </strong> <?= $car['type']; ?></p>
        <p><strong>Description : </strong> <?= $car['description']; ?></p>
        <p><strong>Year of production : </strong> <?= $car['year_of_prod']; ?></p>
    <?php endif; ?>

</body>

</html>