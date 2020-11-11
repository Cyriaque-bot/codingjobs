 
<?php 
/* 
    - Exercise : 
	
		-- Part 1 :
	   		Create two pages:
	        - signin.php: User registration page, with the following fields:
	            - Name
	            - First name
	            - E-mail
	            - Password
	            - Confirmation of password
	            - Checkbox "Subscribe to the newsletter"

	        - recap-signin.php: Page showing the summary of the information entered.

		-- Part 2 :
			1. Using the first part, merge both the signin.php and recap-signin.php files into one.
			If we arrive on the page without the form being submitted, we will post the form, otherwise we will display the summary.

			2. Add validators on the different fields of the form:
				- The name and the first name are mandatory.
				- The e-mail must be between 8 and 50 characters long and should contains @
				- The fields "Password" and "Confirmation" must be identical and have at least 8 characters

			3. Add a box "I accept the conditions of use of the product", which must be checked.

			Bonus: Make the form values ​​reappear with each submission, in case of error.
   
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
/* partie 1 de l'exercice 1*/
$Name=""; 
$lastName =""; 
$Email =""; 
$password ="";
$confirmationpassword="";
$submitBut="";
// The name and the first name are mandatory.


// les validations 

if(  
	empty($_POST['Name'] ) or
	empty($_POST['lastName'])	# code...
	)   {
	echo 'Name and lasName are mandatories';
}

if (!(strlen($_POST['Email'])>8 &&
strlen($_POST['Email'])<50)){
	echo 'your email should be between 8 and 50 characteres '; 
}




?>


 <!--Ecriture de mon code html-->
 
 <form action="" method="post">

<input type="text" name="Name" placeholder="Name" value="<?php echo $Name ?>"> <br> 
<input type="text" name="lastName" placeholder="lastName" value="<?php echo $lastName ?>"> <br> 
<input type="text" name="Email" placeholder="Email" value="<?php echo $Email ?>"> <br>
<input type="text" name="password" placeholder="password" value="<?php echo $password?>"> <br>
<input type="text" name="confirmationpassword" placeholder="confirmationpassword" value="<?php echo $confirmationpassword  ?>"> <br> <br>
<input type="checkbox" name="mycheckbox">
<label for="">Subscribe to the newsletter </label> <br> <br>

<input type="submit" name="submitBut" value="soumettre">


</form>
 </body>
 </html>