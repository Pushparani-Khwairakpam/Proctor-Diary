<?php
session_start();
if (isset($_POST['login']))
{
        $user=$_POST['username'];
        $pass=$_POST['password'];
        $flag=0;
        $_SESSION['username']=$user;
// Create connection
$conn = new mysqli('localhost','root','','miniproject');
// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM admin_login WHERE username='".$user."' and password='".$pass."'";
$result = $conn->query($sql);
$sql1 = ("select type from admin_login where username='".$user."' and password='".$pass."' ");
$res = $conn->query($sql1);
$r=mysqli_fetch_assoc($res);
    $_SESSION['type']=$r['type'];   
if($r['type'] == "admin")   //SHOULD BE ADMIN
{
    //echo $_SESSION['type'];
if (mysqli_num_rows($result) > 0)
    {
        //$msg="Login Successfull!";
        //echo "<script type='text/javascript'>alert(\"$msg\");</script>";
         header( "refresh:0;url=dashboard.php" ); 

    }
}
else
if ($r['type'] == "student")
{
   if (mysqli_num_rows($result) > 0)
    {
        //$msg="Login Successfull!";
        //echo "<script type='text/javascript'>alert(\"$msg\");</script>";
         header( "refresh:0;url=dashboardStudent.php" ); 

    }
}
    else
if ($r['type'] == "staff")
{
   if (mysqli_num_rows($result) > 0)
    {
        //$msg="Login Successfull!";
        //echo "<script type='text/javascript'>alert(\"$msg\");</script>";
         header( "refresh:0;url=dashboardSTAFF.php" ); 

    }  
}
       else
if ($r['type'] == "hod")
{
    if (mysqli_num_rows($result) > 0)
    {
        //$msg="Login Successfull!";
        //echo "<script type='text/javascript'>alert(\"$msg\");</script>";
         header( "refresh:0;url=dashboardHOD.php" ); 

    }
}
    else
{   
        $msg="Invalid Login!!";
        echo "<script type='text/javascript'>alert(\"$msg\");</script>";
         header( "refresh:0;url=index.php" );
}
}
?>  
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
         <!-- add icon link -->
        <link rel = "icon" href ="C:\wamp64\www\E-Proctor\images\User-icon.jpg" type = "image/x-icon"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript">
    function validate()
{   
if(document.myform.username.value == "")
{
alert("Please enter the username!!!");
document.myform.username.focus();
return false;
}
if(document.myform.password.value == "")
{
alert("Please enter the password!!!");
document.myform.password.focus();
return false;
}
}
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 600px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

#more {display: none;}

a:hover {
  color: darkblue;
  background-color: transparent;
  text-decoration: underline;
}
</style>
    </head>
    <body >

    	

    <form action="index.php" method="post" name="myform" onsubmit="return(validate())">
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-73364464-1', 'auto');
  ga('send', 'pageview');
</script>

	

        
        <div class="main-wrapper">

            <div class="">
                <div class="row">




<div style="text-align: left"><img  src="bmsce.png" alt="Logo" width="1300" height="110" ></div>
                     </div> 
                	
 
                    <div class="col-lg-6 visible-lg-block">

                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                      
                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>



<h2 align="center">E-PROCTOR DIARY</h2>
<div class="w3-container"> 
  <div  style="background-color:bdms.png;">
<div class="row">

  <div class="column" style="background-color:#aaa;">
  
    <h2>About Project</h2>
    <p align="justify">Proctor Diary is an web based application. Proctor is a faculty of the college who is responsible to monitor the performances of the students. Proctor generates reports of the performances and informs to the parents about it. Proctor has to work on pen-paper system manually for this purpose. This application reduces the paperwork . This application can be used by proctor and student. Proctor can see proctor diary as well as can give approval. This approach reduces time as well as cost.E-Proctor will be built on Apache, PHP and MySQL. It will be operating system independent and accessible with any standard compliant browser.The purpose of this document is to represent the  E-Proctor Diary  System.<span id="dots">...</span><span id="more"> This document explains the system's software requirements of the project. The purpose of this system is to collecting student marks and personal information using this application. The main goal of this project is to reduce paperwork and processing work load. This document includes use case diagrams and initial step by step description.Most of the colleges follow physical  entry (paper based) now a days. But in this system, we are not supposed to maintain pen, paper based participation. Using this idea, we have proposed a participation checking framework built in the idea of web administrations which is executed as an Web based application that interconnects with the database that resides on a remote server. The  Proctor application will associate with the database using internet. Our developed project is efficient and user friendly and very easy to use Web application. It proposes to convey a client interface to enter the information of the students.</span></p>
<button onclick="myFunction()" id="myBtn">Read more</button> <p class="text-muted text-center"><small>Copyright © BMSCE  <a href="https://bmsce.ac.in/home/Computer-Applications-MCA-About" target="_blank"> MCA_DEPARTMENT</a></small></p> 
  </div>
  <div>
    <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
</div>
  <div class="column" style="background-color:#bbb;">
    


 						
 						<div class="col-lg-15">
                        <section class="section">
       
                           
                            <div class="row mt-40">

                                <div class="col-md-10 col-md-offset-1 pt-50">


                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">

                                                    	
                                                        <h4> Login</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-10">

                                                    <!--<div class="section-title">
                                                        <p class="sub-title">BMS COLLEGE OF ENGINEERING</p>
                                                    </div>-->
                                                    <div style="text-align:right">


                                                    <form  class="form-horizontal" method="post"  >
                                                        <div class="form-group">
                                                            <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="UserName">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                                                            <div class="col-sm-9">
                                                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                                <!-- <a href="forget_password.php"><span class="btn-label btn-label-right"><u>Forget Password</u></a>-->
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="form-group mt-20">
                                                            <div class="col-sm-offset-2 col-sm-10">
                                                           
                                                                <button type="submit" name="login" class="btn btn-success btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>

                                                            </div>
                                                        </div>

                                                       <br>
                                                       <a href="" target="_blank">Forgot Password</a> 
                                                       
                                                    </div>

                                                    </form>
                                                </div>

 

                                                 
                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                            <p class="text-muted text-center"><small>Development Team  <a href="pushpa_CV.pdf" target="_blank"> Pushpa_K </a></small></p> 
                                           

                                        </div>
                                        <!-- /.col-md-11 -->

                                    </div>
                                    <!-- /.row -->

                                </div>
                                <!-- /.col-md-12 -->
                               

                            </div>

                            <!-- /.row -->
                        </section>

                    </div>
                      </div>
</div>
</div>

                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
        <!-- /.main-wrapper -->
</div> 


        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->


       
    </form>
    </body>
</html>
