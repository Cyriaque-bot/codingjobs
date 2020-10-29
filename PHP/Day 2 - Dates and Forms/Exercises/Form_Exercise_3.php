<?php 

/* -- Exercise 1 :
	
	1.1 : 
	Create a basic connection form with email and password input.

	1.2 :
	Check if a string contains the '@' symbol thanks to the 'strpos' function.
	If yes, display 'valid email';
	If no, display 'invalid email';

	1.3 :
	When the user validates the form: display a message in red if invalid, show in green if valid.

*/

/* -- Exercise 2 : 
	2.1 :
	Write a PHP script that gives the multiplication table of 2
	Multiplication table from 1 to 10 (Already done in previous exercise)

	2.2 :
	Modify this script to give the multiplication table of any number ($x for example) in a table

	2.3 :
	Create a form with one input.
	When you validate this form, it should display the multiplication table of the number you entered.
	You have to check if the value is correct (no float and no string, ONLY integer).

	2.4 :
	Display the multiplication table in a nice HTML format table style.
*/


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Document</title>
 </head>
 
 
 
 <body>

<?php
/*
$Email=""; 
$password="";
$subbutton="";	
$at="@"; 
$pos="";

if (isset($_POST['subbutton'])) {
	$pos= strpos($_POST['Email'],$at );
}

if ($pos=== false){
	echo '<span style ="color:red;">invalid email </span>';
} else{
	echo '<span style ="color:green;">valid email</span>';
}
*/
?>

<!-- 

<form action="" method='post'>
<input type="text" name="Email" placeholder="Email"  value='<?php echo"$Email" ?>'> <br>
<input type="text" name="password" placeholder="password"  value='<?php echo"$password" ?>'> 
<input type="submit" name="subbutton"  value = "soumettre"> 
</form>

 </body>
 </html>
 -->
<?php 
 echo '<br>';
 echo '<br>';
 echo '<br>';
 echo '<hr>';
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php 
 /* exercice 2  */
 
 $a="";
 $x="";
 $subbutton="";

 
 //for ($x=1; $x <11 ;  $x++) { 
if(isset($_POST['subbutton'])){
	
	$a = (int)( $_POST['x'])*2  ;

	echo("$a");
	
}

// }
 
 // Modify this script to give the multiplication table of any number ($x for example) in a table
 
 ?>
<form action="" method="post">

<input type="text" name="x" placeholder="resultat"  value='<?php echo "$x" ?>'> 
<input type="submit" name="subbutton"  value = "soumettre"> 
</form>	

</body>
</html>
 


