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
//$name = mysqli_real_escape_string($conn,$_POST['name']);
$fname = mysqli_real_escape_string($conn,$_POST['fname']);
$foccup = mysqli_real_escape_string($conn,$_POST['foccup']);
$fph = mysqli_real_escape_string($conn,$_POST['fph']);
$Mname = mysqli_real_escape_string($conn,$_POST['Mname']);
$Moccup = mysqli_real_escape_string($conn,$_POST['Moccup']);
$Mph = mysqli_real_escape_string($conn,$_POST['Mph']);

if(isset($_POST['submit'])) {
	  $check=mysqli_query($conn,"select * from PD where fname='$fname' and Mname='$Mname'");
      $checkrows=mysqli_num_rows($check);
   if($checkrows>0) {
      echo "Already Data exists";
   }    
else{
$sql = "INSERT INTO PD (fname,foccup,fph,Mname,Moccup,Mph) VALUES('$fname','$foccup',$fph,'$Mname','$Moccup','$Mph')";

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