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
$adfname = mysqli_real_escape_string($conn,$_POST['adfname']);
$ciead = mysqli_real_escape_string($conn,$_POST['ciead']);
$seead = mysqli_real_escape_string($conn,$_POST['seead']);
$gradead = mysqli_real_escape_string($conn,$_POST['gradead']);
$jpfname = mysqli_real_escape_string($conn,$_POST['jpfname']);
$ciejp = mysqli_real_escape_string($conn,$_POST['ciejp']);
$seejp = mysqli_real_escape_string($conn,$_POST['seejp']);
$gradejp = mysqli_real_escape_string($conn,$_POST['gradejp']);
$pyfname = mysqli_real_escape_string($conn,$_POST['pyfname']);
$ciepy = mysqli_real_escape_string($conn,$_POST['ciepy']);
$seepy = mysqli_real_escape_string($conn,$_POST['seepy']);
$gradepy = mysqli_real_escape_string($conn,$_POST['gradepy']);
$e4 = mysqli_real_escape_string($conn,$_POST['e4']);
$ee4 = mysqli_real_escape_string($conn,$_POST['ee4']);
$elec4fname = mysqli_real_escape_string($conn,$_POST['elec4fname']);
$e5 = mysqli_real_escape_string($conn,$_POST['e5']);
$ee5 = mysqli_real_escape_string($conn,$_POST['ee5']);
$elec5fname = mysqli_real_escape_string($conn,$_POST['elec5fname']);
$cieelec5 = mysqli_real_escape_string($conn,$_POST['cieelec5']);
$seeelec5 = mysqli_real_escape_string($conn,$_POST['seeelec5']);
$gradeelec5 = mysqli_real_escape_string($conn,$_POST['gradeelec5']);
$m2fname = mysqli_real_escape_string($conn,$_POST['m2fname']);
$ciem2 = mysqli_real_escape_string($conn,$_POST['ciem2']);
$seem2 = mysqli_real_escape_string($conn,$_POST['seem2']);
$gradem2 = mysqli_real_escape_string($conn,$_POST['gradem2']);
$gradess = mysqli_real_escape_string($conn,$_POST['gradess']);
$n = mysqli_real_escape_string($conn,$_POST['n']);
$cgpa = mysqli_real_escape_string($conn,$_POST['cgpa']);
$sgpa = mysqli_real_escape_string($conn,$_POST['sgpa']);


if(isset($_POST['submit'])) {
	  $check=mysqli_query($conn,"select * from diary_sem1 where name='$name' and usn='$usn'");
      $checkrows=mysqli_num_rows($check);
   if($checkrows>0) {
      echo "Data exists";
   }    
else{
$sql = "INSERT INTO diary_sem4 (name,usn,sem4,adfname,ciead,seead,gradead,jpfname,ciejp,seejp,gradejp,pyfname,ciepy,seepy,gradepy,e4,ee4,elec4fname,e5,ee5,elec5fname,cieelec5,seeelec5,gradeelec5,m2fname,ciem2,seem2,gradem2,gradess,n,cgpa,sgpa) VALUES('$name','$usn',$sem,'$adfname',$ciead,$seead,ciead,'$jpfname',$ciejp,$seejp,'$gradejp','$pyfname',$ciepy,$seepy,'$gradepy','$e4','$ee4','$elec4fname','$e5','$ee5','$elec5fname',$cieelec5,$seeelec5,'$gradeelec5','$m2fname',$ciem2,$seem2,'$gradem2','$gradess',$n,$cgpa,$sgpa)";
if($conn->query($sql) === 

	TRUE){
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