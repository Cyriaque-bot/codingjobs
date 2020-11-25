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
    private $_inventory;

    public function __construct($race)
    {
        $this->_race = $race;
        $this->_life = 100;
        $this->_atk = 10;
        $this->_def = 5;
        $this->_warCry = 'Attaaaaaaack!';
        $this->_inventory = array();

        if ($race == 'Orc')
            $this->_warCry = 'wwouogrouroulou mlll !!';
    }

    // Equipment methods
    public function addEquipment($equipment)
    {
        // Check if there is enough space left
        if (count($this->_inventory) < 4) {

            // Loop the inventory to count swords and armor
            $swords = 0;
            $shield = 0;
            foreach ($this->_inventory as $item) {

                if ($item->getType() == 'sword')
                    $swords++;

                if ($item->getType() == 'shield')
                    $shield++;
            }

            // If it's a sword
            if ($equipment->getType() == 'sword' && $swords >= 2)
                return 'You already have 2 swords';

            if ($equipment->getType() == 'shield' && $shield == 1)
                return 'You already have a shield';

            // I can equip if I reach this line of code
            $this->_inventory[] = $equipment;
            return 'Equiped!';
        } else {
            return 'You already have 4 items';
        }
    }

    public function removeEquipment($equipment)
    {
        foreach ($this->_inventory as $pos => $item) {
            if ($item === $equipment) {
                unset($this->_inventory[$pos]);
                return 'Item removed';
            }
        }

        return 'Item couldnt be removed';
    }

    public function displayEquipment()
    {
        foreach ($this->_inventory as $item) {
            echo $item . '<br>';
        }
    }
}
     