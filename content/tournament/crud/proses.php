<?php
require_once "../../../config/conn.php";

if(isset($_POST['add'])) {
    $id_tournament = uniqid();
    $name = trim(mysqli_real_escape_string($con, $_POST['name']));
    $type = trim(mysqli_real_escape_string($con, $_POST['type']));
    $t_regis = trim(mysqli_real_escape_string($con, $_POST['t_regis']));
    $status = trim(mysqli_real_escape_string($con, $_POST['status']));
    $t_mode = trim(mysqli_real_escape_string($con, $_POST['t_mode']));
    $loc = trim(mysqli_real_escape_string($con, $_POST['loc']));
    $city = trim(mysqli_real_escape_string($con, $_POST['city']));
    $address = trim(mysqli_real_escape_string($con, $_POST['address']));
    $coordinate = trim(mysqli_real_escape_string($con, $_POST['coordinate']));
    $price = trim(mysqli_real_escape_string($con, $_POST['price']));
    $date = trim(mysqli_real_escape_string($con, $_POST['date']));
    $description = trim(mysqli_real_escape_string($con, $_POST['description']));
    $image = upload();
    if(!$image){
        return false;
    }
    $startdate = trim(mysqli_real_escape_string($con, $_POST['startdate']));
    $enddate = trim(mysqli_real_escape_string($con, $_POST['enddate']));

    mysqli_query($con,"INSERT INTO tournament (id_tournament, name, type, status, mode, location, city, address, coordinates, price, date, description, image, startTime, endTime) VALUES ('$id_tournament', '$name', '$type', '$status', '$t_mode', '$loc', '$city', '$address', '$coordinate', '$price', '$date', '$description', '$image', '$startdate', '$enddate')") or die (mysqli_error($con));
    echo "<script>alert('Data telah ditambah');window.location='../index.php';</script>";
}
else if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = trim(mysqli_real_escape_string($con, $_POST['name']));
    $type = trim(mysqli_real_escape_string($con, $_POST['type']));
    $t_regis = trim(mysqli_real_escape_string($con, $_POST['t_regis']));
    $status = trim(mysqli_real_escape_string($con, $_POST['status']));
    $t_mode = trim(mysqli_real_escape_string($con, $_POST['t_mode']));
    $loc = trim(mysqli_real_escape_string($con, $_POST['loc']));
    $city = trim(mysqli_real_escape_string($con, $_POST['city']));
    $address = trim(mysqli_real_escape_string($con, $_POST['address']));
    $coordinate = trim(mysqli_real_escape_string($con, $_POST['coordinate']));
    $price = trim(mysqli_real_escape_string($con, $_POST['price']));
    $date = trim(mysqli_real_escape_string($con, $_POST['date']));
    $description = trim(mysqli_real_escape_string($con, $_POST['description']));
    $image = upload();
    if(!$image){
        return false;
    }
    $startdate = trim(mysqli_real_escape_string($con, $_POST['startdate']));
    $enddate = trim(mysqli_real_escape_string($con, $_POST['enddate']));
    
    var_dump($loc); die;

    mysqli_query($con,"UPDATE tournament SET name = '$name', type = '$type', status = '$status', mode = '$t_mode', location = '$loc', city = '$city', address = '$address', coordinates = '$coordinate', price = '$price', date = '$date', description = '$description', image = '$image', startTime = '$startdate', endTime = '$enddate')") or die (mysqli_error($con));
    echo "<script>alert('Data telah diperbarui');window.location='../index.php';</script>";
}
?>