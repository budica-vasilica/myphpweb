<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'mysqlwebphp.mysql.database.azure.com');
define('DB_USERNAME', 'mysql');
define('DB_PASSWORD', 'Vas1l1ca');
define('DB_NAME', 'demo');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("EROARE: Nu putem comunica cu baza de date" . mysqli_connect_error());
}
?>