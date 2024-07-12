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
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="logout.php" class="nav-link">Logout</a>
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
            <h1>Carry Over Courses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Carry Over Courses</li>
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
                <h3 class="card-title">A Page that displays Carry Over Courses</h3>
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
 .head, .data, .td {
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
    <th colspan="2"><h5 style=" text-align: center; ">Submission to the Senate through SBC (Carry Over Courses)</h5></th>
  </tr>
</table>
  <div style="text-align: center; padding-bottom: 5px;"> Session: <?php echo($_SESSION['session_name'].' | Semester: '.$_SESSION['semester_name'].' | Programme: B. Sc. Agricultural Extension | Level: '.$_SESSION['level_name'].' | Date: '.date('d/m M/Y')); ?></div >
<div style="overflow-x: auto;">
<table class="table" style="border: 1px solid black; width: 100%; margin: 15px">
    
  
    <?php
    
      $sn = 1;
       $session_id = $_SESSION['session_id'];
      $semester_id = $_SESSION['semester_id'];
      $level_id = $_SESSION['level_id'];
      $num_student = $_SESSION['num_student'];
      $list_courses = [];
    

  $i = 0;
  $sn = 1;

  ?>
   <tr class="head">
  
    <th class="head" style="width: 10px; text-align: center;  ">S/N</th>
    <th class="head" style="width: 100px;">Reg. Num</th>
    <th class="head" style="width: 150px; ">Name</th>

  
      <th class="head" style="width: 30px;">COURSE CODES AND SCORES</th>
      
  </tr>


<?php
  $student_id = []; $regno = 0;


    $result = mysqli_query($con,"SELECT DISTINCT stud_id  FROM `exams`  WHERE  session_id = '$session_id' AND semester_id = '$semester_id' AND level_id = '$level_id' AND examtype_id = 2");
  //$num = mysqli_num_rows($result);
  $i = 0; $sn = 1;
  while ($row = mysqli_fetch_array($result)) {
    
        //$student_id[$i] = $row[0];

        // echo($row[0]."<br>");

        $result1 = @mysqli_query($con,"SELECT b.regno, b.student_name, c.course_code, a.score  FROM `exams` a JOIN student b ON b.id = a.stud_id  JOIN course c ON c.id = a.`course_id`  WHERE `stud_id` = '$row[0]' AND a.session_id = '$session_id' AND a.semester_id = '$semester_id' AND a.level_id = '$level_id' AND a.examtype_id = 2 "); 
   //$num = mysqli_num_rows($result);
 
 $r =  0; $prev_reg = ''; 
  while ($row1 = @mysqli_fetch_array($result1)) {

    
if ($prev_reg == $row1[0]) {
  ?>  
    
      <td class="head" style="width: 30px;"><?php echo $row1[2]."(".$row1[3].")"; ?></td>
  
  <?php
} else {

    ?>
     <tr>
    <td class="head" style="width: 10px; text-align: center;"><?php echo($sn); ?></td>
      <td class="head" style="width: 30px;"><?php echo $row1[0]; ?></td>
      <td class="head" style="width: 30px;"><?php echo $row1[1]; ?></td>
      <td class="head" style="width: 30px;"><?php echo $row1[2]."(".$row1[3].")"; ?></td>
      


 <?php

}
 $prev_reg = $row1[0];
 if ($prev_reg != $row1[0]) {
   echo '</tr>';


 }
 
 $r++;
    }

  
  $sn++;
      
  }
 
 
   
    
   
  //print_r($list_courses);
  //$regno = $courseData[$r];
  ?>
</table>
<?php echo('<a style="margin:10px;" class="btn btn-primary" href="carry_over_courses_excel.php?semester_id='.$_SESSION['semester_id'].'&'.'session_id='.$_SESSION['session_id'].'&'.'level_id='.$_SESSION['level_id'].'&'.'num_student='.$_SESSION['num_student'].'"><i class="fas fa-download"></i> Download Carry Over Courses</i></a>') ?>

  </div>

  </div>
</div>
</section>
</div>
<?php include 'layouts/footer.php';
