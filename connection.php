<?php
$servername = "localhost";
$username = "root";
$password = "password";
// create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->maxdb_connect_error){
	die("Connection filed: ".$conn->connect_error);
}
echo "Connected succefully";

?>
