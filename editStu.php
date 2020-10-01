<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "proctord";
//Creating connection for mysqli
$conn = new mysqli($server, $user, $pass, $dbname);
//Checking connection
if($conn->connect_error){
die("Connection failed:" . $conn->connect_error);
}


$run = mysqli_query("select * from sem4 where username = '1bf18mca04'");
while ($row = mysql_fetch_array($run)) {
	$username = $row[0];
	# code...
}
 ?>