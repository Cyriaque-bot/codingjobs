<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a car</title>
    <style>
        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>

<body>

    <?php require_once 'insert-car.php'; ?>

    <h3>Add a car in DB</h3>

    <form action="" method="post">
        <input type="text" name="name" placeholder="Name of the car">
        <!-- Error messages will be displayed in red -->
        <span class="error"><?php if(isset($errors['name'])) echo $errors['name'];?></span><br>

        <input type="text" name="brand_name" placeholder="Brand of the car">
        <span class="error"><?php if(isset($errors['brand_name'])) echo $errors['brand_name'];?></span><br>
        
        <input type="text" name="price" placeholder="Price">
        <span class="error"><?php if(isset($errors['price'])) echo $errors['price'];?></span><br>
        
        <input type="text" name="photo" placeholder="Photo path">
        <span class="error"><?php if(isset($errors['photo'])) echo $errors['photo'];?></span><br>
        
        <select name="type" id="type-select">
            <option value="">--Please choose a type--</option>
            <option value="sport">Sport</option>
            <option value="break">Break</option>
        </select>
        <span class="error"><?php if(isset($errors['type'])) echo $errors['type'];?></span><br>

        <input type="text" name="description" placeholder="Description">
        <span class="error"><?php if(isset($errors['description'])) echo $errors['description'];?></span><br>
        
        <select name="year" id="year-select">
            <option value="">--Please choose a year--</option>
        </select>
        <span class="error"><?php if(isset($errors['year'])) echo $errors['year'];?></span><br>
        <br>

        <input type="submit" name="submitBtn" value="Add movie">
    </form>


    <script>

        // Small script to generate YEAR DROPDOWN LIST (not mandatory, you could do this manually)
        let dateDropdown = document.getElementById('year-select');
        let currentYear = new Date().getFullYear();
        let earliestYear = 1970;

        while (currentYear >= earliestYear) {
            let dateOption = document.createElement('option');
            dateOption.text = currentYear;
            dateOption.value = currentYear;
            dateDropdown.add(dateOption);
            currentYear -= 1;
        }
    </script>
</body>

</html>