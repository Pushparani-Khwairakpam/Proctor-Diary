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
$sem2 = mysqli_real_escape_string($conn,$_POST['sem2']);
$opfname = mysqli_real_escape_string($conn,$_POST['opfname']);
$cieop = mysqli_real_escape_string($conn,$_POST['cieop']);
$seeop = mysqli_real_escape_string($conn,$_POST['seeop']);
$gradeop = mysqli_real_escape_string($conn,$_POST['gradeop']);
$dsfname = mysqli_real_escape_string($conn,$_POST['dsfname']);
$cieds = mysqli_real_escape_string($conn,$_POST['cieds']);
$seeds = mysqli_real_escape_string($conn,$_POST['seeds']);
$gradeds = mysqli_real_escape_string($conn,$_POST['gradeds']);
$dbfname = mysqli_real_escape_string($conn,$_POST['dbfname']);
$ciedb = mysqli_real_escape_string($conn,$_POST['ciedb']);
$seedb = mysqli_real_escape_string($conn,$_POST['seedb']);
$gradedb = mysqli_real_escape_string($conn,$_POST['gradedb']);
$e1 = mysqli_real_escape_string($conn,$_POST['e1']);
$ee1 = mysqli_real_escape_string($conn,$_POST['ee1']);
$elec1fname = mysqli_real_escape_string($conn,$_POST['elec1fname']);
$sefname = mysqli_real_escape_string($conn,$_POST['sefname']);
$ciese = mysqli_real_escape_string($conn,$_POST['ciese']);
$seese = mysqli_real_escape_string($conn,$_POST['seese']);
$gradese = mysqli_real_escape_string($conn,$_POST['gradese']);
$esfname = mysqli_real_escape_string($conn,$_POST['esfname']);
$ciees = mysqli_real_escape_string($conn,$_POST['ciees']);
$seees = mysqli_real_escape_string($conn,$_POST['seees']);
$gradees = mysqli_real_escape_string($conn,$_POST['gradees']);
$s1fname = mysqli_real_escape_string($conn,$_POST['s1fname']);
$cies1 = mysqli_real_escape_string($conn,$_POST['cies1']);
$sees1 = mysqli_real_escape_string($conn,$_POST['sees1']);
$grades1 = mysqli_real_escape_string($conn,$_POST['grades1']);
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
   $sql = "INSERT INTO diary_sem2 (name,usn,sem2,opfname,cieop,seeop,gradeop,dsfname,cieds,seeds,gradeds,dbfname,ciedb,seedb,gradedb,e1,ee1,elec1fname,sefname,ciese,seese,gradese,esfname,ciees,seees,gradees,s1fname,cies1,sees1,grades1,tcr,cgpa,sgpa) VALUES('$name','$usn',$sem2,'$opfname',$cieop,$seeop,'$gradeop','$dsfname',$cieds,$seeds,'$gradeds','$dbfname',$ciedb,$seedb,'$gradedb','$e1','$ee1','$elec1fname','$sefname',$ciese,$seese,'$gradese','$esfname',$ciees,$seees,'$gradees','$s1fname',$cies1,$sees1,'$grades1',$tcr,$cgpa,$sgpa)";
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