<?php
require_once "../../../config/conn.php";

if(isset($_POST['add'])) {
    $id_game = uniqid();
    $name = trim(mysqli_real_escape_string($con, $_POST['game_name']));
    $path = "../../../database/img/games/";
    $image = upload($path);
    if(!$image){
        return false;
    }

    mysqli_query($con, "INSERT INTO game (id_game, game_name, image) VALUES ('$id_game', '$name', '$image')") or die (mysqli_error($con));
    echo "<script>alert('Game added!');window.location='../index.html';</script>";
}
else if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = trim(mysqli_real_escape_string($con, $_POST['game_name']));
    $oldimage = trim(mysqli_real_escape_string($con,$_POST['oldimage']));
    if($_FILES['image']['error'] === 4){
        $image = $oldimage;
    } else {
        $image = upload($path);
    }

    mysqli_query($con,"UPDATE game SET game_name = '$name', image = '$image' WHERE id_game = '$id'") or die (mysqli_error($con));
    echo "<script>alert('Game profile edited!');window.location='../index.html';</script>";
}