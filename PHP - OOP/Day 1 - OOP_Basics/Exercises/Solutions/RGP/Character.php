<?php

class Character
{
    // Properties
    private $_name;
    private $_life;
    private $_atk;
    private $_def;

    private $_warCry;
    private $_race;

    // reference to an object
    private $_equipment;

    public function __construct($race)
    {
        $this->_race = $race;
        $this->_life = 100;
        $this->_atk = 10;
        $this->_def = 5;
        $this->_warCry = 'Attaaaaaaack!';

        if ($race == 'Orc')
            $this->_warCry = 'wwouogrouroulou mlll !!';
    }

    // Equipment methods
    public function addEquipment($equipment)
    {
        $this->_equipment = $equipment;
        return 'Equiped';
    }

    public function removeEquipment()
    {
        $this->_equipment = null;
        return 'Equipment removed';
    }

    public function displayEquipment()
    {
        echo $this->_equipment;
    }
}
