<?php

function projectAutoLoad($class)
{
    require_once 'classes/' . $class . '.php';
}

spl_autoload_register('projectAutoLoad');

$garfield = new Cat();
$rantanplan = new Dog();

var_dump($garfield);
