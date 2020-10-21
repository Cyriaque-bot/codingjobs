<?php

// This is a PHP comment (on a single line)

/* cyriaque
    We can write some comments
    on multiple lines
*/

// 1. Simple variables
$firstName = 'Simon';
$populationInLux = 6000;
$height = 2.5; // float/double
$isThisTrue = false;

// Display type of a variable :
echo $firstName . ' is of type : ' . 
    gettype($firstName) . '<br>';
echo $populationInLux . ' is of type : ' . 
    gettype($populationInLux) . '<br>';
echo $height . ' is of type : ' . 
    gettype($height) . '<br>';
echo $isThisTrue . ' is of type : ' . 
    gettype($isThisTrue) . '<br>';

// Display content & type :
var_dump($firstName);
echo '<br>';

// 2. Arithmetic operators
$a = 5 + 2;
$a = 5 - 2;
$a = 5 / 2;
$a = 5 * 2;
$a = 10 % 2;

// Short way to update a variable : 
$b = 5;

//$b = $b + 2;
$b += 2;

// $b = $b -3;
$b -= 3;

// $b = $b * 5;
$b *= 5;

// Increment : 
$b += 1;
$b++;

// Decrement
$b -= 1;
$b--;

// 3. Concatenation
$word = 'Simon';

// Will print 'Hello, how are you Simon ?'
echo 'Hello, how are you ' . $word . ' ? <br>';

// We need to build a string along the way
$message = 'Hello';

// $message = $message . ' world';
$message .= ' world';

/*$message = $message . 'something' . $aVariable . $anotherVariable;

$message .= 'something' . $aVariable . $anotherVariable;*/

// Will print 'Hello world';
echo $message . '<br>';

// 4. Quotes

$string1 = 'Just a sentence. Nothing to see.';
$string2 = "Another sentence";


$color = 'red';

// Use single quotes only for pure text
echo 'It happens that my face goes $color <br>';

// Double quotes read the variable
echo "It happens that my face goes $color";

// 5. Escape characters
$str = 'This is a beautiful string. It\'s easy.';

// 6. Numerical Arrays :

echo '<hr>';
// Initialize an empty array
$myArray = array();

/*$movies = array(
    'NightCrawler',
    'Star Wars',
    'Jurassic Park'
);*/

$movies = [
    0 => 'NightCrawler',
    1 => 'Star Wars',
    2 => 'Jurassic Park' 
];


// Access one element of the array
echo 'My movie is : ' . $movies[1];


// Update/replace an element
$movies[2] = 'New movie';

// Add an element at the end of the array :
$movies[] = 'Another movie';

// Display/debug the entire array
echo '<pre>';
var_dump($movies);
echo '</pre>';

// Access an element
echo $movies[1] . '<br>';
$i = 2;
echo $movies[$i];

// Remove an element
unset($movies[1]);

// Reorder array
$movies = array_values($movies);

// You can count the number of elements in an array
$numberOfElements = count($movies);

// You can sort an array :
sort($movies);


// 7. Associative arrays 
$movies = [
    'Star wars' => 'Sci-Fi',
    'NightCrawler' => 'Thriller',
    'Aladdin' => 'Animation'
];

echo $movies['Star wars'];

$contact = [
    'Simon' => '+352235412354',
    'Johny' => '+352256665733',
    'Sridevi' => '+352012931234'
];
// Add a new value
$contact['Nico'] = '+352434234234';

// 8. die()

die('This is going to stop.');
echo 'Im here, but u will never see me.';
