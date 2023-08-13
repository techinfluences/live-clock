<?php
$db_host = "sql6.freesqldatabase.com";
$db_user = "sql6639469";
$db_password = "NwjNWFTuAg";
$db_name = "sql6639469";
$db_port = "3306"l

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name, $db_port);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
} 
// else {
//  echo"connected";
// }
?>
