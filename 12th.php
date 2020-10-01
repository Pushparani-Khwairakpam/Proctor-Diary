
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Student| Academic Records </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        



    <meta charset="UTF-8">
    <title>10th</title>
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


<div class="container-fluid" >
<form action="insert12.php" method="POST">
<h2><center></center></h2></br></br>
<div style="overflow-x:auto;">
   <h1>Class 12th Details</h1><br>
  <table align="center">

    <tr>

    <th>INSTITUTE/SCHOOL</th>
    <th>BOARD</th>
      <th>YEAR OF PASSING</th>
      <th>CGPA/PERCENTAGE</th>
     
      

    </tr>
    <tr>

      
      <td><input type="text" name="school" maxlength="20" size="20" required /></td>
      <td><input type="text" name="board" maxlength="30" size="20" required /></td>
      <td><input type="text" name="yop" maxlength="30" size="20" required /></td>
      <td><input type="number" name="percentage" maxlength="3" size="10" required /></td>

    </tr>
   </table>
    <div align="center">
      <button type="submit" name="submit" class="button" >Save</button>
    </div>
    
</form>
</div>
</body>
</html>
