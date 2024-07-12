
<?php 
require('connection.php');
$state_id = $_GET['state_id'];

$q = "SELECT * FROM `lgas`  where state_id = '$state_id'";
$r = mysqli_query($con,$q);

if (mysqli_num_rows($r) > 0) 
{
	echo " <option>Select</option>";
	while ($row=mysqli_fetch_array($r)) 
	{
		echo "<option value= ".$row['id'].">".$row['name']."</option>";
		// code...
	}

}
