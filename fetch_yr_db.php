<?php
mysqli_connect('localhost','root','');
mysqli_select_db('users');
$sql="SELECT Name Name FROM sub";
$result=mysqli_query($sql);
echo "<select name='sub1'>";
while($row=mysqli_fetch_array($result))
{
	echo "<option value='".$row['Name']."'>".$row['Name']."</option>;
}
echo "</select>";
?>