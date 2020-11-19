<?php

$contactInfo = array(
    'First Name' => 'Simon',
    'Last Name' => 'Bertrand',
    'Address' => '5 random street',
    'Postal code' => 'L-56565',
    'City' => 'Luxembourg',
    'Email' => 'simon@simon.fr',
    'Telephone' => '+33687879512',
    'Birthdate' => '1990-08-12'
);

?>

<ul>
    <?php foreach ($contactInfo as $key => $value) : ?>
        <li><?= $key . ' : ' . $value ?></li>
    <?php endforeach; ?>
</ul>