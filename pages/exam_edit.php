<?php    include 'connection.php'; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BUK~AEE | Exam Edit Form</title>

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
            <h1>Exam Edit Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Exam Edit Form</li>
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
                <h3 class="card-title">Form for adding Student Exam</h3>
              </div>

              <?php if (@$_SESSION['success'] != '') {
              echo "<div class= 'alert alert-success'>".$_SESSION['success'] ."</div>";
              $_SESSION['success'] = ''; 
              } elseif (@$_SESSION['danger'] != '') {
              echo "<div class= 'alert alert-danger'>".$_SESSION['danger'] ."</div>";
              $_SESSION['danger'] = ''; 
              }
              ?>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="exam_edit.php" method="POST">
                <?php include 'connection.php';
                      $id = @$_GET['id'];
                      $student_id = 0;
                      $student_name = '';
                      $student_reg = '';
                      $student_score = 0;
                      $faculty_id = 0;
                      $course_id = 0;
                      $department_id =0;
                      $level_id = 0;
                      $session_id = 0;
                      $semester_id = 0;
                      $examtype = 0;
                      $stm = $pdo->query("SELECT a.*, b.student_name, b.regno FROM exams a JOIN student b ON a.stud_id = b.id  WHERE a.id = '$id'");

                      $rows = $stm->fetchAll(PDO::FETCH_NUM);
                      // $_SESSION['ukey'] = $row[0];

                      $sn = 1;
                      foreach($rows as $row) {
                        // $_SESSION['ukey'] = $row[0];

                        
                        $student_id = $row[5];
                        $student_score = $row[2];
                        $faculty_id = $row[4];
                        $course_id = $row[1];
                        $department_id = $row[3];
                        $session_id = $row[6];
                        $semester_id = $row[8];
                        $level_id = $row[7];
                        $examtype_id = $row[9];
                        }
                         
                    ?>
                
                <div class="card-body">
                  <div class="form-group">
                    <label for="student_name">Student Name</label>
                    <select id="student_id" name="student_id" required class="form-control">
                      <option value="">Select Student Name and Registration Number</option>
                      <?php
                         $sql = "SELECT id, regno, student_name FROM `student`";
                        $query=  mysqli_query($con, $sql);  
                        while ($rows = mysqli_fetch_array($query)) {
                            $regno = $rows['regno'];  $student_name= $rows['student_name']; 
                            $student = $student_name.' '.'('.$regno.')';

                            echo '<option value='.$rows[0].'>'.$student.'</option>';
                        }
                      ?>
                    </select>
                  
                  </div>
                  <div class="form-group">
                    <label  for="department_id">Department </label>
                   <select id="department_id" name="department_id" required class="form-control">
                      <option value="">Select Department </option>
                       <?php    
    
                         $sql = "SELECT * FROM `department`";
                        $query=  mysqli_query($con, $sql);  
                        while ($rows = mysqli_fetch_array($query)) {
                            echo '<option value='.$rows[0].'>'.$rows[1].'</option>';
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label  for="faculty_id">Faculty </label>
                   <select id="faculty_id" name="faculty_id" required class="form-control">
                      <option value="">Select Faculty </option>
                      <?php
    
    
                         $sql = "SELECT * FROM `faculty`";
                        $query=  mysqli_query($con, $sql);  
                        while ($rows = mysqli_fetch_array($query)) {
                            echo '<option value='.$rows[0].'>'.$rows[1].'</option>';
                        }
                      ?>
                    </select>
                  </div><div class="form-group">
                    <label  for="level_id">Level </label>
                   <select id="level_id" name="level_id" required  class="form-control">
                      <option value="">Select Level </option>
                        <?php
                            
                            
                             $sql = "SELECT * FROM `level`";
                            $query=  mysqli_query($con, $sql);  
                            while ($rows = mysqli_fetch_array($query)) {
                                echo '<option value='.$rows[0].'>'.$rows[1].'</option>';
                            }
                          ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label  for="session_id">Session </label>
                   <select id="session_id" name="session_id" required class="form-control">
                      <option value="">Select Session </option>
                      <?php
    
    
                         $sql = "SELECT * FROM `session`";
                        $query=  mysqli_query($con, $sql);  
                        while ($rows = mysqli_fetch_array($query)) {
                            echo '<option value='.$rows[0].'>'.$rows[1].'</option>';
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label  for="semester_id">Semester </label>
                   <select id="semester_id" name="semester_id" required class="form-control">
                      <option value="">Select Semester </option>
                      <?php
    
    
                         $sql = "SELECT * FROM `semester`";
                        $query=  mysqli_query($con, $sql);  
                        while ($rows = mysqli_fetch_array($query)) {
                            echo '<option value='.$rows[0].'>'.$rows[1].'</option>';
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label  for="course_id">Course </label>
                   <select id="course_id" name="course_id" required class="form-control">
                      <option value="">Select Course</option>
                      <?php
    
                        
                         $sql = "SELECT * FROM `course`";
                         $sql = "SELECT id, course_name, course_code FROM `course`";
                        $query=  mysqli_query($con, $sql);  
                        while ($rows = mysqli_fetch_array($query)) {
                            $cname = $rows['course_name'];  $ccode= $rows['course_code']; 
                            $course = $cname.' '.'('.$ccode.')';

                            echo '<option value='.$rows[0].'>'.$course.'</option>';
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exam_type">Exam Type:</label>
                    <select id="examtype_id" class="form-control" name="examtype_id">
                      <option value="">Select Exam Type</option>
                      <?php
                         $sql = "SELECT * FROM `examtype` ";
                        $query=  mysqli_query($con, $sql);  
                        while ($rows = mysqli_fetch_array($query)) {
                           

                            echo '<option value='.$rows[0].'>'.$rows[1].'</option>';
                        }
                      ?>
                    </select>
                  </div>
                   <div class="form-group">
                    <label  for="student_score">Student Score</label>
                    <input type="Number" name="student_score" id="student_score" required  class="form-control" id="student_score" placeholder="Enter Student Score">
                    <input type="hidden" name="hidden_id" value="<?php echo($id); ?>
                  ">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
		</div>

	</div>
</div>
</section>
</div>
<script type="text/javascript">
  document.getElementById('student_id').value = '<?php echo $student_id; ?>';
  document.getElementById('student_score').value = '<?php echo $student_score; ?>';
  document.getElementById('department_id').selectedIndex = '<?php echo $department_id; ?>';
  document.getElementById('level_id').selectedIndex = '<?php echo $level_id; ?>';
  document.getElementById('session_id').selectedIndex = '<?php echo $session_id; ?>';
  document.getElementById('semester_id').selectedIndex = '<?php echo $semester_id; ?>';
  document.getElementById('faculty_id').selectedIndex = '<?php echo $faculty_id; ?>';
  document.getElementById('examtype_id').selectedIndex = '<?php echo $examtype_id; ?>';
  document.getElementById('course_id').selectedIndex = '<?php echo $course_id; ?>';
</script>
<?php include 'layouts/footer.php'; 

  if (isset($_POST['submit'])) {
    // echo('arg1');
    $hidden_id = $_POST['hidden_id'];
    $student_id = $_POST['student_id'];
    $student_score = $_POST['student_score'];
    $course_id = $_POST['course_id'];
    $examtype_id = $_POST['examtype_id'];
    $faculty_id = $_POST['faculty_id'];
    $department_id = $_POST['department_id'];
    $level_id = $_POST['level_id'];
    $session_id = $_POST['session_id'];
    $semester_id = $_POST['semester_id'];
    // $year_entry_id = $_POST['session'] 
    //echo($id);
    if($pdo->exec("UPDATE `exams` SET `stud_id`='$student_id',`score`='$student_score',`course_id`='$course_id',`department_id`='$department_id',`faculty_id`='$faculty_id',`level_id`='$level_id',`session_id`='$session_id', `examtype_id` = '$examtype_id' WHERE `id` = '$hidden_id'") === false) 
    
     { 
      $_SESSION['danger'] ='Record Not Updated, Please try again, if it persist contact system Administrator';
      echo "<meta http-equiv='refresh' content = '0; url = exam_edit.php'/>";

      
     } else {
      $_SESSION['success'] ='Record Updated Successfully';
      echo "<meta http-equiv='refresh' content = '0; url = exam_list.php'/>";

      }
  }
?>
<?php 

// if(isset($_POST['submit'])) {
//     $student_id = $_POST['student_id'];
//    $course_id = $_POST['course_id'];
//     //$course_id = $_POST['course_id'];
//     $faculty_id = $_POST['faculty_id'];
//     $department_id = $_POST['department_id'];
//     $level_id = $_POST['level_id'];
//     $semester_id = $_POST['semester_id'];
//     $session_id = $_POST['session_id'];
//     $student_score = $_POST['student_score'];
//     $examtype_id = $_POST['examtype_id'];
    

//     if(mysqli_query($con,"INSERT INTO `exams` (stud_id, faculty_id, department_id, semester_id, session_id, level_id, course_id, score, examtype_id) VALUES ('$student_id', '$faculty_id', '$department_id', '$semester_id', '$session_id', '$level_id', '$course_id', '$student_score', '$examtype_id')")) 
    
//       { 

//       if ($student_score < 40) {
//        $q = "SELECT `id` FROM `carry_over` WHERE `student_id` = '$stud_id' and `course_id`='$filedata[3]' ";
//     $result = mysqli_query($con, $q);
//     if (mysqli_num_rows($result) == 1) {
//       if ($student_score >= 40) {
        
      

//       $q = "UPDATE carry_over SET `status` = 1 WHERE stud_id = '$stud_id' AND course_id = '$course_id' ";
      
//     } else {
//         $query = "INSERT INTO `carry_over` (`course_id`, `department_id`,`faculty_id`,`student_id`,`session_id`, `level_id`, `semester_id`) VALUES ('$course_id', '$department_id','$faculty_id','$stud_id','$session_id','$level_id','$semester_id')";
//           mysqli_query($con, $query);

//       }
//     }
//        $_SESSION['success'] ='Record Inserted Successfully';
//       echo "<meta http-equiv='refresh' content = '0; url = exam.php'/>";
      
//     } else {

//       $_SESSION['danger'] ='Record Not Inserted';
//       echo "<meta http-equiv='refresh' content = '0; url = exam.php'/>";

     
//     }
// }
// }
// ?>