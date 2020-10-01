<?php
#session_start();
$mysqli= new mysqli('localhost','root','','proctord') or die(mysqli_error($mysqli));

$update = false;
$ID=0;

$EMAIL='';
$PHONE_NUMBER='';
#$facult_CP='';

if(isset($_POST['save'])){
	
	
	//$usn=$_POST['usn'];

	#$facult_CP=$_POST['facult_CP'];

	$mysqli->query("INSERT INTO sem4 (ID) VALUES('$ID')") or die($mysqli->error());

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";

	header("location: editDash.php");

}

if (isset($_GET['delete'])){
	$ID= $_GET['delete'];
	$mysqli->query("DELETE FROM sem4 WHERE ID = $ID") or die($mysqli->error());

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header("location: editDash.php");
} 
if (isset($_GET['edit'])){
	$ID = $_GET['edit'];
	#$name = $_GET['edit'];
	#$NAME = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM sem4 WHERE ID = $ID") or die($mysqli->error());
   #if (count($result)==1){
     	 #if (is_array($result) && count($result)==1){

		$row = $result->fetch_array();
		
		$EMAIL = $row['EMAIL'];
		$PHONE_NUMBER=$row['PHONE_NUMBER'];
		


	#}
} 
if (isset($_POST['update'])){
	

	$EMAIL = $_POST['email'];
	
		#$email = $_POST['email'];
	$PHONE_NUMBER = $_POST['phno'];

		$mysqli->query("UPDATE sem4 SET  EMAIL='$EMAIL',PHONE_NUMBER='$PHONE_NUMBER'  WHERE ID = '$ID' ") or die($mysqli->error());

		$_SESSION['message'] = "Record has been updated!";
		$_SESSION['msg_type'] = "warning";
		header("location: editDash.php");
		



	} 

?>