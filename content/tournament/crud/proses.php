<?php
require_once "../../_include/header_crud.php";

if(isset($_POST['add'])) {
    $id_tournament = uniqid();
    $name = trim(mysqli_real_escape_string($con, $_POST['name']));
    $type = trim(mysqli_real_escape_string($con, $_POST['type']));
    $t_regis = trim(mysqli_real_escape_string($con, $_POST['t_regis']));
    $status = trim(mysqli_real_escape_string($con, $_POST['status']));
    $loc = trim(mysqli_real_escape_string($con, $_POST['loc']));
    $city = trim(mysqli_real_escape_string($con, $_POST['city']));
    $address = trim(mysqli_real_escape_string($con, $_POST['address']));
    $coordinate = trim(mysqli_real_escape_string($con, $_POST['coordinate']));
    $price = trim(mysqli_real_escape_string($con, $_POST['price']));
    $description = trim(mysqli_real_escape_string($con, $_POST['description']));
    $path = "../../../database/img/";
    $image = upload($path);
    if(!$image){
        return false;
    }
    $startdate = trim(mysqli_real_escape_string($con, $_POST['startdate']));
    $enddate = trim(mysqli_real_escape_string($con, $_POST['enddate']));

    mysqli_query($con,"INSERT INTO tournament (id_tournament, name, type, status, location, city, address, coordinates, price, description, image) VALUES ('$id_tournament', '$name', '$type', '$status', '$loc', '$city', '$address', '$coordinate', '$price','$description', '$image')") or die (mysqli_error($con));
    echo "<script>alert('Tournament added!');window.location='../index.php';</script>";
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
    $image = upload($path);
    if(!$image){
        return false;
    }
    $startdate = trim(mysqli_real_escape_string($con, $_POST['startdate']));
    $enddate = trim(mysqli_real_escape_string($con, $_POST['enddate']));
    
    var_dump($loc); die;

    mysqli_query($con,"UPDATE tournament SET name = '$name', type = '$type', status = '$status', mode = '$t_mode', location = '$loc', city = '$city', address = '$address', coordinates = '$coordinate', price = '$price', date = '$date', description = '$description', image = '$image', startTime = '$startdate', endTime = '$enddate')") or die (mysqli_error($con));
    echo "<script>alert('Tournament profile updated!');window.location='../index.php';</script>";
}
?>