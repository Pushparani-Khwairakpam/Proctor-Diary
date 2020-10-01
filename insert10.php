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
$school = mysqli_real_escape_string($conn,$_POST['school']);
$board = mysqli_real_escape_string($conn,$_POST['board']);
$yop = mysqli_real_escape_string($conn,$_POST['yop']);
$percentage = mysqli_real_escape_string($conn,$_POST['percentage']);

if(isset($_POST['submit'])) {
	  $check=mysqli_query($conn,"select * from 10th where percentage='$percentage' and board='$board'");
      $checkrows=mysqli_num_rows($check);
   if($checkrows>0) {
      echo "Already Data exists";
   }    
else{
$sql = "INSERT INTO 10th (school,board,yop,percentage) VALUES('$school','$board','$yop',$percentage)";

if($conn->query($sql) === TRUE){
echo "Record Added Sucessfully";
}
else
{
echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
}
}
?>