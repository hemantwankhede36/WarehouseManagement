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
if(isset($_POST['submit'])){
	echo"submit pressed <br>";
	$uid = $_POST['uid'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$village = $_POST['village'];

	$sql = "insert into customer(uid,firstName,lastName,village) values ($uid,'$firstName','$lastName','$village')";
	if(mysqli_query($conn,$sql)){
		echo "new record created <br>";
	}
	else{
		echo " error:" .$sql. "<br>".mysqli_error($conn);
	}
	
	mysqli_close($conn);
}


?>
<form method="get"  action="http://localhost/dashboard/Project/sack.php"><button  type="submit">Enter Details</button></form>
