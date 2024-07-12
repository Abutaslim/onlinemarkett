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
            <h1>Raw Marks</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Raw Marks</li>
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
                <h3 class="card-title">A Page that displays Student Raw Marks</h3>
              </div>
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
  font-size: 13.5px;
  border: 1px solid black;
}

table{
	margin-left: auto;
	margin-right: auto;
}
</style>

<table  style="width: 60%; margin-left: auto;margin-right: auto;">
	
	<tr>
		<th><img style="float: right; height: 50px; width: 50px" src="../images/buklogo.png">
		
		</th>
		<th style="width: 70%;text-align: left;">
			<h5>FACULTY OF AGRICULTURE</h5>
		<h5>BAYERO UNIVERSITY, KANO</h5>
		</th>
	</tr>
	<tr>
		<th colspan="2"><h5 style=" text-align: center; ">Submission to the Senate through SBC (Raw Marks)</h5></th>
	</tr>
</table>
	<div style="text-align: center; padding-bottom: 5px;"> Session: <?php echo($_SESSION['session_name'].' | Semester: '.$_SESSION['semester_name'].' | Programme: B. Sc. Agricultural Extension | Level: '.$_SESSION['level_name'].' | Date: '.date('d/m M/Y')); ?></div >
<div style="overflow-x: auto;">
<table class="table" style="border: 1px solid black; width: 1400px; margin: 15px">
		
	
		<?php
		
			$sn = 1;
			 $session_id = $_SESSION['session_id'];
			$semester_id = $_SESSION['semester_id'];
			$level_id = $_SESSION['level_id'];
			//$num_student = $_SESSION['num_student'];

			$result = @mysqli_query($con,"SELECT DISTINCT b.stud_id FROM `exams` b JOIN student a ON b.`stud_id` = a.id JOIN course c ON c.id = b.`course_id`  WHERE  b.session_id = '$session_id' AND b.semester_id = '$semester_id' AND b.level_id = '$level_id' "); 
	 $num_student = mysqli_num_rows($result);
			$list_courses = [];
		?>
	
		
	
		<?php
	$i = 0;
	$sn = 1;
	 
	$courseData = []; $regno = 0;
	$result = mysqli_query($con,"SELECT a.id, a.student_name, a.regno, b.score,c.course_name, c.course_code FROM `exams` b JOIN student a ON b.`stud_id` = a.id JOIN course c ON c.id = b.`course_id`  WHERE  b.session_id = '$session_id' AND b.semester_id = '$semester_id' AND b.level_id = '$level_id'");
	$num = mysqli_num_rows($result);
	
	
	for ($r=0; $r < $num_student ; $r++) {

		$result = mysqli_query($con,"SELECT a.id FROM `student` a left JOIN exams b ON a.id = b.stud_id WHERE  b.`session_id` = '$session_id' AND b.level_id = '$level_id'");
	$num = mysqli_num_rows($result);
	$i = 0;
	while ($row = mysqli_fetch_array($result)) {
		if ($i < $num_student) {
			  $courseData[$i] = $row[0];
		}
		

		$i++;
	}
	$i = 0;	
	 $regno = $courseData[$r];
	$result = @mysqli_query($con,"SELECT id, course_code FROM `course` WHERE level_id = '$level_id' AND semester_id = '$semester_id'"); 
	// echo $num = mysqli_num_rows($result);
	?>
	<tr class="head">
	<?php
		
		if ($r == 0 ) {
	?>
		<th class="head" style="width: 10px">S/N</th>
		<th class="head" style="width: 100px;">Reg. Num</th>
 		<th class="head" style="width: 150px; ">Name</th>

	 <?php 	 
		}
	$lc =  0;
	while ($row = @mysqli_fetch_array($result)) {

		
		if ($r == 0) {

		?>
			<th class="head" style="width: 30px;"><?php echo $row[1];
			$list_courses[$lc] = $row[0];
			?></th>
<?php 	$lc++;
		}

		$i++;
	
			
	}
	?>
	</tr>
	<?php 	
	$i = 0;
	// print_r($list_courses);
	$regno = $courseData[$r];
	$result = @mysqli_query($con,"SELECT a.regno,a.student_name,  b.score,c.course_name, c.course_code, c.id FROM `exams` b JOIN student a ON b.`stud_id` = a.id JOIN course c ON c.id = b.`course_id`  WHERE `stud_id` = '$regno' AND b.session_id = '$session_id' AND b.semester_id = '$semester_id' AND b.level_id = '$level_id' "); 
	// echo $num = mysqli_num_rows($result);
	?>
	<tr class="head">
		<?php 	
	while ($row = @mysqli_fetch_array($result)) {

		if ($i == 0) {
			?>
		<td class="data"   ><?php echo $sn; ?></td>
 		<td class="data"  style="width: 120px;"><?php echo $row[0]; ?></td>
		<td class="data"  style="width: 130px;  text-align: left; "><?php echo $row[1];?></td>

	<?php 	

		} ?>
		<?php
		 $query_courses = @mysqli_query($con,"SELECT a.student_name, a.regno, b.score,c.course_name, c.course_code, c.id, count(distinct (a.regno)) FROM `exams` b JOIN student a ON b.`stud_id` = a.id JOIN course c ON c.id = b.`course_id`  WHERE `stud_id` = '$regno' AND b.session_id = '$session_id' AND b.semester_id = '$semester_id' AND b.level_id = '$level_id' AND b.examtype_id = 1 AND c.id =  '".$list_courses[$i]."'   "); 
	// echo $num = mysqli_num_rows($result);
	?>
	
		<?php 	
	while ($row = @mysqli_fetch_array($query_courses)) {
		 if ($row[2] <40 AND $row[2] !=0 ) {
			?>

			<th style="width: 30px; text-align: center; border: 1px solid black;"><?php

			echo $row[2];

			
			?></th>
			<?php 

			
		} elseif ($row[2] == 0) {
			?>
			<th style="width: 30px; text-align: center; border: 1px solid black;">ABS</th>
			<?php
		} else {
			?>

			<td style="width: 30px; text-align: center; border: 1px solid black;"><?php 


			echo $row[2];

			}
			?></td>
		<?php
		$i++;
	}
	}
		$sn++;	
		// echo $r;
	?>

	
	<?php
	
	
	
	}
?>

</table>
</div>

<table style="margin: 20px;">
	<thead>
		<th>Course Code</th>
		<th style="text-align: left;">Course Title</th>
	</thead>
	
<?php 
$i = 0;
$lc = 0;
// print_r($list_courses);

	//($course_code);

$result = mysqli_query($con,"SELECT * FROM course  WHERE  level_id = '$level_id' AND semester_id = '$semester_id'  ORDER BY `course_code` ");
	while ($row = mysqli_fetch_array($result)) {
	
			echo '<tr>
		<td>'.$row[1].'</td>
		<td>'.$row[2].'</td>
	</tr>';
		
}
	?>
</table>
<?php echo('<a style="margin:10px;" class="btn btn-primary" href="raw.php?semester_id='.$_SESSION['semester_id'].'&'.'session_id='.$_SESSION['session_id'].'&'.'level_id='.$_SESSION['level_id'].'&'.'num_student='.$num_student.'"><i class="fas fa-download"></i> Download Raw Marks</i></a>') ?>

	</div>

	</div>
</div>
</section>
</div>
<?php include 'layouts/footer.php';
