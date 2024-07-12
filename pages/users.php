<?php include 'connection.php';
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bufties_Global | Users Form</title>

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
                      <h1>Users Form</h1>
                    </div>
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users Form</li>
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
                          <h3 class="card-title">Form for Adding Users</h3>
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
                        <form id="users" action="users.php" enctype= "multipart/form-data" method="POST">
                          <div class="card-body">
                    
                          <div class="form-group">
                              <label for="role_ukey">User Role</label>
                              <select id="role_ukey" name="role_ukey" class="form-control" required>
                                  <option value="">Select Role</option>

                                  <?php

                                  $sql = "SELECT * FROM `roles`";
                                  $query = mysqli_query($con, $sql);
                                  while ($rows = mysqli_fetch_array($query)) {
                                      echo '<option value=' . $rows[0] . '>' . $rows[1] . '</option>';
                                  }
                                  ?>
                              </select>
                          </div>
                        
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="name">Full Name</label>
                                  <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Enter Full Name">
                                    <span id="nameError" style="color: red;"></span>
                                </div>
                              </div>

                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="phone_num">Phone Number</label>
                                  <input type="text" id="phone_num" name="phone_num" class="form-control"
                                    placeholder="Enter Phone Number">
                                    <span id="phoneError" style="color: red;"></span>
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="email">Email Address</label>
                              <input type="email" id="email" name="email" class="form-control"
                                placeholder="Enter Email Address">
                                <span id="emailError" style="color: red;"></span>
                                <br>
                            </div>

                            <div class="row">
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="Guarantor">User Name</label>
                                  <input type="text" id="username" name="username" class="form-control"
                                    placeholder="Enter Username">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" id="password" name="password" class="form-control"
                                    placeholder="Enter Password">
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="status">User Status</label>
                                  <select id="status" name="status" class="form-control" required>
                                    <option value="">Select Operator Status</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                  </select>
                                </div>
                              </div>

                              <div class="row">
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <label for="userimage">Image Upload</label>
                                  <input type="file" id="userimage" name="userimage" class="form-control"
                                    placeholder="Upload Image">
                                </div>
                              </div>

                            </div>
                              <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <a href="users_list.php" class="btn btn-primary float-right">View Users</a>
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

            // if (isset($_POST['submit'])) {
              

            //   $sql = "SELECT * FROM users WHERE `name` = '$name' AND phone_num = '$phone_num' AND email = '$email' AND username = '$username'";
            //   $rows = mysqli_num_rows(mysqli_query($con, $sql));
            //    if ($rows == 1) {
            //        $_SESSION['danger'] = 'Record already Exist';
            //        echo "<meta http-equiv='refresh' content = '0; url = supervisor.php'/>";

            //    } else {

          //     if (mysqli_query($con, "INSERT INTO `users`(`role_ukey`, `name`, `phone_num`, `email`, `username`, `password`, `status`) VALUES 
          //       ('$role_ukey','$name','$phone_num','$email','$username','$password','$status')")
          //     ) {

          //       $_SESSION['success'] = 'Record Inserted Successfully';
          //       echo "<meta http-equiv='refresh' content = '0; url = users.php'/>";

          //     } else {

          //       $_SESSION['danger'] = 'Record Not Inserted';
          //       echo "<meta http-equiv='refresh' content = '0; url = users.php'/>";
          //     }
          //   }
          // }

          //Image upload gegins here...
 
  //session_start();
  //include 'user_header.php';
  //include 'connect.php';
 if(isset($_POST['submit']) ) {

  $role_ukey = @$_POST['role_ukey'];
  $name = @$_POST['name'];
  $phone_num = @$_POST['phone_num'];
  $email = @$_POST['email'];
  $username = @$_POST['username'];
  $password = @$_POST['password'];
  $status = @$_POST['status'];
  //$iid = $_SESSION['username'].$oid;
  $sql = "SELECT * FROM users WHERE `name` = '$name' AND phone_num = '$phone_num' AND email = '$email' AND username = '$username'";
          $rows = mysqli_num_rows(mysqli_query($con, $sql));
            if ($rows == 1) {
                $_SESSION['danger'] = 'Record already Exist';
                echo "<meta http-equiv='refresh' content = '0; url = users.php'/>";

               } else {
  //$user = $_SESSION['username'];
  $target_dir = "usersimage/";
//sleep(rand(1,3));
//$text = (@$_FILES["userimage"]["name"]);
//echo $text;
//$t =  explode(".", $text);

//echo $t;
//$image = "";
//$name = rand(1, 999);
$target_file1 = $target_dir .basename(@$_FILES["userimage"]["name"]);;
//echo $target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
$target_file = $target_dir.$username.".".$imageFileType;
//$iname = $name.".".$imageFileType;
$iid = $username.".".$imageFileType;

// Check if image file is a actual image or fake image
@$check = getimagesize(@$_FILES["userimage"]["tmp_name"]);

    
    if($check !== false) {
        
        
        $uploadOk = 1;
        echo "<div class = 'st'>File is an image - " . $check["mime"] . ".</div>";
        //$_SESSION['img'] = 'a';
        
    } else {
        
        
        $uploadOk = 0;
         echo "<div class = 'st'>Sorry, File is not an image.</div>";
       // $_SESSION['img'] = 'b';
    }

// Check if file already exists
if (file_exists($target_file)) {
    
    
    $uploadOk = 0;
    echo "<div class = 'st'>Sorry, file already exists.</div>";
   // $_SESSION['img'] = 'c';
}
// Check file size
if (@$_FILES["userimage"]["size"] > 1000000) {
    
   
    $uploadOk = 0;
    echo "<div class = 'st'>Sorry, your file is too large.</div>";
   // $_SESSION['img'] = 'd';
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    
    $uploadOk = 0;
echo "<div class = 'st'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>";
    //$_SESSION['img'] = 'e';
    
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<div class = 'st'>Sorry, your file was not uploaded.</div>";
   // $_SESSION['img'] = 'f';
    
// if everything is ok, try to upload file
} else {
    
  if  (move_uploaded_file(@$_FILES["userimage"]["tmp_name"], $target_file)){
    
    $s = "INSERT INTO `users` (`role_ukey`, `name`, `phone_num`, `email`, `username`, `password`, `image_path`) VALUES ('$role_ukey', '$name', '$phone_num', '$email', '$username', '$password', '$iid')";
        if (mysqli_query($con, $s)){
            echo "<div class = 'st'>Successfully Inserted</div>";
        }


    move_uploaded_file(@$_FILES["userimage"]["tmp_name"], $target_file);
       
     
     echo "<div class = 'st'>The file ". basename( @$_FILES["userimage"]["name"]). " has been uploaded.<div>";   
     // $_SESSION['img'] = 'g';
    } else {
         echo "<div class = 'st'>Sorry, there was an error uploading your file.</div>";
       // $_SESSION['img'] = 'h';
      $sub2 = '';  
    }
}
}
}
//include 'footer.php';
?>

<script>
        document.getElementById("users").addEventListener("submit", function(event) {
            var nameField = document.getElementById("name");
            var nameError = document.getElementById("nameError");
            var nameValue = nameField.value.trim(); // Trim leading and trailing whitespace

            if (nameValue === "") {
                nameError.textContent = "Name is required";
                event.preventDefault(); // Prevent form submission
            } else if (!/^[A-Za-z\s]+$/.test(nameValue)) {
                nameError.textContent = "Name must contain only letters";
                event.preventDefault(); // Prevent form submission
            } else {
                nameError.textContent = ""; // Clear any previous error message
            }
        });

// To validate email Field
        const users = document.getElementById("users");
        const emailInput = document.getElementById("email");
        const emailError = document.getElementById("emailError");

        emailForm.addEventListener("submit", function (event) {
            const email = emailInput.value;

            // Regular expression to validate email addresses
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            if (!emailPattern.test(email)) {
                event.preventDefault(); // Prevent form submission
                emailError.textContent = "Please enter a valid email address.";
                emailError.style.display = "block";
            } else {
                emailError.style.display = "none";
            }
        });

//To validate Phone Number
// const users = document.getElementById("users");
//         const phone_numInput = document.getElementById("phone_num");
//         const phoneError = document.getElementById("phoneError");

//         users.addEventListener("submit", function (event) {
//             const phone_num = phone_numInput.value;

//             // Regular expression to validate 11-digit phone numbers
//             const phonePattern = /^\d{11}$/;

//             if (!phonePattern.test(phone_num)) {
//                 event.preventDefault(); // Prevent form submission
//                 phoneError.textContent = "Please enter a valid 11-digit phone number.";
//                 phoneError.style.display = "block";
//             } else {
//                 phoneError.style.display = "none";
//             }
//         });
</script>