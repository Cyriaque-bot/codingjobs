<?php

/*

    Cleaning / Validation of form data.

    User data cam be manipulated in many was to reduce the risk for the website  (security measure) : 

        - Clean
        - Validate
        - Escape before sending data to the DB
        - Escape before sending data to the client
    

    With the GET method, some user can try to do something like this : 
        movie.php?id=1
        SELECT * FROM users WHERE id = 1;
        
        movie.php?id=1;insert into users(username, password) values..
        
        SELECT * FROM users WHERE id = 1;
        insert into users(username, password) values..


    
*/

// Cast to integer
$id = (int) $_GET['id'];

if($id > 0) {
    // Correct integer
}

/*
    If you have to escape the data before display them (or save them in db) you might need the htmlspecialchars function.

    When we send HTML to the DB we need to make sure the information doesnt contain any unexpected HTML Chars.
*/

$str = htmlspecialchars($_GET['content']);