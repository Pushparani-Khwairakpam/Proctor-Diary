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
$smfname = mysqli_real_escape_string($conn,$_POST['smfname']);
$ciesm = mysqli_real_escape_string($conn,$_POST['ciesm']);
$seesm = mysqli_real_escape_string($conn,$_POST['seesm']);
$gradesm = mysqli_real_escape_string($conn,$_POST['gradesm']);
$wpfname = mysqli_real_escape_string($conn,$_POST['wpfname']);
$ciewp = mysqli_real_escape_string($conn,$_POST['ciewp']);
$seewp = mysqli_real_escape_string($conn,$_POST['seewp']);
$gradewp = mysqli_real_escape_string($conn,$_POST['gradewp']);
$mufname = mysqli_real_escape_string($conn,$_POST['mufname']);
$ciemu = mysqli_real_escape_string($conn,$_POST['ciemu']);
$seemu = mysqli_real_escape_string($conn,$_POST['seemu']);
$grademu = mysqli_real_escape_string($conn,$_POST['grademu']);
$e6 = mysqli_real_escape_string($conn,$_POST['e6']);
$ee6 = mysqli_real_escape_string($conn,$_POST['ee6']);
$elec6fname = mysqli_real_escape_string($conn,$_POST['elec6fname']);
$e7 = mysqli_real_escape_string($conn,$_POST['e7']);
$ee7 = mysqli_real_escape_string($conn,$_POST['ee7']);
$elec7fname = mysqli_real_escape_string($conn,$_POST['elec7fname']);
$cieelec7 = mysqli_real_escape_string($conn,$_POST['cieelec7']);
$seeelec7 = mysqli_real_escape_string($conn,$_POST['seeelec7']);
$gradeelec7 = mysqli_real_escape_string($conn,$_POST['gradeelec7']);
$m3fname = mysqli_real_escape_string($conn,$_POST['m3fname']);
$ciem3 = mysqli_real_escape_string($conn,$_POST['ciem3']);
$seem3 = mysqli_real_escape_string($conn,$_POST['seem3']);
$gradem3 = mysqli_real_escape_string($conn,$_POST['gradem3']);
$s2fname = mysqli_real_escape_string($conn,$_POST['grades2']);
$cies2 = mysqli_real_escape_string($conn,$_POST['cies2']);
$sees2 = mysqli_real_escape_string($conn,$_POST['sees2']);
$grades2 = mysqli_real_escape_string($conn,$_POST['grades2']);
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
$sql = "INSERT INTO diary_sem5 (name,usn,sem5,smfname,ciesm,seesm,gradesm,wpfname,ciewp,seewp,gradewp,mufname,ciemu,seemu,grademu,e6,ee6,elec6fname,e7,ee7,elc7fname,cieelec7,seeelec7,gradeelec7,m3fname,ciem3,seem3,gradem3,s2fname,cies2,sees2,grades2,tcr,cgpa,sgpa) VALUES('$name','$usn',$sem,'$smfname',$ciesm,$seesm,'$gradesm','$wpfname',$ciewp,$seewp,'$gradewp','$mufname',$ciemu,$seemu,'$grademu','$e6','$ee6','$elec6fname','$e7','$ee7','$elec7fname',$cieelec7,$seeelec7,'$gradeelec7','$m3fname',$ciem3,$seem3,'$gradem3','$s2fname',$cies2,$sees2,'$grades2',$tcr,$cgpa,$sgpa)";
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