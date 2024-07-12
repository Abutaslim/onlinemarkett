<?php
	include 'connection.php'; 
	session_start();

 ?>
<style type="text/css">
h3{
	margin: 2px;
}
h3{
  margin: 2px;
}
.data {
  text-align: center;

}
.table, .head, .data, .td {
  border: 1px solid black;
}
.table{
  margin-left: auto;
  margin-right: auto;
  border-collapse: collapse;
  font-size: 11.5px;
}

table{
	margin-left: auto;
	margin-right: auto;
}
</style>

</style>
<table clas ="table" style="width: 60%; margin-left: auto;margin-right: auto;">
	
	<tr>
		<th><img style="float: right; height: 50px; width: 50px" src="images/buklogo.png">
		
		</th>
		<th style="width: 70%;text-align: left;">
			<h3>FACULTY OF AGRICULTURE</h3>
		<h3>BAYERO UNIVERSITY, KANO</h3>
		</th>
	</tr>
	<tr>
		<th colspan="2"><h3 style=" text-align: center; ">Submission to the Senate through SBC (Row Marks)</h3></th>
	</tr>
</table>
	<div style="text-align: center; padding-bottom: 5px;"> Session: <?php echo($_SESSION['session_name'].' | Semester: '.$_SESSION['semester_name'].' | Programme: '.$_SESSION['programme_name'].' | Level: '.$_SESSION['level_name'].' | Date: '.date('d/m M/Y')); ?></div >
	
	
	<table class="table">
		
	<thead>
		<th class="head">S/N</th>
		<th class="head" style="width: 150px;">Name</th>
		<th class="head" style="width: 100px;">Reg. Num</th>
		<?php 
			$sn = 1;
			$session_id = $_SESSION['session_id'];
			$semester_id = $_SESSION['semester_id'];
			$level_id = $_SESSION['level_id'];
			$num_courses = $_SESSION['num_courses'];
			$result = mysqli_query($con,"SELECT * FROM course  WHERE  level_id = '$level_id' and semester_id = '$semester_id'  ");
			while($rows = mysqli_fetch_array($result)){
				if ($sn <= $num_courses) {
					
				echo '<th class="head">'.$rows[1].'</th>';

				}

				$sn++;
			}

		?>
		

	</thead>
	
		
	
<?php
	$i = 0;
	$sn = 1;
	 
	$courseData = []; $regno = 0;
	$result = mysqli_query($con,"SELECT a.id, a.student_name, a.regno, b.score,c.course_name, c.course_code FROM `exam` b JOIN student a ON b.`stud_id` = a.id JOIN course c ON c.id = b.`course_id`  WHERE  b.session_id = '$session_id' AND b.semester_id = '$semester_id' AND b.level_id = '$level_id'");
	$num = mysqli_num_rows($result);
	
	
	for ($r=0; $r < $num_courses ; $r++) {

		$result = mysqli_query($con,"SELECT a.id, a.student_name, a.regno, b.score,c.course_name, c.course_code FROM `exam` b JOIN student a ON b.`stud_id` = a.id JOIN course c ON c.id = b.`course_id`  WHERE  b.session_id = '$session_id' AND b.semester_id = '$semester_id' AND b.level_id = '$level_id'");
	$num = mysqli_num_rows($result);
	$i = 0;
	while ($row = mysqli_fetch_array($result)) {
		if ($i < $num_courses) {
			 $courseData[$i] = $row[0];
		}
		

		$i++;
	}
	$i = 0;
	$regno = $courseData[$r];
	$result = mysqli_query($con,"SELECT a.student_name, a.regno, b.score,c.course_name, c.course_code FROM `exam` b JOIN student a ON b.`stud_id` = a.id JOIN course c ON c.id = b.`course_id`  WHERE `stud_id` = '$regno' and b.session_id = '$session_id' AND b.semester_id = '$semester_id' AND b.level_id = '$level_id'");
	while ($row = mysqli_fetch_array($result)) {
		if ($i == 0  ) {
			echo '<tr>
		<td class="data">'.$sn.'</td>
		<td class="td">'.$row[0].'</td>
		<td class="td">'.$row[1].'</td>';
		if ($row[2] == 0) {
			echo '<td class="data">'.'ABS'.'</td>';
		}else{
		echo '<td class="data">'.$row[2].'</td>';
			}
		$sn++;
		} else {
			if ($row[2] == 0) {
			echo '<td class="data">'.'ABS'.'</td>';
		}else{
		echo '<td class="data">'.$row[2].'</td>';
			}
		}

		$i++;
	

	}
	$i = 0;
	?>
	</tr>
	<?php
	}
?>

</table >
<table style="margin-left: 0px;">
	<thead>
		<th>Course Code</th>
		<th style="text-align: left;">Course Title</th>
	</thead>
	
<?php 
$i = 0;

$result = mysqli_query($con,"SELECT * FROM course  WHERE  level_id = '$level_id' and semester_id = '$semester_id'  ORDER BY `course_code` ");
	while ($row = mysqli_fetch_array($result)) {
	
			echo '<tr>
		<td>'.$row[1].'</td>
		<td>'.$row[2].'</td>
	</tr>';
		
	} ?>
</table>
<table style="width: 70%; margin-left: 160px;margin-top: 70px">
	<tr style="width: 30%">
		<td>__________________</td>
		<td>________________________</td>
		<td>____________________</td>
	</tr >

	<tr style="width: 30%">
		<td><?php echo$_SESSION['lc_name']; ?></td>
		<td><?php echo$_SESSION['hod_name']; ?></td>
		<td><?php echo$_SESSION['dean_name']; ?></td>
	</tr>
	<tr style="width: 30%">
		<td>SAFE Coordinator</td>
		<td>Faculty Examinations Officer</td>
		<td>Dean/Chief Exerminer</td>
	</tr>

</table>
