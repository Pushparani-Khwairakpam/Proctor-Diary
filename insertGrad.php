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
$cu = mysqli_real_escape_string($conn,$_POST['cu']);
$branch = mysqli_real_escape_string($conn,$_POST['branch']);
$board = mysqli_real_escape_string($conn,$_POST['board']);
$yop = mysqli_real_escape_string($conn,$_POST['yop']);
$percentage = mysqli_real_escape_string($conn,$_POST['percentage']);

if(isset($_POST['submit'])) {
	  $check=mysqli_query($conn,"select * from graduate where cu='$cu' and board='$board'");
      $checkrows=mysqli_num_rows($check);
   if($checkrows>0) {
      echo '<script>alert("Data already exist!You can not add more than one time ")</script>';
   }    
else{
$sql = "INSERT INTO graduate (cu,branch,board,yop,percentage) VALUES('$cu','$branch','$board','$yop',$percentage)";

if($conn->query($sql) === TRUE){
echo '<script>alert("Welcome to Geeks for Geeks")</script>';
}
else
{
echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
}
}
?>