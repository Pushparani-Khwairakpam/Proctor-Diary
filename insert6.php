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
$i1fname = mysqli_real_escape_string($conn,$_POST['i1fname']);
$ciei1 = mysqli_real_escape_string($conn,$_POST['ciei1']);
$seei1 = mysqli_real_escape_string($conn,$_POST['seei1']);
$gradei1 = mysqli_real_escape_string($conn,$_POST['gradei1']);
$i2fname = mysqli_real_escape_string($conn,$_POST['i2fname']);
$ciei2 = mysqli_real_escape_string($conn,$_POST['ciei2']);
$seei2 = mysqli_real_escape_string($conn,$_POST['seei2']);
$gradei2 = mysqli_real_escape_string($conn,$_POST['gradei2']);
$mpfname = mysqli_real_escape_string($conn,$_POST['mpfname']);
$ciemp = mysqli_real_escape_string($conn,$_POST['ciemp']);
$seemp = mysqli_real_escape_string($conn,$_POST['seemp']);
$grademp = mysqli_real_escape_string($conn,$_POST['grademp']);

$prfname = mysqli_real_escape_string($conn,$_POST['prfname']);
$ciepr = mysqli_real_escape_string($conn,$_POST['ciepr']);
$seepr = mysqli_real_escape_string($conn,$_POST['seepr']);
$gradepr = mysqli_real_escape_string($conn,$_POST['gradepr']);
$tcr = mysqli_real_escape_string($conn,$_POST['tcr']);
$cgpa = mysqli_real_escape_string($conn,$_POST['cgpa']);
$sgpa = mysqli_real_escape_string($conn,$_POST['sgpa']);

if(isset($_POST['submit'])) {
	  $check=mysqli_query($conn,"select * from diary_sem1 where name='$name' and usn='$usn'");
      $checkrows=mysqli_num_rows($check);
   if($checkrows>0) {
      echo "Data exists";
   }    
else{
	$sql = "INSERT INTO diary_sem6 (name,usn,sem6,i1fname,ciei1,seei1,gradei1,i2fname,ciei2,seei2,gradei2,mpfname,ciemp,seemp,grademp,prfname,ciepr,seepr,gradepr,tcr,cgpa,sgpa) VALUES('$name','$usn',$sem,'$i1fname',$ciei1,$seei1,'$gradei1','$i2fname',$ciei2,$seei2,'$gradei2','$mpfname',$ciemp,$seemp,'$grademp','$prfname',$ciepr,$seepr,'$gradepr',$tcr,$cgpa,$sgpa)";
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