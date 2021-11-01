

<?php

define ('DB_USER','Abhishek');
define ('DB_HOST','localhost');
define ('DB_PASSWORD','Z_gfsVppBJi2!8c');
define ('DB_NAME','project');
// Make the connection:
$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Set the encoding...
//mysqli_set_charset($conn, 'utf8');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>