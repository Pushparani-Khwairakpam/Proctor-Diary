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
$sem1 = mysqli_real_escape_string($conn,$_POST['sem1']);
$ucfname = mysqli_real_escape_string($conn,$_POST['ucfname']);
$cieuc = mysqli_real_escape_string($conn,$_POST['cieuc']);
$seeuc = mysqli_real_escape_string($conn,$_POST['seeuc']);
$gradeuc = mysqli_real_escape_string($conn,$_POST['gradeuc']);
$cofname = mysqli_real_escape_string($conn,$_POST['cofname']);
$cieco = mysqli_real_escape_string($conn,$_POST['cieco']);
$seeco = mysqli_real_escape_string($conn,$_POST['seeco']);
$gradeco = mysqli_real_escape_string($conn,$_POST['gradeco']);
$dmfname = mysqli_real_escape_string($conn,$_POST['dmfname']);
$ciedm = mysqli_real_escape_string($conn,$_POST['ciedm']);
$seedm = mysqli_real_escape_string($conn,$_POST['seedm']);
$gradedm = mysqli_real_escape_string($conn,$_POST['gradedm']);
$wdfname = mysqli_real_escape_string($conn,$_POST['wdfname']);
$ciewd = mysqli_real_escape_string($conn,$_POST['ciewd']);
$seewd = mysqli_real_escape_string($conn,$_POST['seewd']);
$gradewd = mysqli_real_escape_string($conn,$_POST['gradewd']);
$osfname = mysqli_real_escape_string($conn,$_POST['osfname']);
$cieos = mysqli_real_escape_string($conn,$_POST['cieos']);
$seeos = mysqli_real_escape_string($conn,$_POST['seeos']);
$gradeos = mysqli_real_escape_string($conn,$_POST['gradeos']);
$pefname = mysqli_real_escape_string($conn,$_POST['pefname']);
$ciepe = mysqli_real_escape_string($conn,$_POST['ciepe']);
$seepe = mysqli_real_escape_string($conn,$_POST['seepe']);
$gradepe = mysqli_real_escape_string($conn,$_POST['gradepe']);
$n = mysqli_real_escape_string($conn,$_POST['n']);
$c = mysqli_real_escape_string($conn,$_POST['c']);
$s = mysqli_real_escape_string($conn,$_POST['s']);

if(isset($_POST['submit'])) {
	  $check=mysqli_query($conn,"select * from diary_sem1 where name='$name' and usn='$usn'");
      $checkrows=mysqli_num_rows($check);
   if($checkrows>0) {
      echo "Data exists";
   }    
else{
$sql = "INSERT INTO diary_sem1 (name, usn, sem, facult_CP, facult_CO, facult_DM, facult_WAP, facult_OS, facult_PCE, cieCP_sem1, cieCO_sem1, cieDM_sem1, cieWAD_sem1, cieOS_sem1, ciePCE_sem1, seeCP_sem1, seeCO_sem1, seeDM_sem1, seeWAD_sem1, seeOS_sem1, seePCE_sem1, gradeCP_sem1, gradeCO_sem1, gradeDM_sem1,gradeWAD_sem1,gradeOS_sem1, gradePCE_sem1, num_credit_sem1, cgpa_sem1, sgpa_sem1) VALUES('$name','$usn',$sem1,'$ucfname','$cofname','$dmfname','$wdfname','$osfname','$pefname',$cieuc,$cieco,$ciedm,$ciewd,$cieos,$ciepe,$seeuc,$seeco,$seedm,$seewd,$seeos,$seepe,'$gradeuc','$gradeco','$gradedm','$gradewd','$gradeos','$gradepe',$n,$c,$s)";

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