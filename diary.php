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
        <title>SMS Admin| Import </title>
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

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}


</style>

</head>


<body class="top-navbar-fixed">
    <div class="main-wrapper">

        <!-- ========== TOP NAVBAR ========== -->

        <body class="top-navbar-fixed">
            <div class="main-wrapper">

                <!-- ========== TOP NAVBAR ========== -->
                <nav class="navbar top-navbar bg-white box-shadow">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="navbar-header no-padding">
                                <a class="navbar-brand" href="dashboard.php">
                                    BMSCE MCA | Admin
                                </a>
                                <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                                <button type="button" class="navbar-toggle mobile-nav-toggle">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                            <!-- /.navbar-header -->

                            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                <ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li class="hidden-sm hidden-xs"><a href="#" class="user-info-handle"><i
                                                class="fa fa-user"></i></a></li>
                                    <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i
                                                class="fa fa-arrows-alt"></i></a></li>

                                    <li class="hidden-xs hidden-xs">
                                        <!-- <a href="#">My Tasks</a> -->
                                    </li>

                                </ul>
                                <!-- /.nav navbar-nav -->

                                <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn"
                                    data-dropdown-out="fadeOut">


                                    <li><a href="logout.php" class="color-danger text-center"><i
                                                class="fa fa-sign-out"></i> Logout</a></li>



                                </ul>
                                <!-- /.nav navbar-nav navbar-right -->

                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>

                <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
                <div class="content-wrapper">
                    <div class="content-container">
                        <?php include('leftbar.php');?>

                        <div class="main-page">
                            <div class="container-fluid">
                                <div class="row page-title-div">


                                    <div class="col-md-6">
                                        <h2 class="title">Proctees Forms</h2>

                                    </div>

                                    <!-- /.col-md-6 text-right -->
                                </div>
                                <!-- /.row -->
                                <div class="row breadcrumb-div">
                                    <div class="col-md-6">
                                        <ul class="breadcrumb">
                                            <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                            <li> Proctor</li>
                                            <li class="active"> Proctees Information</li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->

                            <section class="section">
                                <div class="container-fluid">



                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title">
                                                        <h4>Proctees Information</h4>
                                                    </div>
                                                </div>


                                                <div class="container-fluid">

                                                          <div class="dropdown">
                                                          <button class="dropbtn">Academic Records</button>

                                                            <div class="dropdown-content">
                                                                <a href="proctorDiary_sem1A.php">Semester 1</a>
                                                                <a href="proctorDiary_sem2A.php">Semester 2</a>
                                                                <a href="proctorDiary_sem3A.php">Semester 3</a>
                                                                <a href="proctorDiary_sem4A.php">Semester 4</a>
                                                                <a href="proctorDiary_sem5A.php">Semester 5</a>
                                                                <a href="proctorDiary_sem6A.php">Semester 6</a>

                                                            </div>
                                                           </div>
                                                            <button class="dropbtn"><a href="PersonalStuA.php">Personal Details</a></button>
                                                            
                                                            </div>


                                                            </div>

                                                   </div>
                                                   </div>
                                                   </div>
                                                   </div>
                                                   </div>
                                                   </section>
                                                   </div>
                                                   </div>
                                                   </div>         
                                                            
                                                            


                                                


                                        


</body>

</html>

<?php } ?>