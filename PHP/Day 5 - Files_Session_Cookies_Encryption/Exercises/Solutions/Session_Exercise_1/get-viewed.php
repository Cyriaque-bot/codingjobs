<?php

session_start();

if(isset($_SESSION['viewed'])) {
    echo 'You have visited the page get-viewed';
} else {
    echo 'You haven\'t visited the page get-viewed';
}