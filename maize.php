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
	$entryId = $_POST['entryId'];
$uid = $_POST['uid'];
$date = $_POST['date'];
$sackNo = $_POST['sackNo'];
$block = $_POST['block'];

	$sql = "insert into maize(entryId,uid,date,sackNo,block) values ($entryId,$uid,'$date',$sackNo,'$block')";
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
