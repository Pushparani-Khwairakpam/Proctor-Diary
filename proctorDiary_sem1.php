
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Student| Select Semester </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        



    <meta charset="UTF-8">
    <title>I Semester</title>
    <style>


#sem1 {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 60%;
  min-width: 300px;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>

    


<body id="bg">
<div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('topbarSTU.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('leftbarSTU.php');?>  
                    <!-- /.left-sidebar -->


<div class="container-fluid">
<form action="insert1.php" method="POST">
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
if (isset($_POST['submit']))
{
  $name = $_POST['name'];
  $usn  = $_POST['usn'];
  if (mysqli_query("Insert Into diary_sem1(name,usn) values ('$name','$usn')"))
  {
    header("Location:insert1.php");
    exit;
  }
 }
?>

<h2><center>I SEMESTER</center></h2></br></br>
<div style="overflow-x:auto;">

<table align="center">
<tr>
      <th>Name</th>
      <th>USN</th>
	  <th>Semester</th></tr>
    <td>Pushpa Kh</td>
    <td>1bm18mca17</td>
    <td>1 Semester</td>
  </table>
    </br></br>
  <table align="center">
    <tr>
      <th>SL.NO.</th>
      <th>Subject Code</th>
      <th>Course Title</th>
	  <th>Faculty Name </th>
      <th>Credits</th>
      <th>CIE</th>
      <th>SEE</th>
      <th>Grade</th>

    </tr>
    <tr>
      <td>1</td>
      <td>18MCA1PCUC</td>
      <td>Unix & Advanced C Programming</td>
	  <td><input type="text" name="ucfname" maxlength="20" size="10" required/></td>
      <td>5</td>
      <td><input type="number" name="cieuc" maxlength="2" size="10" required /></td>
      <td><input type="number" name="seeuc" maxlength="3" size="10" required /></td>
      <td><input type="text" name="gradeuc" maxlength="1" size="10" required /></td>
    </tr>
    <tr>
      <td>2</td>
      <td>18MCA1PCCO </td>
      <td>Computer Organization</td>
	  <td><input type="text" name="cofname" maxlength="20" size="10" required/></td>
      <td>3</td>
      <td><input type="number" name="cieco" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seeco" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradeco" maxlength="1" size="10" required/></td>

    </tr>
    <tr>
      <td>3</td>
      <td>18MCA1BSDM</td>
      <td>Discrete Mathematics</td>
	  <td><input type="text" name="dmfname" maxlength="20" size="10" required/></td>
      <td>4</td>
      <td><input type="number" name="ciedm" maxlength="2" size="10" required /></td>
      <td><input type="number" name="seedm" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradedm" maxlength="1" size="10" required/></td>

    </tr>
	<tr>
      <td>4</td>
      <td>18MCA1PCWD</td>
      <td>Web Application Development</td>
	  <td><input type="text" name="wdfname" maxlength="20" size="10" required /></td>
      <td>4</td>
      <td><input type="number" name="ciewd" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seewd" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradewd" maxlength="1" size="10" required/></td>

    </tr>
	<tr>
      <td>5</td>
      <td>18MCA1PCOS</td>
      <td>Operating System</td>
	  <td><input type="text" name="osfname" maxlength="20" size="10" required/></td>
      <td>4</td>
      <td><input type="number" name="cieos" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seeos" maxlength="3" size="10" required /></td>
      <td><input type="text" name="gradeos" maxlength="1" size="10" required/></td>

    </tr>
	<tr>
      <td>6</td>
      <td>18MCA1HSPE</td>
      <td>Professional Communication and Ethics</td>
	  <td><input type="text" name="pefname" maxlength="20" size="10" required /></td>
      <td>2</td>
      <td><input type="number" name="ciepe" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seepe" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradepe" maxlength="1" size="10" required/></td>

    </tr>
	<tr>
      <td colspan="4">Total</td>
      <td>22</td>
	  <td></td>
	  <td></td>
	  <td></td>
    </tr>
  </table>
  </br></br>
  <table align="center">
      <th>Number of Credits Earned <input type="number" name="n" maxlength="2" size="10" required/></th>
      <th>CGPA <input type="number" step="0.01" name="c" maxlength="4" size="10" required /></th>
      <th>SGPA <input type="number" step="0.01" name="s" maxlength="4" size="10"  required/></th>
  </table>
</div>

    <div align="center">
      <button type="submit" name="submit" class="button" onclick="return mess(); ">Save</button>
    </div>
    
</form>
<script type="text/javascript">
  function mess()
  {
    alert("Your record is successfully saved!");
    return true;

  }
</script>
</div>
</body>
</html>
