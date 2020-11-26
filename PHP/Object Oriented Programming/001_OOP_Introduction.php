<?php

/*
  A class is
  
  not an object !
*/
/*
class Car
{
  // prpperties

  public $color = 'yellow';
  public $name;
  public $brand;


  // Methods

  public function  makesong()
  {
    echo 'Vroom Vroom !<br>';
  }
}
// Create an Object : Instance of Class.
$mycar = new Car();
//echo 'Color of my car : ' . $mycar->name . '<hr>';
$mycar->name ="My fancy car";
var_dump($mycar);
//$mycar

// I can create as much objects ai I want
//var_dump($mycar);
echo '<hr>';
$ferrari = new Car();
// Change value of the property
$ferrari->color = 'red';
var_dump($ferrari);
/*
The constructor : 
it's a method that allox you to initialize  the value 


*/

class Car
{
  // prpperties

  public $_color = 'yellow';
  public $_name;
  public $_brand;

  // constructor
  public function __construct($name, $brand, $color = 'yellow')
  {
    $this->_name = $name;
    $this->_brand = $brand;
    $this->_color = $color;
  }
  // Methods

  public function  makesong()
  {
    echo 'Vroom Vroom !<br>';
  }
  // ToString : to echo an object
  public function __toString()
  {
    // You must return a string
    return 'Name :' . $this->_name . '<br>' .
      'Color:' . $this->_color . '<br>' .
      'Brand:' . $this->_brand;
  }
}



// Create an Object : Instance of Class.


$mycar = new Car('Model', 'peugeot', 'red');
//echo 'Color of my car : ' . $mycar->name . '<hr>';
//$mycar->name = "My fancy car";
var_dump($mycar);
//$mycar

// I can create as much objects ai I want
//var_dump($mycar);
echo '<hr>';
$ferrari = new Car('Model1', 'Ferrari', 'gris');
// Change value of the property
//$ferrari->color = 'red';
var_dump($ferrari);
//$ferrari ->
// create a car 
