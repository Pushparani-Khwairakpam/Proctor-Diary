
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	    <!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->

<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Student| Edit </title>
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
	#read-more {
        position: absolute;
        top: 0;
        right: 0;
    }

</style>

<!--
	function myFunction() {
		$.ajax({
			url: "view_notification.php",
			type: "POST",
			processData:false,
			success: function(data){
				$("#notification-count").remove();					
				$("#notification-latest").show();$("#notification-latest").html(data);
			},
			error: function(){}           
		});
	 }
	 
	 $(document).ready(function() {
		$('body').click(function(e){
			if ( e.target.id != 'notification-icon'){
				$("#notification-latest").hide();
			}
		});
	});
		 
	</script>-->
	
</head>
<body class="top-navbar-fixed">
	
	</div>
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
    <nav class="navbar top-navbar bg-white box-shadow">
                <div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header no-padding">
                            <a class="navbar-brand" href="dashboard.php">
                                BMSCE MCA | Staff
                            </a>
                            <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <!-- /.navbar-header -->

                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <li class="hidden-sm hidden-xs"><a href="#" class="user-info-handle"><i class="fa fa-user"></i></a></li>
                                <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li>
                       
                                <li class="hidden-xs hidden-xs"><!-- <a href="#">My Tasks</a> --></li>
                               
                            </ul>
                            <!-- /.nav navbar-nav -->

                            <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                             
                     
			 
			 <!-- <li> <button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn"><span id="notification-count"></span><img src="notification-icon.png"/></button></li>-->
				 		
	                         




       
                                    <li><a href="logout.php" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a></li>
                                    
                        
                            
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

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <div class="left-sidebar bg-black-300 box-shadow ">
                        <div class="sidebar-content">
                            <div class="user-info closed">
                                <img src="http://placehold.it/90/c2c2c2?text=User" alt="John Doe" class="img-circle profile-img">
                                <h6 class="title">Admin</h6>
                                <small class="info">MCA Department</small>
                            </div>
                            <!-- /.user-info -->

                            <div class="sidebar-nav">
                                <ul class="side-nav color-gray">
                                                                       <li>
                                        <a href="dashboardSTAFF.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
                                     
                                    </li>

                                   
                                    <li >
                                        <a href="students-staff.php"><i class="fa fa fa-server"></i> <span>Student-Request</span> </a></i></a>
                                       
                                         
                                       
                                    </li>
  
                                       <li >
                                        <a href="view_student_request.php"><i class="a fa fa-server"></i> <span>View</span> </a>
                                     
                                    </li>
                                      
                                           
                                    </li>
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>  
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                 <div class="col-md-2">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboardSTAFF.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Staff</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>


	<div class="container">
	
</div>
	 <div class="main-page">

                     <div class="container-fluid">
                            
                                <div class="col-md-12">
                                	 <section class="section">
                            <div class="container-fluid">

                             

                                <div class="row">
                                    <div class="col-md-12">
                                         

      

	<!--<div class="row justify-content-center">-->
		<!------end header here --------->
<div class="content-container">

<h3>All Proctees diary</h3>
    <div class="col-md-12">
<table class="table table-striped table-hover " >
  <thead>
    <tr>
      
      <th>SL NO</th>
      <th>USN</th>
            
       <th>NAME</th>
      
           <th>BATCH</th>
            <th>To</th>
             <th>STATUS</th>
             <th>COMMENT</th>
             <th>&nbsp;</th>
           
          
    </tr>
  </thead>
  <tbody>
      <tr>
      <td>1</td>
      <td>1bm18mca17</td>
      
      
      <td>Not well</td>
 
        
          <td>31/12/2019</td>
            <td>02/01/2020</td>
            <td style="color:green;">Rejected</td>
            <td><form method="post" action="" >
            <textarea name="comment"></textarea></td>
            <input type="hidden" name="id" value="4">
            <td> 
            <button type="submit" name="approved" class="btn btn-primary">Approve</button>
            <button type="submit" name="rejected" class="btn btn-primary">X</button>

            </form></td>
    </tr>
        <tr>
      <td>2</td>
      <td>1bm18mca17</td>
      
      
      <td>I am not feeling good</td>
 
        
          <td>28/12/2019</td>
            <td>30/12/2019</td>
            <td style="color:green;">Approved</td>
            <td><form method="post" action="" >
            <textarea name="comment"></textarea></td>
            <input type="hidden" name="id" value="3">
            <td> 
            <button type="submit" name="approved" class="btn btn-primary">Approve</button>
            <button type="submit" name="rejected" class="btn btn-primary">X</button>

            </form></td>
    </tr>
        <tr>
      <td>3</td>
      <td>1bm18mca17</td>
      
      
      <td>I am in hospital</td>
 
        
          <td>27/12/2019</td>
            <td>28/12/2019</td>
            <td style="color:green;">Approved</td>
            <td><form method="post" action="" >
            <textarea name="comment"></textarea></td>
            <input type="hidden" name="id" value="2">
            <td> 
            <button type="submit" name="approved" class="btn btn-primary">Approve</button>
            <button type="submit" name="rejected" class="btn btn-primary">X</button>

            </form></td>
    </tr>
        <tr>
      <td>4</td>
      <td>1bf18mca04</td>
      
      
      <td>I am not feeling well</td>
 
        
          <td>27/12/2019</td>
            <td>28/12/2019</td>
            <td style="color:green;">Approved</td>
            <td><form method="post" action="" >
            <textarea name="comment"></textarea></td>
            <input type="hidden" name="id" value="1">
            <td> 
            <button type="submit" name="approved" class="btn btn-primary">Approve</button>
            <button type="submit" name="rejected" class="btn btn-primary">X</button>

            </form>
          </td>
    </tr>
  </tbody>
</table> 
</div>
</div>
</body>
</html>