<?php include 'connection.php';
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CMMS | Businessman Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
        <img src="../dist/img/buklogo.png" alt="BUK Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
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
            <?php include 'layouts/header.php' ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <section class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1>Businessman Form</h1>
                    </div>
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Businessman Form</li>
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
                          <h3 class="card-title">Form for adding Businessman</h3>
                        </div>

                        <?php if (@$_SESSION['success'] != '') {
                          echo "<div class= 'alert alert-success'>" . $_SESSION['success'] . "</div>";
                          $_SESSION['success'] = '';
                        } elseif (@$_SESSION['danger'] != '') {
                          echo "<div class= 'alert alert-danger'>" . $_SESSION['danger'] . "</div>";
                          $_SESSION['danger'] = '';
                        }
                        ?>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="businessman.php" method="POST">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="fname">First Name</label>
                                  <input type="text" id="fname" name="fname" class="form-control"
                                    placeholder="Enter the Businessman First Name">

                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="othernames">Other Names</label>
                                  <input type="text" id="othernames" name="othernames" class="form-control"
                                    placeholder="Enter the Businessman Other Names">

                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="nationality">Nationality</label>
                                  <select id="nationality" name="nationality" class="form-control"
                                    placeholder="Enter the State">
                                    <option value="">Select Nationality</option>
                                    <option value="Nigerian">Nigerian</option>
                                    <option value="Expatrient">Expatrient</option>

                                  </select>

                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="state">State</label>
                                  <select id="state" name="state" class="form-control" placeholder="Enter the State">
                                    <option value="">Select State</option>
                                    <?php
                                    $sql = "SELECT * FROM `states`";
                                    $query = mysqli_query($con, $sql);
                                    while ($rows = mysqli_fetch_array($query)) {


                                      echo '<option value=' . $rows[1] . '>' . $rows[1] . '</option>';
                                    }
                                    ?>
                                  </select>

                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="lga">LGA</label>
                                  <select id="lga" name="lga" class="form-control" placeholder="Enter the State">
                                    <option value="">Select LGA</option>
                                    <?php
                                    $sql = "SELECT * FROM `lgas`";
                                    $query = mysqli_query($con, $sql);
                                    while ($rows = mysqli_fetch_array($query)) {


                                      echo '<option value=' . $rows[2] . '>' . $rows[2] . '</option>';
                                    }
                                    ?>
                                    ?>
                                  </select>

                                </div>
                              </div>
                            </div>
                            <div class="row">

                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="nin">NIN</label>
                                  <input type="Number" id="nin" name="nin" class="form-control"
                                    placeholder="Enter the NIN">

                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="email">Email Address</label>
                                  <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Enter the Email Address">

                                </div>

                              </div>
                              <div class="col-sm-4">

                                <div class="form-group">
                                  <label for="pnumber">Phone Number</label>
                                  <input type="Number" id="pnumber" name="pnumber" class="form-control"
                                    placeholder="Enter the Phone Number">

                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="r_address">Residential Address</label>
                              <textarea id="r_address" name="r_address" class="form-control"
                                placeholder="Enter the Residential Address"> </textarea>

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
            <?php include 'layouts/footer.php';

            if (isset($_POST['submit'])) {
              $fname = $_POST['fname'];
              $othernames = $_POST['othernames'];
              //$course_id = $_POST['course_id'];
              $state = $_POST['state'];
              $lga = $_POST['lga'];
              $nationality = $_POST['nationality'];
              $r_address = $_POST['r_address'];
              $nin = $_POST['nin'];
              $pnumber = $_POST['pnumber'];
              $email = $_POST['email'];
              //$email = $_POST['email'];


              if (mysqli_query($con, "INSERT INTO `businessman`(`firstname`, `othernames`, `nationality`, `state`, `lga`, `resedentialaddress`, `phoneno`, `nin`, `email`, `inserted_by`) 
              VALUES ('$fname', '$othernames', '$nationality', '$state', '$lga', '$r_address', '$pnumber', '$nin', '$email', 1)")) {

               
                $_SESSION['success'] = 'Record Inserted Successfully';
                echo "<meta http-equiv='refresh' content = '0; url = businessman.php'/>";

              } else {

                $_SESSION['danger'] = 'Record Not Inserted';
                echo "<meta http-equiv='refresh' content = '0; url = businessman.php'/>";


              }
            }

            ?>