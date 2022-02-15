<?php
require_once "../config/conn.php";

if(isset($_POST['add'])) {
    $fullName = trim(mysqli_real_escape_string($con, $_POST['fullName']));
    $phone = trim(mysqli_real_escape_string($con, $_POST['phone']));
    $birth = trim(mysqli_real_escape_string($con, $_POST['birth']));
    $gender = trim(mysqli_real_escape_string($con, $_POST['gender']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $password = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));

    mysqli_query($con,"INSERT INTO user(full_name, phone_number, birth_date, gender, email, password ) VALUES ( '$fullName', '$phone', '$birth', '$gender', '$email' '$password')") or die (mysqli_error($con));
    echo "<script>alert('Data berhasil ditambah');window.location='loginn.php';</script>";
}

function register($data) {
    $username = $data['username'];
    $email = $data['email']);
    $password = mysqli_real_escape_string($con, $data['password']);
    $password2 = mysqli_real_escape_string($con, $data['password2']);

    if($password !== $password2) {
        echo "<script>
                alert('password tidak sesuai!');
              </script>";
        return false;
    }
}
?>