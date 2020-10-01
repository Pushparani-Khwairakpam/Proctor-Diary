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
                   <?php include('leftbar.php');?>  
                    <!-- /.left-sidebar -->

    <form class="container-fluid" action="insertPD1.php" method="POST">
      <h1>PESRONAL DETAILS</h1>
  
  <div class="form-group">
    <label for="exampleFormControlInput1">Local Guardian Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="lgn" placeholder="Enter your Guardian name "disabled>
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">Local Guardian Phone Number</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="lgpn" placeholder="Enter your Guardian Phone Number "disabled>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Local Guardian Address</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="lga" placeholder="Enter your Guardian Address "disabled>
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1"> Permenanent Address</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="pa" placeholder="Enter your Permenanent Address "disabled>
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Present Addreess</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="pra" placeholder="Enter your Present Address "disabled>
  </div>



<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="personalStuA.php">Previous</a></li>
    <li class="page-item"><a class="page-link" href="personalStuA.php">1</a></li>
    <li class="page-item"><a class="page-link" href="personalStu1A.php">2</a></li>
    
    <li class="page-item"><a class="page-link" href="personalStuA.php">Back</a></li>
  </ul>
</nav>
</form>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>