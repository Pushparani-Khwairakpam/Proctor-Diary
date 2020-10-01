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
    <title>III Semester</title>
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

<form action="insert3.php" method="POST">
    
<h2><center>III SEMESTER</center></h2></br></br>
<div style="overflow-x:auto;">
<table align="center" width="80%">
      <th>Name <input type="text" name="name" maxlength="20" size="10" required/></th>
      <th>USN <input type="text" name="usn" maxlength="10" size="10" required/></th>
	  <th>Semester <input type="number" name="sem" maxlength="1" size="10" required /></th>
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
      <td>18MCA3PCML</td>
      <td>Machine Learning</td>
	  <td><input type="text" name="mlfname" maxlength="20" size="10" required/></td>
      <td>4</td>
      <td><input type="number" name="cieml" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seeml" maxlength="3" size="10" required/></td>
      <td><input type="text" name="grademl" maxlength="1" size="10" required/></td>
    </tr>
    <tr>
      <td>2</td>
      <td>18MCA3PCJP </td>
      <td>Programming using Java</td>
	  <td><input type="text" name="jpfname" maxlength="20" size="10" required/></td>
      <td>4</td>
      <td><input type="number" name="ciejp" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seejp" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradejp" maxlength="1" size="10" required/></td>
    </tr>
    <tr>
      <td>3</td>
      <td>18MCA3PCNW</td>
      <td>Computer Networks </td>
	  <td><input type="text" name="nwfname" maxlength="20" size="10" required/></td>
      <td>4</td>
      <td><input type="number" name="cienw" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seenw" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradenw" maxlength="1" size="10" required/></td>
    </tr>
	<tr>
      <td>4</td>
      <td><label for="scelec2"></label>
	<select id="scelec2" name="e2" required>
	  <option value="none">Choose Elective -2 </option>
	  <option value="18MCA3PECC">18MCA3PECC </option>
	  <option value="18MCA3PEUI">18MCA3PEUI </option>
	  <option value="18MCA3PEAS">18MCA3PEAS </option>
	  <option value="18MCA3PEUP">18MCA3PEUP </option>
	 </select></td>
      <td><label for="elec2" ></label>
	<select id="elec2" name = "ee2" required>
	  <option value="stat">Choose Elective -2 </option>
	  <option value="Cloud Computing">Cloud Computing </option>
	  <option value="UI & UX">UI & UX </option>
	  <option value="Agile Software Development">Agile Software Development </option>
	  <option value="Unix System Programming">Unix System Programming </option>
	 </select></td>
	  <td><input type="text" name="elec2fname" maxlength="20" size="10" required/></td>
      <td>4</td>
      <td><input type="number" name="cieelec2" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seeelec2" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradeelec2" maxlength="1" size="10" required/></td>

    </tr>
	<tr>
      <td>5</td>
      <td><label for="elec3"></label>
	<select id="elec3" name = "e3" required>
	  <option value="none">Choose Elective -3 </option>
	  <option value="18MCA3PEIS">18MCA3PEIS </option>
	  <option value="18MCA3PEDM">18MCA3PEDM </option>
	  <option value="18MCA3PERP">18MCA3PERP </option>
	  <option value="18MCA3PEOB">18MCA3PEOB </option>
	 </select></td>
      <td><label for="scelec3" ></label>
	<select id="scelec3" name = "ee3" required>
	  <option value="none">Choose Elective -3 </option>
	  <option value="Management Information Systems">Management Information Systems </option>
	  <option value="Digital Marketing">Digital Marketing </option>
	  <option value="Enterprise Resource Planning">Enterprise Resource Planning </option>
	  <option value="Organizational Behaviour">Organizational Behaviour </option>
	 </select></td>
	  <td><input type="text" name="elec3fname" maxlength="20" size="10" required/></td>
      <td>3</td>
      <td><input type="number" name="cieelec3" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seeelec3" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradeelec3" maxlength="1" size="10" required/></td>

    </tr>
	<tr>
      <td>6</td>
      <td>18MCA3PWM1 </td>
      <td>Mini Project - I</td>
	  <td><input type="text" name="m1fname" maxlength="20" size="10" required/></td>
      <td>3</td>
      <td><input type="number" name="ciem1" maxlength="2" size="10" required/></td>
      <td><input type="number" name="seem1" maxlength="3" size="10" required/></td>
      <td><input type="text" name="gradem1" maxlength="1" size="10" required/></td>

    </tr>
	<tr>
      <td>7</td>
      <td>1BMCA3NCMC </td>
      <td>MOOC Course</td>
	  <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><input type="text" name="grademc" maxlength="1" size="10" required/></td>

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