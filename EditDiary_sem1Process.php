<?php
#session_start();
$mysqli= new mysqli('localhost','root','','proctord') or die(mysqli_error($mysqli));

$update = false;
$id=0;
$name = '';
$usn = '';
$sem = '';
#$facult_CP='';

if(isset($_POST['save'])){
	$id=$_POST['id'];
	$name=$_POST['name'];
	$usn=$_POST['usn'];
	//$usn=$_POST['usn'];
	$sem=$_POST['sem'];
	#$facult_CP=$_POST['facult_CP'];

	$mysqli->query("INSERT INTO diary_sem1 (id,name,usn,sem) VALUES('$id','$name','$usn','$sem')") or die($mysqli->error());

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";

	header("location: EditDiary_sem1.php");

}

if (isset($_GET['delete'])){
	$id= $_GET['delete'];
	$mysqli->query("DELETE FROM diary_sem1 WHERE id = $id") or die($mysqli->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header("location: EditDiary_sem1.php");
} 
if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	#$name = $_GET['edit'];
	#$NAME = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM diary_sem1 WHERE id = $id") or die($mysqli->error());
   #if (count($result)==1){
     	 #if (is_array($result) && count($result)==1){

		$row = $result->fetch_array();
		$id = $row['id'];
		$name = $row['name'];
		$usn = $row['usn'];
		$sem = $row['sem'];
		
		


	#}
} 
if (isset($_POST['update'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$usn = $_POST['usn'];
	$sem = $_POST['sem1'];
	$facult_CP=$_POST['facult_CP'];
		#$email = $_POST['email'];
		#$phone_number = $_POST['phone_number'];

		$mysqli->query("UPDATE diary_sem1 SET id='$id',name='$name',usn='$usn', sem='$sem'  WHERE id = '$id' ") or die($mysqli->error());

		$_SESSION['message'] = "Record has been updated!";
		$_SESSION['msg_type'] = "warning";
		header("location: EditDiary_sem1.php");
		



	} 

?>