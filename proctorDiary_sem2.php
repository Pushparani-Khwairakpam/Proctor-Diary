


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


<form action="insert2.php" method="POST">
<h2><center>II SEMESTER</center></h2></br></br>
<div style="overflow-x:auto;">
<table align="center">
      <th>Name <input type="text" name="name" maxlength="20" size="10" required/></th>
      <th>USN <input type="text" name="usn" maxlength="10" size="10" required/></th>
	  <th>Semester <input type="number" name="sem2" maxlength="1" size="10" required/></th>
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
      <td>18MCA2PCOP</td>
      <td>Object Oriented Programming with C++</td>
	  <td><input type="text" name="opfname" maxlength="20" size="10" required/></td>
      <td>4</td>
      <td><input type="number" name="cieop" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seeop" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradeop" maxlength="1" size="10" required/></td>
    </tr>
    <tr>
      <td>2</td>
      <td>18MCA2PCDS </td>
      <td>Data Structures using C</td>
	  <td><input type="text" name="dsfname" maxlength="20" size="10" required/></td>
      <td>4</td>
      <td><input type="number" name="cieds" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seeds" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradeds" maxlength="1" size="10" required/></td>

    </tr>
    <tr>
      <td>3</td>
      <td>18MCA2PCDB</td>
      <td>Database Management System</td>
	  <td><input type="text" name="dbfname" maxlength="20" size="10" required/></td>
      <td>4</td>
      <td><input type="number" name="ciedb" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seedb" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradedb" maxlength="1" size="10" required/></td>

    </tr>
	<tr>
      <td>4</td>
      <td><label for="scelec1"></label>
	<select id="scelec1" name = "e1" required>
	  <option value="none">Choose Elective -1 </option>
	  <option value="18MCA2PEST">18MCA2PEST </option>
	  <option value="18MCA2PEOR">18MCA2PEOR </option>
	  <option value="18MCA2PENM">18MCA2PENM </option>
	  <option value="18MCA2PEGT">18MCA2PEGT </option>
	 </select></td>
      <td><label for="elec1"></label>
	<select id="elec1" name = "ee1" required>
	  <option value="stat">Choose Elective -1 </option>
	  <option value="Statistics">Statistics </option>
	  <option value="Operations Research">Operations Research </option>
	  <option value="Numerical Methods">Numerical Methods </option>
	  <option value="Graph Theory">Graph Theory </option>
	 </select></td>
	  <td><input type="text" name="elec1fname" maxlength="20" size="10" required/></td>
      <td>4</td>
      <td><input type="number" name="cieelec1" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seeelec1" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradeelec1" maxlength="1" size="10" required/></td>

    </tr>
	<tr>
      <td>5</td>
      <td>18MCA2PCSE</td>
      <td>Software Engineering</td>
	  <td><input type="text" name="sefname" maxlength="20" size="10" required/></td>
      <td>3</td>
      <td><input type="number" name="ciese" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seese" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradese" maxlength="1" size="10" required/></td>

    </tr>
	<tr>
      <td>6</td>
      <td>18MCA2HSES </td>
      <td>Entrepreneurship</td>
	  <td><input type="text" name="esfname" maxlength="20" size="10" required/></td>
      <td>2</td>
      <td><input type="number" name="ciees" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seees" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradees" maxlength="1" size="10" required/></td>

    </tr>
	<tr>
      <td>7</td>
      <td>18MCA2SRS1 </td>
      <td>Seminar -1</td>
	  <td><input type="text" name="s1fname" maxlength="20" size="10" required/></td>
      <td>1</td>
      <td><input type="number" name="cies1" maxlength="2" size="10" required/></td>
      <td><input type="number" name="sees1" maxlength="3" size="10" required/></td>
      <td><input type="text" name="grades1" maxlength="1" size="10" required/></td>

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
  </br></br>
  <table align="center">
      <th>Number of Credits Earned <input type="number" name="tcr" maxlength="2" size="10" required/></th>
      <th>CGPA <input type="number" step="0.01" name="cgpa" maxlength="5" size="10" required/></th>
      <th>SGPA <input type="number"  step="0.01" name="sgpa" maxlength="5" size="10" required/></th>
  </table>
</div>
<div align="center">
      <button type="submit" class="button">Save</button>
    </div>
    
</form>
</div>
</body>
</html>
