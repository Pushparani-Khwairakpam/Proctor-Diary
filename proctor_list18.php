<?php
session_start();
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','proctord');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
if(strlen($_SESSION['username'])==0)
    {   
header('location:index.php');
}
else{
?>





<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Admin| View PRoctors 2018-2021 </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>



   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
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
</style>
</head>

    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('leftbar.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Proctor List 2018-2021</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>

<h2>Proctors 2018-21</h2>

<table>
  <tr>
    <th>SL NO</th>
    <th>EMP ID</th>
    <th>NAME</th>
    <th>DESIGNATION</th>
    <th>VIEW PROCTEES</th>
    <th>IMPORT PROCTEES</th>
  </tr>
  <tr>
    <td>01</td>
    <td>CA18202021</td>
    <td>Lakshminarayana P</td>
    <td>Associate Professor</td>
    <td><button class="button button2" onclick="window.location.href = 'view-procteesPln.php';" >view</button></td>
    <td><button class="button button2" onclick="window.location.href = 'proctees_importPln.php';"><i class="fa fa-plus">Import</button></td>
  </tr>
  <tr>
    <td>02</td>
    <td>CA18202022</td>
    <td>M SivaRamaKrishna</td>
    <td>Assistant Professor</td>
    <td><button class="button button2" onclick="window.location.href = 'view-procteesSrk.php';" >view</button></td>
    <td><button class="button button2" onclick="window.location.href = 'proctees_importSrk.php';"><i class="fa fa-plus" >Import</button></td>
  </tr>
  <tr>
    <td>03</td>
    <td>CA18202023</td>
    <td>T S PUSHPA</td>
    <td>Assistant Professor</td>
    <td><button class="button button2" onclick="window.location.href = 'view-procteesPushpa.php';" >view</button></td>
    <td><button class="button button2" onclick="window.location.href = 'proctees_importPushpa.php';"><i class="fa fa-plus" >Import</button></td>



  </tr>
  
</table>

</body>
</html>
<?php } ?>
