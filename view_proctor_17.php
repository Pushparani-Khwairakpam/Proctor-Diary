<!DOCTYPE html>
<html>
<head>
	
	</head>

<body class="top-navbar-fixed">
	



	<?php
			if (isset($_SESSION['message'])): ?>

		<div class="alert alert-<?=$_SESSION['msg_type']?>">
			<?php
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			?>
		</div>
		<?php endif ?>

	<div class="container">
	<?php

		$mysqli = new mysqli('localhost','root','','proctord') or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM proctor_17") or die($mysqli->error);
		//pre_r($result);
		//pre_r($result->fetch_assoc());
	?>
	 <div class="main-page">

                     <div class="container-fluid">
                            
                                <div class="col-md-6">
                                	 <section class="section">
                            <div class="container-fluid">

                             

                                <div class="row">
                                    <div class="col-md-12">

                                        

	
		<?php

		$mysqli = new mysqli('localhost','root','','proctord') or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM proctor_17") or die($mysqli->error);
		//pre_r($result);
		//pre_r($result->fetch_assoc());
	?>
	<br>
	<center>
	<h3><b>All Proctors</b></h3>
	<div class="content-container">
		<table class="table" border="2">
            <thead>
                <tr>
                    <th>SL_NO</th>
                    <th>EMP_ID</th>
                    <th>NAME</th>
                    <th>DESIGNATION</th>
                    <th>MAIL_ID</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <?php
                while($row = $result->fetch_assoc()): ?>
                    <tr>
                            <td><?php echo $row['sl_no']; ?></td>
                            <td><?php echo $row['emp_id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            
                        
                            <td><?php echo $row['designation']; ?></td>
                            <td><?php echo $row['mail_id']; ?></td>
                            
							<td align='center'><form><input type=submit value="click me"></form></td>
							  

                    </tr>
                    <?php endwhile; ?>
            
        </table>
	</div>
   </center>
	<?php

		function pre_r12( $array ){
			echo '<pre>' ;
			print_r($array);
			echo '</pre>';

		}


	?>
	
</body>
</html>