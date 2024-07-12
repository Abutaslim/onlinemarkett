
<?php 
require('connection.php');
$supervisor_id = $_GET['supervisor_id'];

$q = "SELECT forms_collected, invoice_collected FROM `supervisor_inventory`  where forms_returned = 0 and invoice_returned = 0 and supervisor_id = '$supervisor_id'";
$r = mysqli_query($con,$q);

if (mysqli_num_rows($r) > 0) 
{
	
	while ($row=mysqli_fetch_array($r)) 
	{
		echo $row[1]."&".$row[0]."&".$row[1];
		// code...
	}

}
