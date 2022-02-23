<?php
require_once "../../../config/conn.php";

// if(isset($_POST['add'])) {
//     $id_user = uniqid();
//     $full_name = trim(mysqli_real_escape_string($con, $_POST['full_name']));
//     $phone = trim(mysqli_real_escape_string($con, $_POST['phone']));
//     $birth_date = trim(mysqli_real_escape_string($con, $_POST['birth_date']));
//     $gender = trim(mysqli_real_escape_string($con, $_POST['gender']));
//     $role = trim(mysqli_real_escape_string($con, $_POST['role']));
//     $username = trim(mysqli_real_escape_string($con, $_POST['username']));
//     $description = trim(mysqli_real_escape_string($con, $_POST['description']));
//     $email = trim(mysqli_real_escape_string($con, $_POST['email']));
//     $password = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));
//     $image = upload();
//     if(!$image){
//         return false;
//     }

//     mysqli_query($con,"INSERT INTO user (id_user, full_name, phone_number, birth_date, gender, status, role, image, description) VALUES ('$id_user', '$full_name', '$phone', '$birth_date', '$gender', '0','$role', '$image', '$description')") or die (mysqli_error($con));
//     mysqli_query($con, "INSERT INTO login (id_user, username, email, password) VALUES ('$id_user', '$username', '$email', '$password')") or die (mysqli_error($con));
//     echo "<script>alert('User detail added successfully');window.location='../index.html';</script>";
// }
if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $full_name = trim(mysqli_real_escape_string($con, $_POST['full_name']));
    $phone = trim(mysqli_real_escape_string($con, $_POST['phone']));
    $birth_date = trim(mysqli_real_escape_string($con, $_POST['birth_date']));
    $gender = trim(mysqli_real_escape_string($con, $_POST['gender']));
    $role = trim(mysqli_real_escape_string($con, $_POST['role']));
    $username = trim(mysqli_real_escape_string($con, $_POST['username']));
    $description = trim(mysqli_real_escape_string($con, $_POST['description']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $password = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));
    if($_FILES['image']['error'] === 4){
        $image = $oldimage;
    } else {
        $image = upload();
    }

    mysqli_query($con,"UPDATE user
    INNER JOIN login ON user.id_user = login.id_user
    SET full_name = '$full_name', phone_number = '$phone', birth_date = '$birth_date', gender = '$gender', role = '$role', description = '$description', image = '$image', username = '$username', email = '$email', password = '$password'
    WHERE user.id_user = '$id'") 
    or die (mysqli_error($con));
    echo "<script>alert('User detail updated successfully');window.location='../index.html';</script>";
}