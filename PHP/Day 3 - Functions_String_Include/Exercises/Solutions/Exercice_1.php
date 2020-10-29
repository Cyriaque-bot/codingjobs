
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
/*Write a PHP script which multiply two numbers
	Example : 2*4 = 8
$a="";
$b="";
$c="";
$d="";

if (isset($_POST['d'])){
    $c =$_POST['a'] * $_POST['b'];
    echo '$c';
}
*/
function mutliply ($FirstNumber,$SecondNumber ){
    return ($FirstNumber*$SecondNumber);
}

$FirstNumber ="";
$SecondNumber="";
if (isset($_POST['d'])){
    $FirstNumber =$_POST['FirstNumber'];
    $SecondNumber=$_POST['SecondNumber'];
  if (!empty($FirstNumber) && !empty($SecondNumber)){
      echo mutliply ($FirstNumber,$SecondNumber );
  }
    else 
    echo'Please, fill both value';
}




?>

<form action="" method="post">
<input type="text" name="FirstNumber" placeholder="FirstNumber" value="<?php echo "$FirstNumber"?>"> <br>
<input type="text" name="SecondNumber" placeholder="SecondNumber" value="<?php echo "$SecondNumber"?>"> <br>
<!-- <input type="text" name="c" placeholder="Result" value="/* <echo "$c"?>">--> <br>
<input type="submit" name="d" value="soumettre" >
</form>
</body>
</html>
<?php
echo '<br>';
echo '<hr>';

function twoNumbers($FirstNumber,$SecondNumber){
    if( $FirstNumber> $SecondNumber)
      echo "The first number is larger than the second";
      elseif ( $FirstNumber< $SecondNumber)
      echo "The Second number is larger than the first"; 
      else 
       echo "The both number are equals ";  
}
    
twoNumbers(30,30);

echo '<br>';
echo '<hr>';

// Exercice  3
// 3.1 PHP script that:

$array_John = array (1225, 25, 35, 10, 25); 
$Sumarray_John =  array_sum($array_John);
echo $Sumarray_John ;


echo '<hr>';

// 3.2 Write a function 

function TakeExpenseArray($ExpenseArray){
    return  array_sum($ExpenseArray);
}
$ExpenseArray = array (135, 655, 235, 1210,725);

echo TakeExpenseArray($ExpenseArray);

echo '<br>';
echo '<hr>';

// Exercice the palindrome  

