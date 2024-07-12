<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BUK~AEE | Student List Upload Form</title>

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
 <
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student Upload </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Upload </li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
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
                <h3 class="card-title">Student List Upload Form</h3>
                <?php if (@$_SESSION['success'] != ''){
                echo "<div class= 'alert alert-success'>".$_SESSION['success']."</div>";
                $_SESSION['success'] = ''; 
                } elseif (@$_SESSION['danger'] != ''){
                echo "<div class= 'alert alert-danger'>".$_SESSION['danger']."</div>";
                $_SESSION['danger'] = ''; 
                }
                ?>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="student_list_upload.php" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                  <!-- <div class="form-group">
                    <label for="faculty_id">Faculty</label>
                    <select id="faculty_id" class="form-control" required name="faculty_id">
                      <option value="">Select Faculty: </option>
                      <?php
                      
                        //  $sql = "SELECT * FROM `faculty`";
                        // $query=  mysqli_query($con, $sql);  
                        // while ($rows = mysqli_fetch_array($query)) {
                           

                        //     echo '<option value='.$rows[0].'>'.$rows[1].'</option>';
                        // }
                      ?>
                      </select>
                  </div> -->
                  <!-- <div class="form-group">
                    <label for="department_id">Department</label>
                     <select id="department_id" class="form-control" required name="department_id">
                        <option value="">Select Department: </option>
                        <?php
                          //  $sql = "SELECT * FROM `department`";
                          // $query=  mysqli_query($con, $sql);  
                          // while ($rows = mysqli_fetch_array($query)) {
                             

                          //     echo '<option value='.$rows[0].'>'.$rows[1].'</option>';
                          // }
                        ?>
                        </select>
                    
                  </div> -->
                  <div class="form-group">
                    <label for="level_id">Level</label>
                     <select id="level_id" class="form-control" required name="level_id">
                        <option value="">Select level: </option>
                        <?php
                           $sql = "SELECT * FROM `level`";
                          $query=  mysqli_query($con, $sql);  
                          while ($rows = mysqli_fetch_array($query)) {
                             

                              echo '<option value='.$rows[0].'>'.$rows[1].'</option>';
                          }
                        ?>
                        </select>
                    
                  </div>
                  
                  <!-- <div class="form-group">
                    <label for="programme_id">Programme</label>
                    <select id="programme_id" class="form-control" required name="programme_id">
                      <option value="">Select Level</option>
                      <?php
                        //  $sql = "SELECT * FROM `course_of_study`";
                        // $query=  mysqli_query($con, $sql);  
                        // while ($rows = mysqli_fetch_array($query)) {
                           

                        //     echo '<option value='.$rows[0].'>'.$rows[1].'</option>';
                        // }
                      ?>
                      </select>
                    
                  </div>
                   -->
                  <div class="form-group">
                    <label for="session">Session:</label>
                    <select id="session_id" class="form-control" required name="session_id">
                      <option value="">Select Session</option>
                      <?php
                         $sql = "SELECT * FROM `session` ORDER BY year DESC";
                        $query=  mysqli_query($con, $sql);  
                        while ($rows = mysqli_fetch_array($query)) {
                           

                            echo '<option value='.$rows[0].'>'.$rows[1].'</option>';
                        }
                      ?>
                    </select>
                  </div>
                  
                      
                  <div class="form-group">
                    <label for="exampleInputFile">Students File Format (CSV) Oganization (Name, Registration Number)</label>
                        <input type="file" class="form-control" required name="csv_file" id="exampleInputFile">
                        
                  </div>
                  <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                </div>
              </form>
                </div>
            <!-- /.card -->
    </div>

  </div>
</div>
</section>
</div>
<?php include 'layouts/footer.php'; 
if (isset($_POST['submit']) ) {
  
// $faculty_id = $_POST['faculty_id'];
// $department_id = $_POST['department_id'];
$level_id = $_POST['level_id'];
// $programme_id = $_POST['programme_id'];
$session_id = $_POST['session_id'];
//$semester_id = $_POST['semester_id'];
$file = $_FILES['csv_file']['tmp_name'];
$handle = fopen($file,"r");
$denger = '';
$success = '';
  

while (($filedata = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        
                     
                     $query = "INSERT INTO `student` (`regno`, `student_name`, `session_id`, `level_id`) VALUES ('$filedata[0]', '$filedata[1]','$session_id','$level_id')";
                    if(mysqli_query($con, $query)){

                      $_SESSION['success'] = "Uploaded Successfully";
                      echo "<meta http-equiv='refresh' content = '0; url = student_list_upload.php'/>";
                    } else {

                      $_SESSION['denger'] = 'Not Uploaded';
                      echo "<meta http-equiv='refresh' content = '0; url = student_list_upload.php'/>";
                    }

              //     $i++;

              }

               }
   
               

?>
      


