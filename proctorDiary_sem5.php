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
<form action="insert5.php" method="POST">
    
<h2><center>V SEMESTER</center></h2></br></br>
<div style="overflow-x:auto;">
<table align="center">
      <th>Name <input type="text" name="name" maxlength="20" size="10" required/></th>
      <th>USN <input type="text" name="usn" maxlength="10" size="10" required/></th>
	  <th>Semester <input type="number" name="sem" maxlength="1" size="10" required/></th>
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
      <td>18MCA5HSSM</td>
      <td>Software Project Management</td>
	  <td><input type="text" name="smfname" maxlength="20" size="10" required/></td>
      <td>3</td>
      <td><input type="number" name="ciesm" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seesm" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradesm" maxlength="1" size="10" required/></td>
    </tr>
    <tr>
      <td>2</td>
      <td>18MCA5PCWP </td>
      <td>Windows Application Programming
using C#. Net </td>
	  <td><input type="text" name="wpfname" maxlength="20" size="10" required/></td>
      <td>4</td>
      <td><input type="number" name="ciewp" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seewp" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradewp" maxlength="1" size="10" required/></td>
    </tr>
    <tr>
      <td>3</td>
      <td>18MCA5PCMU</td>
      <td>Modeling with UML </td>
	  <td><input type="text" name="mufname" maxlength="20" size="10" required/></td>
      <td>3</td>
      <td><input type="number" name="ciemu" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seemu" maxlength="3" size="10" required/></td>
      <td><input type="text" name="grademu" maxlength="1" size="10" required/></td>
    </tr>
	<tr>
      <td>4</td>
      <td><label for="scelec6"></label>
	<select id="scelec6" name="e6" required>
	  <option value="none">Choose Elective -6 </option>
	  <option value="18MCA5PEDL">18MCA5PEDL </option>
	  <option value="18MCA5PEAN">18MCA5PEAN </option>
	  <option value="18MCA5PEST">18MCA5PEST </option>
	  <option value="18MCA5PEWS">18MCA5PEWS </option>
	 </select></td>
      <td><label for="elec6"></label>
	<select id="elec6" name="ee6" required>
	  <option value="stat">Choose Elective -6 </option>
	  <option value="Deep Learning">Deep Learning </option>
	  <option value="Advanced computer Networks">Advanced computer Networks </option>
	  <option value="Software Testing">Software Testing </option>
	  <option value="Web Services">Web Services </option>
	 </select></td>
	  <td><input type="text" name="elec6fname" maxlength="20" size="10" required/></td>
      <td>4</td>
      <td><input type="number" name="cieelec6" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seeelec6" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradeelec6" maxlength="1" size="10" required/></td>

    </tr>
	<tr>
      <td>5</td>
      <td><label for="elec7"></label>
	<select id="elec7" name="e7" required>
	  <option value="none">Choose Elective -7 </option>
	  <option value="18MCA5PESC">18MCA5PESC </option>
	  <option value="18MCA5PECS">18MCA5PECS </option>
	  <option value="18MCA5PESA">18MCA5PESA </option>
	  <option value="18MCA5PEBC">18MCA5PEBC </option>
	 </select></td>
      <td><label for="scelec7"></label>
	<select id="scelec7" name="ee7" required>
	  <option value="none">Choose Elective -7 </option>
	  <option value="Soft Computing">Soft Computing </option>
	  <option value="Cyber Security">Cyber Security </option>
	  <option value="Software Architecture & Patterns">Software Architecture & Patterns </option>
	  <option value="Block Chain Technology">Block Chain Technology</option>
	 </select></td>
	  <td><input type="text" name="elec7fname" maxlength="20" size="10" required/></td>
      <td>4</td>
      <td><input type="number" name="cieelec7" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seeelec7" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradeelec7" maxlength="1" size="10" required/></td>

    </tr>
	<tr>
      <td>6</td>
      <td>18MCA5PWM3 </td>
      <td>Mini Project - III</td>
	  <td><input type="text" name="m3fname" maxlength="20" size="10" required/></td>
      <td>2</td>
      <td><input type="number" name="ciem3" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seem3" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradem3" maxlength="1" size="10" required/></td>

    </tr>
	<tr>
      <td>7</td>
      <td>18MCA5SRS2 </td>
      <td>Seminar 2 </td>
	  <td><input type="text" name="s2fname" maxlength="20" size="10" required/></td>
      <td>2</td>
      <td><input type="number" name="cies2" maxlength="2" size="10" required/></td>
      <td><input type="number" name="sees2" maxlength="3" size="10" required/></td>
      <td><input type="text" name="grades2" maxlength="1" size="10" required/></td>

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
      <th>Number of Credits Earned <input type="number" name="tcr" maxlength="2" size="10" required/></th>
      <th>CGPA <input type="number" name="cgpa" step="0.01" maxlength="5" size="10" required/></th>
      <th>SGPA <input type="number" name="sgpa" step="0.01" maxlength="5" size="10" required/></th>
  </table>
</div>
<div align="center">
      <button type="submit" class="button">Save</button>
    </div>
    
</form>
</body>
</html>