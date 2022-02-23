<?php
require_once "../../../config/conn.php";

if(isset($_POST['add'])) {
    $id_user = uniqid();
    $full_name = trim(mysqli_real_escape_string($con, $_POST['full_name']));
    $phone = trim(mysqli_real_escape_string($con, $_POST['phone']));
    $birth_date = trim(mysqli_real_escape_string($con, $_POST['birth_date']));
    $gender = trim(mysqli_real_escape_string($con, $_POST['gender']));
    $role = trim(mysqli_real_escape_string($con, $_POST['role']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $password = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));

    mysqli_query($con,"INSERT INTO user (id_user, full_name, phone_number, birth_date, gender, status) VALUES ('$id_user', '$full_name', '$phone', '$birth_date', '$gender', '$status')") or die (mysqli_error($con));
    mysqli_query($con, "INSERT INTO login (id_user, email, password) VALUES ('$id_user', '$email', '$password')") or die (mysqli_error($con));
    echo "<script>alert('Data telah ditambah');window.location='../index.php';</script>";
}
else if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $full_name = trim(mysqli_real_escape_string($con, $_POST['full_name']));
    $phone = trim(mysqli_real_escape_string($con, $_POST['phone']));
    $birth_date = trim(mysqli_real_escape_string($con, $_POST['birth_date']));
    $gender = trim(mysqli_real_escape_string($con, $_POST['gender']));
    $role = trim(mysqli_real_escape_string($con, $_POST['role']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $password = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));

    mysqli_query($con,"UPDATE user SET full_name = '$full_name', phone_number = '$phone', birth_date = '$birth_date', gender = '$gender', role = '$role')") or die (mysqli_error($con));
    mysqli_query($con, "UPDATE login SET email = '$email', password = '$password')") or die (mysqli_error($con));
    echo "<script>alert('Data telah diubah');window.location='../index.php';</script>";
}