<?php
$servername = "localhost";
$username = "root";
$password = "";
$db= "Warehouse";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);
if(!$conn){
	die("error" .mysqli_connect_error());
}
else{
	echo "connected";
}
 
?>
