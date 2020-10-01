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

$name = mysqli_real_escape_string($conn,$_POST['name']);
$usn = mysqli_real_escape_string($conn,$_POST['usn']);
$sem = mysqli_real_escape_string($conn,$_POST['sem']);
$mlfname = mysqli_real_escape_string($conn,$_POST['mlfname']);
$cieml = mysqli_real_escape_string($conn,$_POST['cieml']);
$seeml = mysqli_real_escape_string($conn,$_POST['seeml']);
$grademl = mysqli_real_escape_string($conn,$_POST['grademl']);
$jpfname = mysqli_real_escape_string($conn,$_POST['jpfname']);
$ciejp = mysqli_real_escape_string($conn,$_POST['ciejp']);
$seejp = mysqli_real_escape_string($conn,$_POST['seejp']);
$gradejp = mysqli_real_escape_string($conn,$_POST['gradejp']);
$nwfname = mysqli_real_escape_string($conn,$_POST['nwfname']);
$cienw = mysqli_real_escape_string($conn,$_POST['cienw']);
$seenw = mysqli_real_escape_string($conn,$_POST['seenw']);
$gradenw = mysqli_real_escape_string($conn,$_POST['gradenw']);
$e2 = mysqli_real_escape_string($conn,$_POST['e2']);
$ee2 = mysqli_real_escape_string($conn,$_POST['ee2']);
$elec2fname = mysqli_real_escape_string($conn,$_POST['elec2fname']);
$e3 = mysqli_real_escape_string($conn,$_POST['e3']);
$ee3 = mysqli_real_escape_string($conn,$_POST['ee3']);
$elec3fname = mysqli_real_escape_string($conn,$_POST['elec3fname']);
$m1fname = mysqli_real_escape_string($conn,$_POST['m1fname']);
$ciem1 = mysqli_real_escape_string($conn,$_POST['ciem1']);
$seem1 = mysqli_real_escape_string($conn,$_POST['seem1']);
$gradem1 = mysqli_real_escape_string($conn,$_POST['gradem1']);
$grademc = mysqli_real_escape_string($conn,$_POST['grademc']);
$tcr = mysqli_real_escape_string($conn,$_POST['tcr']);
$cgpa = mysqli_real_escape_string($conn,$_POST['cgpa']);
$sgpa = mysqli_real_escape_string($conn,$_POST['sgpa']);

if(isset($_POST['submit'])) {
	  $check=mysqli_query($conn,"select * from diary_sem1 where name='$name' and usn='$usn'");
      $checkrows=mysqli_num_rows($check);
   if($checkrows>0) {
      echo "Data exists";
   }    
else
{
$sql = "INSERT INTO diary_sem3 (name,usn,sem3,mlfname,cieml,seeml,grademl,jpfname,ciejp,seejp,gradejp,nwfname,cienw,seenw,gradenw,e2,ee2,elec2fname,e3,ee3,elec3fname,m1fname,ciem1,seem1,gradem1,grademc,tcr,cgpa,sgpa) VALUES('$name','$usn',$sem,'$mlfname',$cieml,$seeml,'$grademl','$jpfname',$ciejp,$seejp,'$gradejp','$nwfname',$cienw,$seenw,'$gradenw','$e2','$ee2','$elec2fname','$e3','$ee3','$elec3fname','$m1fname',$ciem1,$seem1,'$gradem1','$grademc',$tcr,$cgpa,$sgpa)";
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