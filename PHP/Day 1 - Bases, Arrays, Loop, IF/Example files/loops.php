<?php

// 1. For Loop
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}

echo '<hr>';
// 2. While
$a = 0;
while ($a < 10) {
    echo $a . '<br>';
    $a++;
    //Exit the loop : break;
}

echo '<hr>';
// 3. Do...while
$a = 0;
do {
    echo $a . '<br>';
    $a--;
} while ($a > 0);


// 4. For...each loop is designed to work with ARRAY
$movies = [
    'Star wars',
    'Jurassic Park',
    'NightCrawler'
];

/*echo $movies[0];
echo $movies[1];
echo $movies[2];*/
/*
for ($i = 0; $i < count($movies); $i++) {
    echo $movies[$i] . '<br>';
}*/

foreach ($movies as $movie) {
    echo $movie . '<br>';
}

foreach ($movies as $position => $movie) {
    echo $movie . ' at position : ' . $position . '<br>';
}


