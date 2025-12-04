<?php
define('DB_SERVER', 'mysql-640c046-dessyabraham2000-c866.k.aivencloud.com');
define('DB_USERNAME', 'avnadmin');
define('DB_PASSWORD', '$2y$10$D00dL6d6mlsLrIHL56Xsg.kjwDw.jODWjpOzggTtzOw/5VLSY26l6');
define('DB_NAME', 'crud_app');
define('DB_PORT', 12272);

$link = mysqli_init();

// set SSL with the correct certificate path
mysqli_ssl_set($link, NULL, NULL, __DIR__ . '/certs/ca.pem', NULL, NULL);

if (!mysqli_real_connect(
    $link,
    DB_SERVER,
    DB_USERNAME,
    DB_PASSWORD,
    DB_NAME,
    DB_PORT,
    NULL,
    MYSQLI_CLIENT_SSL
)) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
