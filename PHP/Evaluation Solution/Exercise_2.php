<?php

$contactForm = array(
    'First Name' => 'Simon',
    'Last Name' => 'Bertrand',
    'Address' => '5 random street',
    'City' => 'Luxembourg',
    'Postal Code' => 'L-132123',
    'Email' => 'simon@simon.fr',
    'Phone' => '+33623423929',
    'Birthdate' => '1990-09-12'
);

?>
 
<ul>
    <?php foreach ($contactForm as $key => $value) : ?>
    <li><?= $key . ' : ' . $value ?></li>
    <?php endforeach; ?>
</ul>