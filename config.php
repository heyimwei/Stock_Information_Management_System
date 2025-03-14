<?php

    define('DB_SERVER', "SERVER");
    define('DB_USERNAME', 'USERNAME');
    define('DB_PASSWORD', 'PASSWORD');
    define('DB_DATABASE', 'DATABASE');

    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->set_charset("utf8");

?>
