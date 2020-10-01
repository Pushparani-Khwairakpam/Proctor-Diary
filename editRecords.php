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



   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
.dropdown-submenu {
  position: relative;
  display: block;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
  display: block;
}


</style>

</head>

    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('topbarSTU.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('leftbarSTU.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Edit Records</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboardStudent.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Edit  Your  Records</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                           
                                            <div class="panel-body">
                                </div>
                    </div>
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
        </div>

 <div class="col-lg-3 col-sm-6">
  
                                          
   <div class="dropdown" weight=2px>
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><b>Edit Your Records</b>
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a tabindex="-1" href="EditDiary_sem1.php">Semester 1</a></li>
      <li><a tabindex="-1" href="proctorDiary_sem2.php">Semester 2</a></li>
      <li><a tabindex="-1" href="proctorDiary_sem3.php">Semester 3</a></li>
      <li><a tabindex="-1" href="proctorDiary_sem4.php">Semester 4</a></li>
      <li><a tabindex="-1" href="proctorDiary_sem5.php">Semester 5</a></li>
      <li><a tabindex="-1" href="proctorDiary_sem6.php">Semester 6</a></li>
      
      
    
    </ul>
  </div>

</div>

<div class="col-lg-3 col-sm-6">
  <div class="dropdown" weight=2px>
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><b>Edit Your Others Records</b>
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a tabindex="-1" href="10th.php">10th </a></li>
      <li><a tabindex="-1" href="12th.php">12th</a></li>
      <li><a tabindex="-1" href="graduate.php">Graduation</a></li>
      
    
    </ul>
  </div>
</div>

<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
    </body>
</html>
<?php } ?>
