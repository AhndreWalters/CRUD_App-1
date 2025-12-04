<?php
/* Database credentials */
define('DB_SERVER', 'mysql-640c046-dessyabraham2000-c866.k.aivencloud.com');
define('DB_USERNAME', 'avnadmin');
define('DB_PASSWORD', '$2y$10$D00dL6d6mlsLrIHL56Xsg.kjwDw.jODWjpOzggTtzOw/5VLSY26l6');
define('DB_NAME', 'crud_app');
define('DB_PORT', 12272); // replace with your actual port number

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
