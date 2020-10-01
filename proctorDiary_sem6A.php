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
    <title>VI Semester</title>
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

        




<form action="insert6.php" method="POST">
 
<h2><center>VI SEMESTER</center></h2></br></br>
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
      <td>18MCA6NTI1</td>
      <td>Internship 1</td>
    <td><input type="text" name="i1fname" maxlength="20" size="10" disabled /></td>
      <td>2</td>
      <td><input type="number" name="ciei1" maxlength="2" size="10" disabled /></td>
      <td><input type="number" name="seei1" maxlength="3" size="10" disabled /></td>
      <td><input type="text" name="gradei1" maxlength="1" size="10" disabled /></td>
    </tr>
    <tr>
      <td>2</td>
      <td>18MCA6NTI2 </td>
      <td>Internship 2</td>
    <td><input type="text" name="i2fname" maxlength="20" size="10" disabled /></td>
      <td>2</td>
      <td><input type="number" name="ciei2" maxlength="2" size="10" disabled /></td>
      <td><input type="number" name="seei2" maxlength="3" size="10" disabled /></td>
      <td><input type="text" name="gradei2" maxlength="1" size="10" disabled /></td>
    </tr>
    <tr>
      <td>3</td>
      <td>18MCA6PWMP</td>
      <td>Major Project  </td>
    <td><input type="text" name="mpfname" maxlength="20" size="10" disabled /></td>
      <td>16</td>
      <td><input type="number" name="ciemp" maxlength="2" size="10" disabled /></td>
      <td><input type="number" name="seemp" maxlength="3" size="10" disabled /></td>
      <td><input type="text" name="grademp" maxlength="1" size="10" disabled /></td>
    </tr>

  <tr>
      <td>4</td>
      <td>18MCA6HSPR </td>
      <td>Cyber Regulations and IPR</td>
    <td><input type="text" name="prfname" maxlength="20" size="10" disabled /></td>
      <td>2</td>
      <td><input type="number" name="ciepr" maxlength="2" size="10" disabled /></td>
      <td><input type="number" name="seepr" maxlength="3" size="10" disabled /></td>
      <td><input type="text" name="gradepr" maxlength="1" size="10" disabled /></td>
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
      <th>Number of Credits Earned <input type="number"  name="tcr" maxlength="2" size="10" disabled /></th>
      <th>CGPA <input type="number" name="cgpa"  step="0.01" maxlength="5" size="10" disabled /></th>
      <th>SGPA <input type="number" name="sgpa"  step="0.01" maxlength="5" size="10" disabled /></th>
  </table>
</div>

</form>
</body>
</html>