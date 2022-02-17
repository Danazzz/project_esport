<?php
require_once "../config/conn.php";

//Code for Registration 
if(isset($_POST['register'])) {
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$enc_password=$password;
	$msg=mysqli_query($con,"insert into user(username,email,password) values('$username','$email','$password')");
	if($msg) {
		echo "<script>alert('Register successfully');</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel | Registration Page</title>

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
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href=""><b>Admin</b>Esport</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new User</p>

      <?php
      if(isset($_POST['register'])){
        $password = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));
        $pw1 = sha1(trim(mysqli_real_escape_string($con, $_POST['pw1'])));
        if ($_POST['password']== $_POST['pw1']){
          $id_user = uniqid();
          $username = trim(mysqli_real_escape_string($con, $_POST['username']));
          $email = trim(mysqli_real_escape_string($con, $_POST['email']));
          $password = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));
      
          mysqli_query($con,"INSERT INTO login (id_user, email, password ) VALUES ( '$id_user', '$email', '$password')") or die (mysqli_error($con));
          mysqli_query($con,"INSERT INTO user (id_user, username) VALUES ('$id_user', '$username')") or die (mysqli_error($con));
          echo "<script>alert('Data berhasil ditambah');window.location='loginn.php';</script>";
      } else { ?>
        <div class="row">
          <div class="col-lg-12">
            <div class="alert alert-danger alert-dismissable" role="alert">
                <a href="loginn.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <strong>Register Failed!</strong> Different Password
            </div>
          </div>
        </div>
        <?php
        }
      }
      ?>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" id="username" name="username" class="form-control" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <input type="password" name="pw1" id="pw1" class="form-control" placeholder="Retype password">
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12 mb-3">
            <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="loginn.php" class="text-center">Back to Login</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>