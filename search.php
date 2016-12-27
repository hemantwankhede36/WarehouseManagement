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
if(isset($_POST['submit']))
{
	echo"search pressed";
	$uid = $_POST['uid'];
	$sql = "select * from customer where uid= $uid";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			echo "UID: ".$row[uid]."Name: ".$row["firstName"].$row["lastName"]."Village: ".row["village"]."<br>";
		}
	}
	if(mysqli_query($conn,$sql)){
		echo "$sql";
	}
	else{
		echo " error:" .$sql. "<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>