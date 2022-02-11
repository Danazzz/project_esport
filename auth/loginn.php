<?php
require_once "../config/conn.php";
 
if(isset($_SESSION['user'])){
  echo "<script>window.location='".base_url()."';</script>";
}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel | Log in Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="icon" href="../dist/img/LogoESIDPS.png">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="loginn.php"><b>Admin</b>Esport</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <?php
      if(isset($_POST['login'])){
          $email = trim(mysqli_real_escape_string($con, $_POST['email']));
          $password = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));
          $login = mysqli_query($con, "SELECT*FROM login WHERE email = '$email' AND password = '$password'") or die (mysqli_error($con));
          if (mysqli_num_rows($login) > 0){
            $_SESSION['user'] = $email;
            echo "<script>window.location='".base_url('')."';</script>";
          }else{ ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-danger alert-dismissable" role="alert">
                        <a href="loginn.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <strong>Login Failed!</strong> Wrong Username / Password
                    </div>
                </div>
            </div>
          <?php
          }
        }?>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="login" class="btn btn-primary btn-block">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1 ml-3">
        <a href="forgot-password.html">forgot password</a>
      </p>
      <p class="mb-3 ml-3">
        <a href="register.php" class="text-center">Register a new User</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
<?php
}
?>