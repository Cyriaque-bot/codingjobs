<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display cars</title>
</head>

<body>

    <?php require_once 'get-cars.php'; ?>

    <h3>Cars list :</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Brand name</th>
                <th>Price</th>
                <th>Photo</th>
                <th>Type</th>
                <th>Description</th>
                <th>Year of production</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($cars as $car) : ?>
            <tr>
                <td><?= $car['name']; ?></td>
                <td><?= $car['brand_name']; ?></td>
                <td><?= $car['price']; ?></td>
                <td><img src="<?= $car['photo']; ?>"></td>
                <td><?= $car['type']; ?></td>
                <td>
                    <?php
                        echo substr($car['description'],0 ,30);
                        if(strlen($car['description'])>30)
                            echo '...';
                     ?>
                </td>
                <td><?= $car['year_of_prod']; ?></td>
                <td><a href="../Part 4/index.php?id=<?= $car['id_car']; ?>">More</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>