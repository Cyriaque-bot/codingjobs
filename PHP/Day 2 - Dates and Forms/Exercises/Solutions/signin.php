<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $firstName = '';

    if (isset($_POST['submitBtn'])) {
        $firstName = $_POST['firstName'];

        //Validations
        if (
            empty($_POST['firstName'])
            or empty($_POST['lastName'])
        ) {
            echo 'Firstname and lastname are mandatory.';
        } elseif (!(strlen($_POST['email']) > 8 
        && strlen($_POST['email']) < 50)) {
            echo 'Your email shoud be between 8 and 50 char';
        } elseif (!strpos($_POST['email'], '@')) {
            echo 'Your email doesnt contain @ symbol';
        } elseif (!strlen($_POST['password']) >= 8) {
            echo 'Password must be at least 8 chars long';
        } elseif ($_POST['password'] != $_POST['confirmPassword']) {
            echo 'Passwords must be identical';
        } elseif (!isset($_POST['myCheckBox'])) {
            echo 'You have to subscribe. No choice.';
        } else {
            echo 'Your name : ' . $_POST['firstName'] . '<br>';
            echo 'Your last name : ' . $_POST['lastName'] . '<br>';
            echo 'Your email : ' . $_POST['email'] . '<br>';
        }
    }
    ?>

    <form action="" method="post">
        <input type="text" name="firstName" placeholder="First Name" value="<?= $firstName; ?>"><br>
        <input type="text" name="lastName" placeholder="Last Name"><br>
        <input type="text" name="email" placeholder="Email Adress"><br>

        <input type="password" name="password" placeholder="Password"><br>
        <input type="password" name="confirmPassword" placeholder="Confirm Password"><br>

        <label for="">
            <input type="checkbox" name="myCheckBox">
            Subscribe to the newsletter
        </label>

        <br>
        <input type="submit" name="submitBtn" value="Send">
        
    </form>


</body>

</html>