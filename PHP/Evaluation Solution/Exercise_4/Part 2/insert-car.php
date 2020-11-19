<?php
    // Handle errors with an array (will contain all error messages)
    $errors = array();

    // Check if form was submitted :
    if (isset($_POST['submitBtn'])) {

        // Validations :
        // The field name, brand_name, price, type and year_of_production are required.
        if (empty($_POST['name']))
            $errors['name'] = 'Name is mandatory';

        if (empty($_POST['brand_name']))
            $errors['brand_name'] = 'Brand name is mandatory';

        // The price must contain numbers only.
        if (empty($_POST['price']))
            $errors['price'] = 'Price is mandatory';
        else if (!is_numeric($_POST['price']))
            $errors['price'] = 'Price must contain numbers only';

        if (empty($_POST['type']))
            $errors['type'] = 'Type is mandatory';

        if (empty($_POST['year']))
            $errors['year'] = 'Year of production is mandatory';


        // If no errors we can insert
        if (count($errors) == 0) {
            // Retrieve values in variable (was not mandatory, just an extra step to remove white spaces, just in case)
            $name = trim($_POST['name']);
            $brand_name = trim($_POST['brand_name']);
            $price = trim($_POST['price']);
            $photo = trim($_POST['photo']);
            $type = trim($_POST['type']);
            $description = trim($_POST['description']);
            $year = trim($_POST['year']);

            $conn = mysqli_connect('localhost', 'root', '', 'car_renting');
            $query = "INSERT INTO cars(name, brand_name, price, photo, type, description, year_of_prod)
            VALUES('$name', '$brand_name', $price, '$photo', '$type', '$description', '$year')";

            $result = mysqli_query($conn, $query);
            
            if($result) {
                echo '<p class="success">Insert into the DB successfull !</p>';
            } else {
                echo 'something went wrong';
            }
        }
    }
