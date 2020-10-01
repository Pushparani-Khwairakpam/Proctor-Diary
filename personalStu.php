<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Personal Info| Semester </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        



    <meta charset="UTF-8">

    <title>Details</title>
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

    <form class="container-fluid" action="insertPD.php" method="POST">
      <h1>PESRONAL DETAILS</h1>
  <!--<div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Enter your name ">
  </div>-->
  <div class="form-group">
    <label for="exampleFormControlInput1">Father Name</label>
   
    <input type="text" class="form-control" id="exampleFormControlInput1" name="fname" placeholder="Enter your father name " required="">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Father Occupation</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="foccup" placeholder="Enter your father Occupation " required="">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Father Phone Number</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="fph" placeholder="Enter your father Phone Number " required="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Mother Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="Mname" placeholder="Enter your Mother name " required="">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Mother Occupation</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="Moccup" placeholder="Enter your Mother Occupation " required="">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Mother Phone Number</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="Mph" placeholder="Enter your Mother Phone Number " required="">
  </div>

    <div align="center">
      <button type="submit" name="submit" class="button" onclick="">Save</button>
    </div>



<nav aria-label="Page navigation example">
  <ul class="pagination">

    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="personalStu1.php">2</a></li>
  
    <li class="page-item"><a class="page-link" href="personalStu1.php">Next</a></li>
  </ul>
</nav>

<script type="text/javascript">
  function mess()
  {
    alert("Your record is successfully saved!");
    return true;

  }
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>