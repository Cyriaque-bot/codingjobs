<?php

class CoffeeCup
{
    // Properties
    private $_quantity;
    private $_brand;
    private $_temperature;
    private $_volume;

    // Constructor
    public function __construct($vol, $brand, $temp)
    {
        $this->_volume = $vol;
        $this->_quantity = $vol;
        $this->_brand = $brand;
        $this->_temperature = $temp;
    }

    // Getters
    public function getQuantity()
    {
        return $this->_quantity;
    }

    public function getBrand()
    {
        return $this->_brand;
    }

    public function getTemperature()
    {
        return $this->_temperature;
    }

    // Sip some coffee
    public function sip($qtyIWantToDrink)
    {
        // Make sure there is enough coffee
        if ($this->_quantity < $qtyIWantToDrink) {
            echo 'You sipped : ' . $this->_quantity;
            echo 'No more coffee left.<br>';
            $this->_quantity = 0;
        } else {
            $this->_quantity -= $qtyIWantToDrink;
            echo 'You sipped ' . $qtyIWantToDrink . ' cl.';
            echo 'Coffe left : ' . $this->_quantity . '<br>';
        }
    }

    public function refill()
    {
        $this->_quantity = $this->_volume;
        echo 'Mug full again.<br>';
    }

    public function reHeat($temp)
    {
        $this->_temperature += $temp;
        echo 'Coffee warmed up at ' . $this->_temperature . ' degree celcius';
    }

    public function coolDown($temp)
    {
        $this->_temperature -= $temp;
        echo 'Coffee cooled down at ' . $this->_temperature . ' degree celcius';
    }
}
