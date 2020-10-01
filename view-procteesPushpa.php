<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MCA Admin| View Students</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>	
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
                                    <h2 class="title">T S PUSPA</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
	



	<?php
			if (isset($_SESSION['message'])): ?>

		<div class="alert alert-<?=$_SESSION['msg_type']?>">
			<?php
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			?>
		</div>
		<?php endif ?>

	
	<?php

		$mysqli = new mysqli('localhost','root','','proctord') or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM procteesPushpa") or die($mysqli->error);
		//pre_r($result);
		//pre_r($result->fetch_assoc());
	?>
	
                                        
<div class="container-fluid">
                           
   <div class="row">
   <div class="col-md-12">
    <div class="panel">
                                           
    <div class="panel-body">
   
		<table class="table" border="2">
			<h3 align="center">PROCTEES LIST</h3>
			<thead>
				<tr><th>ID</th>
                    <th>USN</th>
					<th>NAME</th>
					<th>SEM</th>
					
					<th>EMAIL</th>
					<th>PHONE NUMBER</th>
					
				</tr>
			</thead>
			<?php
				while($row = $result->fetch_assoc()): ?>
					<tr>
						<td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['username']; ?></td>
						<td><?php echo $row['NAME']; ?></td>
						<td><?php echo $row['SEM']; ?></td>
						
					
						<td><?php echo $row['EMAIL']; ?></td>
						<td><?php echo $row['PHONE_NUMBER']; ?></td>
								

					</tr>
					<?php endwhile; ?>
			
		</table>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
	<?php

		function pre_r1( $array ){
			echo '<pre>' ;
			print_r($array);
			echo '</pre>';

		}


	?>
	
</body>
</html>

