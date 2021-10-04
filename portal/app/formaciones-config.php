<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NM', 'portal');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NM);
 
// Check connection
if($link === false){
    die("ERROR: No pudo conectar " . mysqli_connect_error());
}
?>