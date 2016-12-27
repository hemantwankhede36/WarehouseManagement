<?php
$servername = "localhost";
$username = "root";
$password = "";
$db= "Warehouse";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){
	die("error" .mysqli_connect_error());
}
else{
	echo "connected "."<br>";
}
if(isset($_POST['display']))
{
	echo"display pressed"."<br>"."<br>";
	$uid = $_POST['uid'];
	$sql = "select * from customer natural join soyabean where uid=$uid ";
	$result=mysqli_query($conn, $sql);
	if($result->num_rows>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			echo "UID: {$row['uid']}  <br>".
			"First Name: {$row['firstName']}  <br>".
			"Last Name: {$row['lastName']}  <br>".
			"Village: {$row['village']}  <br>".
			"Entry ID: {$row['entryId']}  <br>".
			"Date: {$row['date']}  <br>".
			"No. of Sacks: {$row['sackNo']}  <br>".
			"Block: {$row['block']}  <br><br>";
		}
	}
	else {
    echo "<br>0 results";
    }
    
	mysqli_close($conn);
}
?>
<html>
<body><form method="get"  action="http://localhost/dashboard/Project/bill.php"><button  type="submit">Show bill</button></form>
	</body></html>