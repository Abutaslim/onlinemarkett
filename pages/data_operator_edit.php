<?php include 'connection.php';
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bufties_Global | Operator Form</title>

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
        <img src="../dist/img/Bufties_Logo.JPG" alt="Bufties Logo" class="brand-image img-circle elevation-"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Bufties ~ Tracker</span>
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
                      <h1>Data Operator Form</h1>
                    </div>
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Operator Form</li>
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
                          <h3 class="card-title">Form for Editing Data Operator</h3>
                        </div>

                        <?php //if (@$_SESSION['success'] != '') {
                         // echo "<div class= 'alert alert-success'>" . $_SESSION['success'] . "</div>";
                          //$_SESSION['success'] = '';
                        //} elseif (@$_SESSION['danger'] != '') {
                         // echo "<div class= 'alert alert-danger'>" . $_SESSION['danger'] . "</div>";
                          //$_SESSION['danger'] = '';
                        //}
                            $id = @$_GET['id'];
                            $fullname = '';
                            $phone_number = '';
                            $operator_address = '';
                            $guarantor_name = '';
                            $guarantor_phone = '';
                            $status = 0;
                            $hidden_id = 0;

                            $result = mysqli_query($con, "SELECT * FROM `data_operator` WHERE id = $id ");
                                while (@$row = mysqli_fetch_array($result)) {

                                    $fullname = $row[1];
                                    $phone_number = $row[2];
                                    $operator_address = $row[3];
                                    $guarantor_name = $row[4];
                                    $guarantor_phone = $row[5];
                                    $status = $row[6];
                                    $hidden_id = $row[0];
                                }
                        ?>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="data_operator_edit.php" method="POST">
                          <div class="card-body">

                            <div class="row">

                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="rc">Full Name</label>
                                  <input type="text" id="fullname" name="fullname" class="form-control"
                                    placeholder="Enter Full Name">

                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="Phone_number">Phone Number</label>
                                  <input type="Number" id="phone_number" name="phone_number" class="form-control"
                                    placeholder="Enter the Phone Number">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="operator_address">Operator's Address</label>
                              <textarea id="operator_address" name="operator_address" class="form-control"
                                placeholder="Enter the Operator's Address"> </textarea>

                            </div>
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="form-group">

                                  <label for="Guarantor">Guarantor's Name</label>
                                  <input type="text" id="guarantor_name" name="guarantor_name" class="form-control"
                                    placeholder="Enter Guarantor's Name">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="guarantor_phone">Guarantor's Phone</label>
                                  <input type="Number" id="guarantor_phone" name="guarantor_phone" class="form-control"
                                    placeholder="Enter Guarantor's Phone Number">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="status">Data Operator Status</label>
                                  <select id="status" name="status" class="form-control">
                                    <option value="">Select Operator Status</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                  </select>
                                </div>
                              </div>
                               
                                <input type="hidden" value= "<?php echo $hidden_id; ?>" name = 'hidden_id'>

                            </div>
                              <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <a href="data_operator_list.php" class="btn btn-primary float-right">View Data Operators</a>
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
              $fullname = $_POST['fullname'];
              $phone_number = $_POST['phone_number'];
              $operator_address = $_POST['operator_address'];
              $guarantor_name = $_POST['guarantor_name'];
              $guarantor_phone = $_POST['guarantor_phone'];
              $data_operator_id = $_POST['hidden_id'];
              $status = $_POST['status'];

              if (mysqli_query($con, "UPDATE `data_operator` SET `fullname` = '$fullname', `phone_number` = '$phone_number', `address` = '$operator_address', `guarantor` = '$guarantor_name', `guarantor_phone` = '$guarantor_phone', `status` = '$status' WHERE `id` = '$data_operator_id'"))
                
                {

                $_SESSION['success'] = 'Record Updated Successfully';
                echo "<meta http-equiv='refresh' content = '0; url = data_operator_list.php'/>";

              } else {

                $_SESSION['danger'] = 'Record Not Inserted';
                echo "<meta http-equiv='refresh' content = '0; url = data_operator_edit.php'/>";
              }
            }
            ?>

<script type="text/javascript">
  document.getElementById('fullname').value = '<?php echo $fullname; ?>';
  document.getElementById('phone_number').value = '<?php echo $phone_number; ?>';
  document.getElementById('operator_address').value = '<?php echo $operator_address; ?>';
  document.getElementById('guarantor_name').value = '<?php echo $guarantor_name; ?>';
  document.getElementById('guarantor_phone').value = '<?php echo $guarantor_phone; ?>';
  document.getElementById('status').selectedIndex = '<?php echo $status; ?>';
</script>