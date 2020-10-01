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
    <title>IV Semester</title>
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
                   <?php include('leftbar.php');?>  
                    <!-- /.left-sidebar -->

        




<form action="insert4.php" method="POST">

<h2><center>IV SEMESTER</center></h2></br></br>
<div style="overflow-x:auto;">
<table align="center">
      <th>Name <input type="text" name="name" maxlength="20" size="10" disabled /></th>
      <th>USN <input type="text" name="usn" maxlength="10" size="10" disabled /></th>
	  <th>Semester <input type="number" name="sem" maxlength="1" size="10" disabled /></th>
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
      <td>18MCA4PCAD</td>
      <td>Analysis and Design of Algorithms</td>
	  <td><input type="text" name="adfname" maxlength="20" size="10" disabled /></td>
      <td>3</td>
      <td><input type="number" name="ciead" maxlength="2" size="10" disabled /></td>
      <td><input type="number" name="seead" maxlength="3" size="10" disabled /></td>
      <td><input type="text" name="gradead" maxlength="1" size="10" disabled /></td>
    </tr>
    <tr>
      <td>2</td>
      <td>18MCA4PCAJ </td>
      <td>Advanced Java Programming</td>
	  <td><input type="text" name="jpfname" maxlength="20" size="10" disabled /></td>
      <td>4</td>
      <td><input type="number" name="ciejp" maxlength="2" size="10" disabled /></td>
      <td><input type="number" name="seejp" maxlength="3" size="10" disabled /></td>
      <td><input type="text" name="gradejp" maxlength="1" size="10" disabled /></td>
    </tr>
    <tr>
      <td>3</td>
      <td>18MCA4PCPY</td>
      <td>Programming using Python </td>
	  <td><input type="text" name="pyfname" maxlength="20" size="10" disabled /></td>
      <td>4</td>
      <td><input type="number" name="ciepy" maxlength="2" size="10" disabled /></td>
      <td><input type="number" name="seepy" maxlength="3" size="10" disabled /></td>
      <td><input type="text" name="gradepy" maxlength="1" size="10" disabled /></td>
    </tr>
	<tr>
      <td>4</td>
      <td><label for="scelec4"></label>
	<select id="scelec4" name = "e4" disabled >
	  <option value="none">Choose Elective -4 </option>
	  <option value="18MCA4PEBD">18MCA4PEBD </option>
	  <option value="18MCA4PEAI">18MCA4PEAI </option>
	  <option value="18MCA4PEMC">18MCA4PEMC </option>
	  <option value="18MCA4PEGC">18MCA4PEGC </option>
	 </select></td>
      <td><label for="elec4"></label>
	<select id="elec4" name = "ee4" disabled >
	  <option value="stat">Choose Elective -4 </option>
	  <option value="Big data Analytics">Big data Analytics </option>
	  <option value="Artificial Intelligence">Artificial Intelligence </option>
	  <option value="Mobile Computing">Mobile Computing </option>
	  <option value="Green Computing">Green Computing </option>
	 </select></td>
	  <td><input type="text" name="elec4fname" maxlength="20" size="10" disabled /></td>
      <td>4</td>
      <td><input type="number" name="cieelec4" maxlength="2" size="10" disabled /></td>
      <td><input type="number" name="seeelec4" maxlength="3" size="10" disabled /></td>
      <td><input type="text" name="gradeelec4" maxlength="1" size="10" disabled /></td>

    </tr>
	<tr>
      <td>5</td>
      <td><label for="elec5"></label>
	<select id="elec5" name = "e5" disabled >
	  <option value="none">Choose Elective -5 </option>
	  <option value="18MCA4PEAW">18MCA4PEAW </option>
	  <option value="18MCA4PEMA">18MCA4PEMA </option>
	  <option value="18MCA4PEIT">18MCA4PEIT </option>
	  <option value="18MCA4PENS">18MCA4PENS </option>
	 </select></td>
      <td><label for="scelec5"></label>
	<select id="scelec5" name = "ee5" disabled >
	  <option value="none">Choose Elective -5 </option>
	  <option value="Advanced Web Programming">Advanced Web Programming </option>
	  <option value="Mobile Application Development">Mobile Application Development </option>
	  <option value="Internet of Things">Internet of Things </option>
	  <option value="NOSQL">NOSQL</option>
	 </select></td>
	  <td><input type="text" name="elec5fname" maxlength="20" size="10" disabled /></td>
      <td>4</td>
      <td><input type="number" name="cieelec5" maxlength="2" size="10" disabled /></td>
      <td><input type="number" name="seeelec5" maxlength="3" size="10" disabled /></td>
      <td><input type="text" name="gradeelec5" maxlength="1" size="10" disabled /></td>

    </tr>
	<tr>
      <td>6</td>
      <td>18MCA3PWM2 </td>
      <td>Mini Project - II</td>
	  <td><input type="text" name="m2fname" maxlength="20" size="10" disabled /></td>
      <td>3</td>
      <td><input type="number" name="ciem2" maxlength="2" size="10" disabled /></td>
      <td><input type="number" name="seem2" maxlength="3" size="10" disabled /></td>
      <td><input type="text" name="gradem2" maxlength="1" size="10" disabled /></td>

    </tr>
	<tr>
      <td>7</td>
      <td>1BMCA4NCSS </td>
      <td>Soft Skills </td>
	  <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><input type="text" name="gradess" maxlength="1" size="10" disabled /></td>

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
      <th>Number of Credits Earned <input type="number" name="n"  maxlength="2" size="10" disabled /></th>
      <th>CGPA <input type="number" name="cgpa" step="0.01" maxlength="5" size="10" disabled /></th>
      <th>SGPA <input type="number" name="sgpa" step="0.01" maxlength="5" size="10" disabled /></th>
  </table>
</div>

    
</form>
</body>
</html>