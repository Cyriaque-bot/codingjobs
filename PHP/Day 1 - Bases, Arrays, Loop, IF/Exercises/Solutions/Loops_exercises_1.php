<?php

	/*
	- Exercise 0 :
		
		Based on the character exercise, display all his caracteristics using a loop.

	*/

	$char = array(
        'atk' => 6,
        'def' => 1,
        'life' => 10
	);
	
	echo '<ul>';
	foreach ($char as $key => $value) {
		echo '<li>' . $key . ' : ' . $value . '</li>';
	}
	echo '</ul>';

	/*
	- Exercise 1 :
		
		Peter is going to run around the athletic field.
		He should do 9 rounds of the field.

		He has poor memory and need help tracking where is at.

		Create a loop to tell Peter when he's done a round.
		Exit the loop and print a message when he's done with his jogging.

	*/
	echo '<hr>';

	for ($i = 1; $i < 10; $i++) { 
		echo "Go on Peter. $i round done.<br>";
	}
	echo 'Good job, your jogging is done. Take some rest';



	/*
	- Exercise 2 : 
		Michel went to the supermarket and bought some food.
		He used an array to save his spending.

	    $array = array("Salad"=>"1.03","Tomato"=>"2.3","Oignon"=>"1.85","Red cabbage"=>"0.85")
	    Write a script that will : 
	    1. Sort by value
	    2. Sort by key in descending order
	    3. Use a loop to calculate the total of his spendings.

	*/

	echo '<hr>';

	$array = array("Salad"=>"1.03","Tomato"=>"2.3","Oignon"=>"1.85","Red cabbage"=>"0.85");

	//1. Sort by value
	asort($array);

	//2. Key DESC
	krsort($array);

	// print_r($array);
	// var_dump($array);

	//3. 
	$total = 0;

	foreach ($array as $price) {
		$total += $price;
	}

	echo 'Total : ' . $total;


	/*
	- Exercise 3 : 

		Using a loop, fill in a array with every number from 0 to 20.
		The element 0 will therefore contain 0, the element 1 will contain 1 etc.

		Do it by using a for AND a while loop
	*/

	echo '<hr>';

	$myArray = array();

	for ($i=0; $i <= 20; $i++) { 
		$myArray[$i] = $i;
	}

	// What happens inside the loop :
	// $i = 0 /  $myArray[0] = 0;
	// $i = 1 /  $myArray[1] = 1;
	// $i = 2 /  $myArray[2] = 2;
	// $i = 3 /  $myArray[3] = 3;
	// .....
	// $i = 20 /  $myArray[20] = 20;

	// Display the array to make sure it works : 
	echo '<pre>';
	var_dump($myArray);
	echo '</pre>';

	/*
	-Exercise 4 :
		Use a loop to create a array.
		This array will contain the multiplication table of 2.
		From 1 to 10.
	*/

	echo '<hr>';

	$myArray = array();

	for ($i=0; $i <= 20; $i++) { 
		$myArray[$i] = $i*2;
	}

	echo '<pre>';
	var_dump($myArray);
	echo '</pre>';

	/*
	-Exercise 5 :
		Create an array of random numbers
		1. Find the max / min number of the array.
		You can't use any function (max/min/sort).
	
		2. Find the position of the max/min also.
		You can only use 2 variables (your $array and $i doesn't count).
	*/

echo '<hr>';

$myArray = [20, -6, 19, 5, 2, 81];

// Initiliaze max and min to be the first element of my array
// $max = $myArray[0];
// $posMax = 0;
// $min = $myArray[0];
// $posMin = 0;

// foreach ($myArray as $position => $value) {
// 	// Looking for the maximum
// 	if($value > $max) {
// 		$max = $value;
// 		$posMax = $position;
// 	} 

// 	// Lookin for the minimum
// 	if($value < $min) {
// 		$min = $value;
// 		$posMin = $position;
// 	} 
// }

// echo 'Maximum is : ' . $max . ', at position : ' . $posMax . '<br>';
// echo 'Minimum is : ' . $min . ', at position : ' . $posMin . '<br>';

$posMax = 0;
$posMin = 0;

foreach ($myArray as $position => $value) {
	// Looking for the maximum
	if($value > $myArray[$posMax]) {
		$posMax = $position;
	} 

	// Lookin for the minimum
	if($value < $myArray[$posMin]) {
		$posMin = $position;
	} 
}

echo 'Maximum is : ' . $myArray[$posMax] . ', at position : ' . $posMax . '<br>';
echo 'Minimum is : ' . $myArray[$posMin] . ', at position : ' . $posMin . '<br>';