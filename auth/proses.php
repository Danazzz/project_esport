<?php
require_once "../config/conn.php";

if(isset($_POST['register'])) {
    $id_user = uniqid();
    $fullName = trim(mysqli_real_escape_string($con, $_POST['fullName']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $password = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));

    mysqli_query($con,"INSERT INTO user(full_name, phone, birth_date, gender, email, password ) VALUES ( '$fullName', '$phone', '$birth', '$gender', '$email' '$password')") or die (mysqli_error($con));
    echo "<script>alert('Data berhasil ditambah');window.location='loginn.php';</script>";
}
?>