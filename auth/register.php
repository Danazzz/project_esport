<?php
require_once "../config/conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel ESPORT</title>

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
          $full_name = trim(mysqli_real_escape_string($con, $_POST['full_name']));
          $username = trim(mysqli_real_escape_string($con, $_POST['username']));
          $phone = trim(mysqli_real_escape_string($con, $_POST['phone']));
          $birth_date = trim(mysqli_real_escape_string($con, $_POST['birth_date']));
          $gender = trim(mysqli_real_escape_string($con, $_POST['gender']));
          $email = trim(mysqli_real_escape_string($con, $_POST['email']));
          $password = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));
          $role = trim(mysqli_real_escape_string($con, $_POST['role']));
          $image = upload();
          if(!$image){
              return false;
          }
      
          mysqli_query($con,"INSERT INTO user (id_user, full_name, phone_number, birth_date, gender, status, role, image) VALUES ('$id_user', '$full_name', '$phone', '$birth_date', '$gender', '0','$role', '$image')") or die (mysqli_error($con));
          mysqli_query($con, "INSERT INTO login (id_user, username, email, password) VALUES ('$id_user', '$username', '$email', '$password')") or die (mysqli_error($con));
          // echo "<script>alert('Registration successfully!');window.location='loginn.php';</script>";
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

      <form action="" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Full Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" id="username" name="username" class="form-control" placeholder="username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="tel" id="phone" name="phone" pattern="[0-9]{12}" class="form-control" placeholder="Phone Number">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <input type="date" id="birth_date" name="birth_date" class="form-control" placeholder="Birth of Date">
        </div>
        <div class="mb-3">
          <select type="gender" id="gender" name="gender" class="form-control custom-select">
            <option selected disabled>Select your Gender</option>
            <option value="L">Male</option>
            <option value="P">Female</option>
          </select>
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
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
<<<<<<< HEAD
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Re-type Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
=======
        <div class="mb-3">
          <input type="password" name="pw1" id="pw1" class="form-control" placeholder="Retype password">
        </div>
        <div class="mb-3">
          <select type="role" id="role" name="role" class="form-control custom-select">
            <option selected disabled>Select your role</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
            <option value="organizer">Organizer</option>
          </select>
        </div>
        <div class="mb-3">
          <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
<<<<<<< HEAD
>>>>>>> 12acf531f4af5f048099bd9ebcae2ce757dac0b1
=======
              <label for="agreeTerms">
                I agree to the <a href="#">terms</a>
              </label>
>>>>>>> c430a7635bbaa802f74e51f372f645f3b6f08ed0
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12 mb-3">
            <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="loginn.php" class="text-center">Back</a>
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