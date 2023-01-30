<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'bench');
define('DB_PASS', '.boss008');
define('DB_NAME', 'kenny_villa');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error){
    die(
        'Connection Failed' . $conn->connect_error
    );
}

// echo 'Your are in';