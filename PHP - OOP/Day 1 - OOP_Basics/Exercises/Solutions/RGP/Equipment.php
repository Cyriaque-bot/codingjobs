<?php

class Equipment
{
    private $_type;
    private $_name;
    private $_bonusAtk;
    private $_bonusDef;
    private $_bonusLife;

    public function __construct($type, $name, $atk, $def, $life)
    {
        $this->_type = $type;
        $this->_name = $name;
        $this->_bonusAtk = $atk;
        $this->_bonusDef = $def;
        $this->_bonusLife = $life;
    }
}
