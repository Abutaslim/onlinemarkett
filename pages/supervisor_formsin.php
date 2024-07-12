<?php include 'connection.php';
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bufties ~ Global | Supervisor Return Forms</title>

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
                      <h1>Forms Returned by Supervisor</h1>
                    </div>
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Forms Returned</li>
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
                          <h3 class="card-title">Returned Forms Records</h3>
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
                        <form action="supervisor_formsin.php" method="POST">
                          <div class="card-body">
                    
                          <div class="form-group">
                            <label for="supervisor_id">Supervisor</label>
                            <select id="supervisor_id" name="supervisor_id"
                                class="form-control">
                                <option value="">Select Supervisor </option>

                                <?php

                                $sql = "SELECT * FROM `supervisor`";
                                $query = mysqli_query($con, $sql);
                                while ($rows = mysqli_fetch_array($query)) {
                                    echo '<option value=' . $rows[0] . '>' . $rows[1] . '</option>';
                                }
                                ?>
                            </select>
                        </div>  
                                <div class="form-group">
                                  <label for="forms_returned">Forms Returned</label>
                                  <input type="number" id="forms_returned" name="forms_returned" class="form-control"
                                    placeholder="Enter the Number of Forms Returned">
                                </div>

                                <div class="form-group">
                                  <label for="invoice_returned">Invoice Returned</label>
                                  <input type="number" id="invoice_returned" name="invoice_returned" class="form-control"
                                    placeholder="Enter the Amount">
                                </div>

                                <div class="form-group">
                                  <label for="damage_forms">Forms Damaged</label>
                                  <input type="number" id="damage_forms" name="damage_forms" class="form-control"
                                    placeholder="Enter the Quantity of Damaged Forms">
                                </div>

                                <div class="form-group">
                                  <label for="forms_fee">Amount of Sells</label>
                                  <input type="number" id="forms_fee" name="forms_fee" class="form-control"
                                    placeholder="Enter the Quantity of Invoice Returned">
                                </div>

                                <div class="form-group">
                                <label for="date_returned">Date Returned</label>
                                <input type="date" id="date_returned" name="date_returned" class="form-control"class="form-control">
                                </div>
                                
                          <!-- /.card-body -->

                          <div class="card-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            <a href="supervisor_formsin_list.php" class="btn btn-primary float-right">View Supervisors Return Inventory</a>
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
              $supervisor_id = $_POST['supervisor_id'];
              $forms_returned = $_POST['forms_returned'];
              $invoice_returned = $_POST['invoice_returned'];
              $damage_forms = $_POST['damage_forms'];
              $forms_fee = $_POST['forms_fee'];
              $date_returned = $_POST['date_returned'];
             
              if (mysqli_query($con, "INSERT INTO `supervisor_inventory`( `supervisor_id`, `forms_returned`, `invoice_returned`, `damage_forms`, `forms_fee`,`date_returned`)  VALUES 
              ('$supervisor_id', '$forms_returned','$invoice_returned','$damage_forms','$forms_fee','$date_returned')")) {

                $_SESSION['success'] = 'Record Inserted Successfully';
                echo "<meta http-equiv='refresh' content = '0; url = supervisor_formsin.php'/>";

              } else {

                $_SESSION['danger'] = 'Record Not Inserted';
                echo "<meta http-equiv='refresh' content = '0; url = supervisor_formsin.php'/>";
              }
            }
            ?>

<!-- <script>
  function formsfee(){
    expense = document.getElementById('expenses_id');
    a = expense.options[expense.selectedIndex].text;
    b = document.getElementById('forms_returned').value;
    document.getElementById('sharable_profit').value = parseInt(b)*parseInt(a);
  }
</script> -->

<!DOCTYPE html>
<html>
<head>
    <title>Fetch Records Based on Selection</title>
</head>
<body>
    <label for="category">Select a Category:</label>
    <select id="category">
        <option value="category1">Category 1</option>
        <option value="category2">Category 2</option>
        <option value="category3">Category 3</option>
    </select>
    <button id="fetchButton">Fetch Records</button>

    <div id="result"></div>

    <script>
        document.getElementById("fetchButton").addEventListener("change", function () {
            // Get the selected category
            var selectedCategory = document.getElementById("category").value;

            // Send an AJAX request to the server to fetch records
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "fetch_records.php?category=" + selectedCategory, true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Display the fetched records in the result div
                    document.getElementById("result").innerHTML = xhr.responseText;
                }
            };

            xhr.send();
        });
    </script>
</body>
</html>

<?php
// Establish a database connection (you need to provide your database credentials here)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the selected category from the query string
$category = $_GET["category"];

// Query the database based on the selected category
$sql = "SELECT * FROM your_table WHERE category = '$category'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "No records found for the selected category.";
}

$conn->close();
?>


<script type="text/javascript">


  $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
</script>
