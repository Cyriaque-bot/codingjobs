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
}
     