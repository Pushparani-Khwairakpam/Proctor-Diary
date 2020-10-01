<?php
#session_start();
$mysqli= new mysqli('localhost','root','','proctord') or die(mysqli_error($mysqli));

$update = false;
$sl_no=0;
$name = '';
$username = '';
$designation = '';
$mail_id='';
#$PHONE_NUMBER='';
#$facult_CP='';

if(isset($_POST['save'])){
	$sl_no=$_POST['sl_no'];
	$name=$_POST['name'];
	$username=$_POST['username'];
	//$usn=$_POST['usn'];
	$designation=$_POST['designation'];
	$mail_id=$_POST['mail_id'];

	$mysqli->query("INSERT INTO faculty (sl_no,username,name,designation,mail_id) VALUES('$sl_no','$username','$name','$designation','$mail_id')") or die($mysqli->error());

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";

	header("location: editDashProctor.php");

}

if (isset($_GET['delete'])){
	$sl_no= $_GET['delete'];
	$mysqli->query("DELETE FROM faculty WHERE sl_no = $sl_no") or die($mysqli->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header("location: editDashProctor.php");
} 
if (isset($_GET['edit'])){
	$sl_no = $_GET['edit'];
	#$name = $_GET['edit'];
	#$NAME = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM faculty WHERE sl_no = $sl_no") or die($mysqli->error());
   #if (count($result)==1){
     	 #if (is_array($result) && count($result)==1){

		$row = $result->fetch_array();
		$sl_no = $row['sl_no'];
		$name= $row['name'];
		$username = $row['username'];
		$designation = $row['designation'];
		$mail_id = $row['mail_id'];
		
		


	#}
} 
if (isset($_POST['update'])){
	$sl_no = $_POST['sl_no'];
	$name = $_POST['name'];
	$username = $_POST['username'];
	$designation = $_POST['designation'];
	$mail_id = $_POST['mail_id'];
	
		#$email = $_POST['email'];
	
		$mysqli->query("UPDATE faculty SET sl_no='$sl_no',name='$name',username='$username', designation='$designation', mail_id='$mail_id'  WHERE sl_no = '$sl_no' ") or die($mysqli->error());

		$_SESSION['message'] = "Record has been updated!";
		$_SESSION['msg_type'] = "warning";
		header("location: editDashProctor.php");
		



	} 

?>