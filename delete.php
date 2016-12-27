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
	echo "connected <br>";
}
if(isset($_POST['delete'])){
	echo"delete pressed <br>";
	$uid = $_POST['uid'];
	$sql = "delete from customer where uid= $uid";
	if(mysqli_query($conn,$sql)){
		echo "record deleted <br>";
	}
	else{
		echo " error:" .$sql. "<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>