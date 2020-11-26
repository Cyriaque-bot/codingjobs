<?php

class Vehicles
{
    // properties
    protected $numberWheels = 4;
    protected $brand = '';
    protected $modelName = '';

    public function __construct($wheels, $brand, $modelName)
    {
        $this->numberWheels = $wheels;
        $this->brand = $brand;
        $this->modelName = $modelName;
    }

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

    public function __construct($wheels, $brand, $modelName, $load)
    {
        parent::__construct($wheels, $brand, $modelName);
        $this->maxLoad = $load;
    }
}

class Car extends Vehicles
{

    public function makeSound()
    {
        echo 'Different sound<br>';
    }
}

$vehicle = new Truck(4, 'bmw', 's1', '320kg');
var_dump($vehicle);
