<html>
<head>
<title>Register Student</title>
</head>
<br><br><br><br><br><br><br><br>
<body>
<?php if($_SERVER['REQUEST_METHOD'] == "POST"){
    $dom = 'localhost';
    $us = 'root';
    $pass = '';
    $db = "users";

    $con = mysqli_connect($dom,$us,$pass);
    if(!$con){
        die('error');
    }
    mysqli_select_db($db);
    $sql = "insert into login(username,password) values('".$_POST['name']."','".$_POST['usn']."')";

    if(mysqli_query($sql,$con)){
        echo "Inserted Successfully";
    } else {
        echo "Not inserted successfully".mysqli_error();
    }
?>
<form method="POST" align="center">
<h2 align="center">Register Student</h2>
<table align="center">
<tr>
<td>USN/APPLICATION NUMBER</td><td><input type="text" name="usn"/></td></tr>
<td>First Name</td><td><input type="text" name="fname" </td></tr>
<td>Last Name</td><td><input type="text" name="lname"/></td></tr>
<td>Course</td><td><input type="text" name="course"/></td></tr>
<td>Academic Year</td><td><input type="text" name="ayear"/></td></tr>
<td>Current Semester</td><td><input type="text" name="semester"/></td></tr>
</table>
<input type="button" name="register" value="Register" align="right"><input type="button" name="cancel" value="Cancel">

</form>
</body>
</html>