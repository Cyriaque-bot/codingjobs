<?php

require_once 'Character.php';
require_once 'Equipment.php';

$legolas = new Character('Elf');
$orc = new Character('Orc');

echo '<pre>';
var_dump($legolas);
echo '</pre>';

echo '<pre>';
var_dump($orc);
echo '</pre>';

$sword = new Equipment('Sword', 'Death Sword', 10, 0, 0);

echo '<pre>';
var_dump($sword);
echo '</pre>';
