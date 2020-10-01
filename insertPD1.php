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
$lgn = mysqli_real_escape_string($conn,$_POST['lgn']);
$lgpn = mysqli_real_escape_string($conn,$_POST['lgpn']);
$lga = mysqli_real_escape_string($conn,$_POST['lga']);
$pa = mysqli_real_escape_string($conn,$_POST['pa']);
$pra = mysqli_real_escape_string($conn,$_POST['pra']);

if(isset($_POST['submit'])) {
	  $check=mysqli_query($conn,"select * from PD1 where lgn='$lgn' and pa='$pa'");
      $checkrows=mysqli_num_rows($check);
   if($checkrows>0) {
      echo "Already Data exists";
   }    
else{
$sql = "INSERT INTO PD1 (lgn,lgpn,lga,pa,pra) VALUES('$lgn',$lgpn,'$lga','$pa','$pra')";

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