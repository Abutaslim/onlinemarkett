
<?php
include 'pages/connection.php';
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bufties ~ Tracker | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../index2.html"><b>BUFTIES ~ </b>TRACKER</a>
  </div>
  <?php if (@$_SESSION['output'] != '') {
              echo($_SESSION['output']);
              $_SESSION['output'] = '';
              
            } 
    ?>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="login1.php" method="POST">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <!-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="signin" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
       --><!-- /.social-auth-links -->

        <!-- <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p> -->
      <!-- <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>

<?php 
  if (isset($_POST['signin'])) {
    # code...
    
$username=$_POST["email"];
  $password=$_POST["password"];
  //$password=md5($password);

  $sql="select `ukey`, role_ukey, username,`email`,`password`, image_path from `users`  where `email`= '$username'";

  // $stmt = $pdo->prepare($sql);
  // $stmt->execute([
  //         'username' => $username,        
  //     ]);
    
  // $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $hash_password = '';
  $result = mysqli_query($con,$sql);
  $nrows = @mysqli_num_rows($result);
  if ($nrows == 0)  {
    echo '<div class="login">This Account does`nt exist</div>';
  } else {
  // echo $nrows;
    $hash_password = '';
  while ($rows = mysqli_fetch_array($result)) {
    $hash_password=$rows['password']; 

      if ($password == $hash_password) 
      {
          // Success!
        
        $_SESSION["user_id"]=$rows['ukey'];
        $_SESSION["role"]=$rows[1];
        $_SESSION["username"]=$rows[2];
        $_SESSION["image_path"]=$rows[5];
       echo "<meta http-equiv='refresh' content = '0; url = pages/dashboard.php'/>";
      }
      else
          {
        echo '<div class="login">Invalid Password</div>';

      } 
    }
  }
  }
 ?>
