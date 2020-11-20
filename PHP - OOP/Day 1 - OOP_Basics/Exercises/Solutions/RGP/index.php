<?php

require_once 'Character.php';
require_once 'Equipment.php';

$legolas = new Character('Elf');
$orc = new Character('Orc');

$sword = new Equipment('Sword', 'Death Sword', 10, 0, 0);

echo $legolas->addEquipment($sword);
// echo $legolas->removeEquipment();
$legolas->displayEquipment();

echo '<pre>';
var_dump($legolas);
echo '</pre>';

echo '<pre>';
var_dump($orc);
echo '</pre>';

echo '<pre>';
var_dump($sword);
echo '</pre>';

echo '<hr>';
