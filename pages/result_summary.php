	<?php    include 'connection.php'; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BUK~AEE | Exams Score Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index3.html" class="brand-link">
      <img src="../dist/img/buklogo.png" alt="BUK Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BUK~AEE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php include 'layouts/header.php'?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Result Summary</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Result Summary</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">A Page that Displays a Result Summary</h3>
              </div>

	<style type="text/css">
		h3 {
			margin: 2px;

		}
		
	.data {
	  text-align: center;

	}
	.table, .head, .data {
	  border: 1px solid black;
	}
	.table{
	  margin-left: auto;
	  margin-right: auto;
	  border-collapse: collapse;
	  font-size: 13px;
	}
	</style>
	<?php 
		include 'connection.php';
		// $str = 1.2;

		// include 'header.php';
		//session_start();
			$level_name = $_SESSION['level_name'] ;
	        $semester_name = $_SESSION['semester_name'] ;
	        $session_name =  $_SESSION['session_name'] ;      
	        $level_id = $_SESSION['level_id'];
	        $semester_id =  $_SESSION['semester_id'];
	        $session_id = $_SESSION['session_id'];
	        //$student_id_num1 = $_SESSION['student_id_num1'];
	        //$num_student = $_SESSION['num_student'];

	        $result = @mysqli_query($con,"SELECT DISTINCT b.stud_id FROM `exams` b JOIN student a ON b.`stud_id` = a.id JOIN course c ON c.id = b.`course_id`  WHERE  b.session_id = '$session_id' AND b.semester_id = '$semester_id' AND b.level_id = '$level_id' "); 
	 $num_student = mysqli_num_rows($result);
	        // $num1_student = $num_student;
		// if (isset($_POST['transcript'])) {
		// 	$student_id = $_POST['student_id'];
		// 	$session_id = $_POST['session_id'];
		// }
			// $year = $_POST['year'];
			// $_SESSION['student_id'] = $_POST['student_id'];
			// $_SESSION['session_id'] = $_POST['session_id'];
			// $_SESSION['year'] = $_POST['year'];
		$s =''; $r =''; $d ='';$f =''; $l =''; $sem1 ='';$sem2 ='Second'; $ses =''; $p = '';$stce =0; $stpe;$name =''; $regno = ''; $carry_over ='';

		$score =0; $course =''; $code =''; $course_name ='';$credit =''; $tcr =0; $tce =0; $tpe =0; $grade = ''; $point = 0; $gp =0; $gpa = 0.00; $co_count = 0; $class = ''; $cgpa =0; $n_f = 0; $n_u = 0; $n_l =0; $n_p = 0;
		?>
	<table clas ="table" style="width: 60%; margin-left: auto;margin-right: auto;">
		
		<tr>
			<th><img style="float: right; height: 50px; width: 50px" src="../images/buklogo.png">
			
			</th>
			<th style="width: 70%;text-align: left;">
				<h5>FACULTY OF AGRICULTURE</h5>
			<h5>BAYERO UNIVERSITY, KANO</h5>
			</th>
		</tr>
		<tr>
			<th colspan="2"><h5 style=" text-align: center; ">Submission to the Senate through SBC (Result Summary)</h5></th>
		</tr>
	</table>

	<div style="text-align: center; padding-bottom: 5px;"> Session: <?php echo($_SESSION['session_name'].' | Semester: '.$_SESSION['semester_name'].' | Programme: B. Sc. Agricultural Extension | Level: '.$_SESSION['level_name'].' | Date: '.date('d/m M/Y')); ?></div >
	<!-- .' (Non Graduating)' -->
		<table class ="table" style="width: auto;">
		<?php 	if ($level_id == 5) {
			?>
			<tr>	

				 	<td colspan="3" class="data"></td>
		 			
		 			<td colspan="3" class="data">CREDITS EARNED</td>
		 			
		 			<td colspan="6" class="data"></td>
		 			
		 	</tr>
		 	<tr>	

				 	<td colspan="3" class="data"></td>
		 			
		 			<td class="data">L3</td>
		 			<td class="data">L4</td>
		 			<td class="data">L5</td>
		 			<td colspan="6" class="data"></td>
		 			
		 	</tr>
			<?php
			//
			//SELECT b.level_id, sum(a.credit_unit) as total_credits, c.regno FROM exams b JOIN course a ON a.id = b.course_id JOIN student c ON c.id =b.stud_id join level d on d.id = b.level_id GROUP BY b.level_id, b.stud_id WHERE exam_id != 0
		} ?>
		<tr>
			<th class="head">S/N</th>
			<th class="head">REG. NUMBER</th>
			<th class="head">NAME</th>
			 
			<?php 

			$l3 = 0; $l4 = 0; $l5 = 0;
			if ($level_id == 5) {
			 		
?>

			<th class="head">100</th>
			<th class="head">100</th>
			<th class="head">100</th>
			<th class="head">TCE</th>
			<th class="head">MCR</th>


<?php


			 		} 

			 		if ($level_id != 5) { 

			 ?>
			<th class="head">TCR</th>
			<th class="head">TCE</th>
			<!-- <th class="head">TPE</th> -->
			 
			<th class="head">GPA</th>
			<?php } if ($semester_id == 2 || $level_id == 5) {
				 		echo('<th class="data">CGPA</th>');
				 	} ?>
			<th class="head" style="width: 300px">Course to Carry Over</th>
			<th class="head">Remark</th>
		</tr>
	 <?php
	 	// $student_id = $student_id_num1;
		// $num_student = $student_num;
		$sn = 1;
		$sn1 = 1;
					 $courseData =[] ;
		$id = 0;
		// $student_id = []; 
		 		 $q = "SELECT b.`stud_id` FROM `exams` b JOIN student a ON b.`stud_id` = a.id WHERE b.`session_id` = '$session_id' AND b.`level_id` =  '$level_id' and b.`semester_id` = '$semester_id'" ;
			$result = mysqli_query($con, $q);
		$i = 0;
			while ($row = mysqli_fetch_array($result)) {
				if ($i < $num_student) {
				 $courseData[$i] = $row[0];
				}
				

				$i++;
			} 	

			for ($i=0; $i < $num_student; $i++) { 
		 		$id = $courseData[$i];
		 	
		 		
		 		// $q = "SELECT b.`stud_id` FROM `exams` b JOIN student a ON b.`stud_id` = a.id WHERE b.`session_id` = '$session_id' AND b.`level_id` =  '$level_id' and b.`semester_id` = '$semester_id'";
		// 	$result = mysqli_query($con, $q);
		//  while ($rows = mysqli_fetch_array($result)) {
		//  	foreach ($rows as  $row) {
		//  		$multiple_num_student = $num1_student * 2;
		//  		if ($count <= $multiple_num_student) {
		//  			if ($count%2 != 0) {
		 				

		//  		$id = $rows [0];
		 		
			$query = "SELECT b.score, h.course_code, h.course_name, h.credit_unit, a.student_name, a.regno FROM `exams` b INNER JOIN student a ON a.id = b.stud_id INNER JOIN course h ON h.id = b.course_id WHERE b.stud_id = '$id' AND b.session_id = '$session_id' AND b.semester_id = '$semester_id'";
		
		$result = mysqli_query($con, $query);
		 while ($rows = mysqli_fetch_array($result)) {
		 	$score = $rows [0];
		 	if($score < 40 ){
		 		$grade = 'F';

		 	} elseif($score >= 40 && $score <= 44 ) {
		 		$grade = 'E';

		 	}  elseif($score >= 45 && $score <= 49 ) {
		 		$grade = 'D';
		 	}elseif($score >= 50 && $score <= 59 ) {
		 		$grade = 'C';

		 	} elseif($score >= 60 && $score <= 69 ) {
		 		$grade = 'B';

		 	}elseif($score >= 70 && $score <= 100 ) {
		 		$grade = 'A';

		 	}  
		 	
		 	if ($rows [3] == 7) {
		 		if ($grade == 'A') {
		 			$tce += $rows [3];
		 		$point = 7*5;
		 		$gp = 5;

		 	} elseif ($grade == 'B') {
		 		$tce += $rows [3];
		 		$point = 7*4;
		 		$gp = 4;

		 	} if ($grade == 'C') {
		 		$tce += $rows [3];
		 		$point = 7*3;


		 		$gp = 3;

		 	} elseif ($grade == 'D') {
		 		$point = 7*2;
		 		$tce += $rows [3];
		 		$gp = 2;

		 	} elseif ($grade == 'E') {
		 		$tce += $rows [3];
		 		$point = 7*1;
		 		$gp = 1;

		 	}  elseif ($grade == 'F' ) {
		 		$tce +=0;
		 		$point = 7*0;
		 		$gp = 0;
		 		$carry_over .= $rows[1].', ';
		 		$co_count += 1;
		 	} }   

		 	elseif ($rows [3] == 6) {
		 		if ($grade == 'A') {
		 			$tce += $rows [3];
		 		$point = 6*5;
		 		$gp = 5;

		 	} elseif ($grade == 'B') {
		 		$tce += $rows [3];
		 		$point = 6*4;
		 		$gp = 4;

		 	} if ($grade == 'C') {
		 		$tce += $rows [3];
		 		$point = 6*3;


		 		$gp = 3;

		 	} elseif ($grade == 'D') {
		 		$point = 6*2;
		 		$tce += $rows [3];
		 		$gp = 2;

		 	} elseif ($grade == 'E') {
		 		$tce += $rows [3];
		 		$point = 6*1;
		 		$gp = 1;

		 	}  elseif ($grade == 'F' ) {
		 		$tce +=0;
		 		$point = 6*0;
		 		$gp = 0;
		 		$carry_over .= $rows[1].', ';
		 		$co_count += 1;
		 	}    
		 	}elseif ($rows [3] == 4) {
		 		if ($grade == 'A' ) {
		 			$tce += $rows [3];
		 		$point = 4*5;
		 		$gp = 5;

		 	} elseif ($grade == 'B') {
		 		$tce += $rows [3];
		 		$point = 4*4;
		 		$gp = 4;

		 	} if ($grade == 'C') {
		 		$tce += $rows [3];
		 		$point = 4*3;


		 		$gp = 3;

		 	} elseif ($grade == 'D' ) {
		 		$point = 4*2;
		 		$tce += $rows [3];
		 		$gp = 2;

		 	} elseif ($grade == 'E' ) {
		 		$tce += $rows [3];
		 		$point = 4*1;
		 		$gp = 1;

		 	}  elseif ($grade == 'F' ) {
		 		$tce +=0;
		 		$point = 4*0;
		 		$gp = 0;
		 		$carry_over .= $rows[1].', ';
		 		$co_count += 1;
		 	}    
		 	}elseif ($rows [3] == 3) {
		 		if ($grade == 'A' ) {
		 		$tce += $rows [3];
		 		$point = 3*5;
		 		$gp = 5;

		 	} elseif ($grade == 'B' ) {
		 		$tce += $rows [3];
		 		$point = 3*4;
		 		$gp = 4;

		 	} if ($grade == 'C' ) {
		 		$tce += $rows [3];
		 		$point = 3*3;
		 		$gp = 3;

		 	} elseif ($grade == 'D') {
		 		$tce += $rows [3];
		 		$point = 3*2;
		 		$gp = 2;

		 	} elseif ($grade == 'E') {
		 		$tce += $rows [3];
		 		$point = 3*1;
		 		$gp = 1;

		 	}  elseif ($grade == 'F') {
		 		$tce += 0;
		 		$point = 3*0;
		 		$gp = 0;
		 		$carry_over .= $rows[1].', ';
		 		$co_count += 1;

		 	}    
		 } 	elseif ($rows [3] == 2) {
		 		if ($grade == 'A' ) {
		 			$tce += $rows [3];
		 		$point = 2*5;
		 		$gp = 5;

		 	} elseif ($grade == 'B' ) {
		 		$tce += $rows [3];
		 		$point = 2*4;
		 		$gp = 4;

		 	} if ($grade == 'C' ) {
		 		$tce += $rows [3];
		 		$point = 2*3;


		 		$gp = 3;

		 	} elseif ($grade == 'D' ) {
		 		$point = 2*2;
		 		$tce += $rows [3];
		 		$gp = 2;

		 	} elseif ($grade == 'E' ) {
		 		$tce += $rows [3];
		 		$point = 2*1;
		 		$gp = 1;

		 	}  elseif ($grade == 'F' ) {
		 		$tce +=0;
		 		$point = 2*0;
		 		$gp = 0;
		 		$carry_over .= $rows[1].', ';
		 		$co_count += 1;

		 	}    
		 	}
		 		$tcr += $rows [3];
		 		$tpe += $point;
		 		$sem1 = '';
		 		$regno =  $rows [5];
				$name = $rows [4];
				 // echo $id++;
		 	}
			 
		 	?>

		 	<tr>	

				 	<td class="data"><?php echo $sn  ?></td>
		 			<td class="data"><?php echo $regno  ?></td>
		 			<td class="data" style="text-align: left;"><?php echo $name ?></td>
		 			<?php 
		 				$row_tce1 = 0;
		 				$sum_tce = 0;
		 		if ($level_id != 5) {
		 			
			 		
		 		?>
				 	<td class="data"><?php
				 	
				 		if ($tcr == 0) {
				 		echo('ABS');
				 	}elseif (strlen((string)$tcr) == 1) {
				 		echo '0'.$tcr;
				 	} else {
				 	 echo $tcr; } ?></td>

				 	<td class="data"><?php 
				 		if ($tce == '') {
				 		echo('ABS');
				 	
				 	}elseif (strlen((string)$tce) == 1) {
				 		echo '0'.$tce;
				 	} 

				 	 else{ echo $tce; }?></td>
				 	<!-- <td class="data"><?php //echo $tpe ?></td> -->
					<td class="data">
				 	<?php

				 	if ($tpe != 0) {
				 		?>
				 			
				 		<?php
				 		$gpa =($tpe/$tcr);
				 		// function to test whether a number is an integer.
				 	
				 		if(is_int($gpa)){
				 			echo $gpa .='.00';
				 		} elseif(strlen( substr(strrchr($gpa, "."),1)) == 1){
		 					
		 					echo	$gpa .=0;
						}
				 		else{
				 		 echo round($gpa,2); 
				 		}

				 		
				 	}

					 else {
				 			echo('ABS');
				 		
					} 
				 	 ?>
					</td>
	<?php 
} else {
	//           //To continue tommorow by Allah's Grace 
           // SELECT * FROM `gps` WHERE session_id < 41 AND semester_id =1 and student_id =1 ORDER BY id DESC LIMIT 1
          $q = "SELECT SUM(a.credit_unit), b.level_id FROM `exams` b JOIN course a ON b.`course_id` = a.id WHERE b.score > 39 AND b.stud_id = '$id' GROUP by b.level_id" ;
      $result = mysqli_query($con, $q);
    //$i = 0;
      $mcr = 0;
      while ($row = mysqli_fetch_array($result)) {
        $mcr +=$row[0];

        if ($row[1] == 3) {
         

           $l3 =  $row[0];  

         
        }
        
        if ($row[1] == 4) {
        

           $l4 =  $row[0];  
        }


        if ($row[1] == 5) {
        

           $l5 =  $row[0];  
        }
      }   
?>
    <td class="data"><?php echo($l3); ?></td> 
    <td class="data"><?php echo($l4); ?></td> 
    <td class="data"><?php echo($l5); ?></td> 
    <td class="data"><?php echo($mcr); ?></td> 
    <td class="data"><?php echo(97); ?></td> 
  <?php 

}
		$c = date("Y");
		$p = $c-1;
		$student_id = $id; $sppe1 = 0;$spcr1 =0;
		$current_session = $p."/".$c;  $current_session_id =''; 
		$query = "SELECT  id FROM `session`WHERE  session_name = '$current_session' ";
		$result = mysqli_query($con, $query);
		$sppe = 0;$spcr =0;
		 	while ($rows = mysqli_fetch_array($result)) {
		 		
		 		$current_session_id = $rows['0'];
		 	}
		 	if ($level_id == 3) {

		 		$query = "SELECT *  FROM `gps`WHERE  student_id = '$id'  ";
		 $result = mysqli_query($con, $query);
		 $sppe = 0;$spcr =0;
		 if( mysqli_num_rows($result) != 0){
		 	while ($rows = mysqli_fetch_array($result)) {
		 		// getting the sum of previous point and credit earns as sppe and spce
		 		
		 			if (  $rows['session_id'] == $session_id  AND $semester_id == 2) {
		 				
		 		$sppe += $rows['tpe'];  $spcr += $rows['tcr'];

		 			}
		 		} 
		 	}

		 		
		 	} else {
		 $query = "SELECT *  FROM `gps`WHERE  student_id = '$id'  ";
		 $result = mysqli_query($con, $query);
		 $sppe = 0;$spcr =0;
		 if( mysqli_num_rows($result) != 0){
		 	while ($rows = mysqli_fetch_array($result)) {
		 		// getting the sum of previous point and credit earns as sppe and spce
		 		
		 			if (  $rows['session_id'] < $session_id ) {
		 				continue;
		 			} else{
		 		
		 		$sppe += $rows['tpe'];  $spcr += $rows['tcr'];

		 			}
		 		} 
		 	}

		 		 $query = "SELECT *  FROM `gps`WHERE  student_id = '$id'  ";
		 $result = mysqli_query($con, $query);
		 
		 if( mysqli_num_rows($result) != 0){
		 	while ($rows = mysqli_fetch_array($result)) {
		 		// getting the sum of previous point and credit earns as sppe and spce
		 		
		 			if (  $rows['session_id'] == $session_id AND $semester_id == 2) {
		 				continue;
		 			} else{
		 		
		 		$sppe1 += $rows['tpe'];  $spcr1 += $rows['tcr'];

		 			}
		 		}  
		 	}
		 	} 
		 	 $sppe +=$sppe1;  $spcr +=$spcr1;
		 	// 	$query = "SELECT *  FROM `gps`WHERE  student_id = '$id' AND session_id = '$session_id' AND semester_id = 1";
				// $result = mysqli_query($con, $query);
				// $sppe1 = 0; $spcr1 =0;
		 	// //echo mysqli_num_rows($result);
		 	// while ($rows = mysqli_fetch_array($result)) {
		 	// 	// getting the sum of previous point and credit earns as sppe and spce
		 		
		 			
		 		
		 	//  $sppe1 += $rows['tpe'];  $spcr1 += $rows['tcr'];


		 	// 	}
		 	// $sppe += $sppe1;   $spcr += $spcr1;
		 	// //echo	$sppe; echo $spcr;

	 if ($semester_id == 2 || $level_id == 5) {
				 	 	?>

				 	 	<td class="data">

				 	 	<?php if ($level_id == 5) {
				 	 		
				 	 		$cgpa =($sppe+$tpe)/($spcr+$tcr);

				 	 	} else{

				 	 		$cgpa =($sppe)/($spcr);
				 	 	}

				 	 				 	 	
				 		// function to test whether a number is an integer.
				 	 				 	 	$round_cgpa = round($cgpa,2);
				 		if(is_int($cgpa)){

				 			echo $cgpa .='.00';
				 		} elseif((strlen( substr(strrchr($round_cgpa, "."),1)) == 1)|| (strlen( substr(strrchr($cgpa, "."),1)) == 1)){
				 			// echo('arg1');
		 					
		 					echo	$round_cgpa .=0;
						} else {

							echo round($cgpa,2);
						}
				 		 

				 	?>

				 	</td>

					 	<?php	
					 	
					 	} 

					 	?>
				 	<td class="data" style="text-align: left;"><?php 
				 	if ($tpe == 0) {
						echo('ABS');
					} else {
						$query = '';
						if ($level_id == 5) {

							$query = "SELECT a.course_id, b.course_code FROM carry_over a JOIN course b on a.course_id = b.id WHERE  a.stud_id = '$student_id' AND a.status = 0";
						} else {

				 	$query = "SELECT a.course_id, b.course_code FROM carry_over a JOIN course b on a.course_id = b.id WHERE a.session_id = '$session_id' AND a.semester_id = '$semester_id' AND a.level_id = '$level_id' AND a.stud_id = '$student_id' AND a.status = 0";

				 	}
				 	$result = mysqli_query($con, $query);
				 	$num_rows = mysqli_num_rows($result);
				 	$count = 0;
				 	while ($rows = mysqli_fetch_array($result)) {
				 		$count++;
				 		echo $rows[1];
				 		if ($count < $num_rows) {
				 			echo(', ');
				 		}
				 	}

				 	}
				 	?></td>
				 	
					<td class="head"><?php
					if ($co_count != 0) {
						echo('Carry Over: '. $co_count); $co_count = 0;
					}
					  	$num_rows = 0;
						if ($cgpa < 1.00 AND $semester_id == 2) {
							$query = "SELECT * FROM `gps` WHERE student_id = '$student_id' AND semester_id = 2 AND session_id < '$session_id'";
							if ($num_rows = mysqli_num_rows( mysqli_query($con, $query)) == 1) {
								echo "This is second Provation, Recommended for Withdrowal";
							} else {
						echo(' On Provation');
					}
					} elseif($level_id == 5 || $level_id == 6 || $level_id == 7 AND $num_rows == 0) {

						if ($cgpa>= 4.50 && $cgpa <= 5.00) {
				        $class = 'First Class Honour';
				        $n_f++;
				    } elseif ($cgpa>= 3.50 && $cgpa <= 4.49) {
				        $class = 'Upper Second Class Honour';
				        $n_u++;
				    }elseif ($cgpa>= 2.50 && $cgpa <= 3.49) {
				        $class = 'Lower Second Class Honour';
				        $n_l++;
				    }elseif ($cgpa>= 1.50 && $cgpa <= 2.49) {
				        $class = 'Third Class Honour';
				        $n_p;
	    			}
					echo($class);	
					}
					

					 ?></td>
				 	
				 </tr>
		 	<?php
		 		
		
		 	
			 $query = "SELECT * FROM `gps`WHERE session_id = '$session_id' AND student_id = '$student_id' AND semester_id = '$semester_id'";
			 $result = mysqli_query($con, $query);
			 if (mysqli_num_rows($result) != 0) {
			 	while ($rows = mysqli_fetch_array($result)) {
			 		if ($tpe != $rows['tpe'] AND $tcr != $rows['tcr'] ) {
			 			//$student_id = $rows['id'];
			 			echo "update";
			 			
			 			echo $student_id;
			 			$update = "UPDATE `gps` SET tpe = '$tpe', tcr = '$tcr' WHERE student_id = '$student_id' AND session_id = '$session_id' AND semester_id = '$semester_id' ";
			 			 mysqli_query($con, $update);
			 		} else{
			 			//echo "Record exist";
			 		}
			 	}
			 	
			  } else {
			  	
			  		
			 	$query = "INSERT INTO `gps` (student_id, tce, tcr, tpe, session_id, semester_id) VALUES ('$student_id', '$tce', '$tcr', '$tpe', '$session_id', '$semester_id')";
			 	 mysqli_query($con, $query);

			 	 }

			 	 if($cgpa < 1 AND $semester_id == 2){

			 	 	$query = "SELECT * FROM `gps` WHERE student_id = '$student_id' AND semester_id = 2 AND session_id = '$session_id'";
							if ($num_rows = mysqli_num_rows( mysqli_query($con, $query)) == 1) {
			 	 	 $update = "UPDATE `gps` SET status = 1 WHERE student_id = '$student_id' ";
			 			 mysqli_query($con, $update);
			 	 }
			 }

			 
			
			//$count++;
		
		


			$tce = 0; $tcr = 0; $tpe = 0; $sn++;   

		 	

		 	$sn1++;
		 	
			 	
			 	}
		 	
							
		 		

		
		 
	if ($level_id == 5 || $level_id == 6 || $level_id == 7 ) {
			
			
	 ?>

	 <table>
	 	
	 	<tr>
	 		<td>First Class Honours</td>
	 		<td><?php if ($n_f == 0) {
	 			echo('Nill');
	 		}else { echo($n_f); } ?></td>
	 	</tr>
	 	<tr>
	 		<td>Upper Class Honours</td>
	 		<td><?php if ($n_u == 0) {
	 			echo('Nill');
	 		}else { echo($n_u);} ?></td>
	 	</tr><tr>
	 		<td>Lower Class Honours</td>
	 		<td><?php if ($n_l == 0) {
	 			echo('Nill');
	 		}else { echo($n_l);} ?></td>
	 	</tr><tr>
	 		<td>Third Class Honours</td>
	 		<td><?php if ($n_p == 0) {
	 			echo('Nill');
	 		}else { echo($n_p); }?></td>
	 	</tr>
	 </table>
	<?php } ?>
	 </table>
	
<?php echo('<a style="margin:10px;" class="btn btn-primary"  href="summary.php?semester_id='.$_SESSION['semester_id'].'&'.'session_id='.$_SESSION['session_id'].'&'.'level_id='.$_SESSION['level_id'].'&'.'num_student='.$num_student.'"><i class="fas fa-download"></i> Download Result Summary</a>') ?>

	</div>
	</div>

	</div>
</div>
</section>
</div>
<?php include 'layouts/footer.php';
