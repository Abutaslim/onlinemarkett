<?php 
require('connection.php');
$nationality_id = $_GET['nationality_id'];
$q = "SELECT * FROM `states` WHERE nationality_id = '$nationality_id' ";
$r = mysqli_query($con,$q);

if (mysqli_num_rows($r) > 0) 
{
	echo " <option>Select</option>";
	while ($row=mysqli_fetch_array($r)) 
	{
		echo "<option value = ".$row['state_id'].">".$row['name']."</option>";
		// code...
	}

}





 ?>
