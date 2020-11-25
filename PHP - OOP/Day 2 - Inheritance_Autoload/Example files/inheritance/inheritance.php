<?php

/*
 INHERITANCE

Representing a relationship between classes.
It takes the form of a parent/child relationship

The child can use methods/properties defined in the parent.
The parent cannot access the children properties/methods.

Many children can inherit the same parent.
A class can't inherit from many classes (only one).

The main purpose of inheritance is reusability.
Be D.R.Y : Dont Repeat Yourself.

*/

class Vehicles
{
    // properties
    protected $numberWheels = 4;
    protected $brand = '';
    protected $modelName = '';

    public function makeSound()
    {
        echo 'Vroooooom Vrooooooom<br>';
    }
}

// Truck inherits Vehicles
class Truck extends Vehicles
{
    // property
    private $maxLoad;
}

class Car extends Vehicles
{

    public function makeSound()
    {
        echo 'Different sound<br>';
    }
}

$myTruck = new Truck();
$myTruck->makeSound();

$myCar = new Car();
$myCar->makeSound();
//var_dump($myTruck);
