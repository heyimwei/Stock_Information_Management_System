<?php

define('DB_SERVER', "YOURSERVER");
define('DB_USERNAME', 'YOURUSERNAME');
define('DB_PASSWORD', 'YOURPASSWORD');
define('DB_DATABASE', 'YOURDATABASE');

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

?>
