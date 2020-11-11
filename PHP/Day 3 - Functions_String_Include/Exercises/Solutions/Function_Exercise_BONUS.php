<?php 

echo '<hr>';
echo '<p style="font-weight: 900"> FIZZBUZZ EXERCISE </p>';

/*
-- Exercise 3 : 

We have an array of integers, positive, between 1 and $nbElements (nbElements is the number of elements. You can use this variable).

Examples :


	Write a function call 'FizzBuzz'.
	For each number 'n' of the list, we want the following operations:
		. if the number is divisible by 3 : display 'Fizz'
		. if the number is divisible by 5 : display 'Buzz'
		. if the number is divisible by 3 AND by 5 : display 'FizzBuzz'
		. else : display the number 'n'*/
		function FizzBuzz($array) {
			foreach($array as $value) {
				if(($value % 3 == 0) && ($value % 5 == 0))
					echo 'FizzBuzz<br>';
				elseif($value % 5 == 0)
					echo 'Fizz<br>';
				elseif($value % 3 == 0)
					echo 'Buzz<br>';
				else
					echo $value . '<br>';
			}
		}

		$myArray = [5, 15, 6, 7];
		FizzBuzz($myAarray);
