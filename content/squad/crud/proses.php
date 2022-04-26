<?php
require_once "../../../config/conn.php";

if(isset($_POST['add'])) {
    $id_squad = uniqid();
    $id_game = trim(mysqli_real_escape_string($con, $_POST['id_game']));
    $name = trim(mysqli_real_escape_string($con, $_POST['name']));
    $description = trim(mysqli_real_escape_string($con, $_POST['s_description']));
    $leader = trim(mysqli_real_escape_string($con, $_POST['leader']));
    $member1 = trim(mysqli_real_escape_string($con, $_POST['member1']));
    $member2 = trim(mysqli_real_escape_string($con, $_POST['member2']));
    $member3 = trim(mysqli_real_escape_string($con, $_POST['member3']));
    $member4 = trim(mysqli_real_escape_string($con, $_POST['member4']));
    $member5 = trim(mysqli_real_escape_string($con, $_POST['member5']));
    $member6 = trim(mysqli_real_escape_string($con, $_POST['member6']));
    $member7 = trim(mysqli_real_escape_string($con, $_POST['member7']));
    $member8 = trim(mysqli_real_escape_string($con, $_POST['member8']));
    $member9 = trim(mysqli_real_escape_string($con, $_POST['member9']));
    $image = upload($path);
    if(!$image){
        return false;
    }

    mysqli_query($con, "INSERT INTO squad (id_squad, id_game, leader, member1, member2, member3, member4, member5, member6, member7, member8, member9, name, description, image) VALUES ('$id_squad', '$id_game', '$leader', '$member1', '$member2', '$member3', '$member4', '$member5', '$name', '$description', '$image')") or die (mysqli_error($con));
    echo "<script>alert('Squad added!');window.location='../index.html';</script>";
}
else if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $id_game = trim(mysqli_real_escape_string($con, $_POST['id_game']));
    $name = trim(mysqli_real_escape_string($con, $_POST['name']));
    $description = trim(mysqli_real_escape_string($con, $_POST['description']));
    $leader = trim(mysqli_real_escape_string($con, $_POST['leader']));
    $member1 = trim(mysqli_real_escape_string($con, $_POST['member1']));
    $member2 = trim(mysqli_real_escape_string($con, $_POST['member2']));
    $member3 = trim(mysqli_real_escape_string($con, $_POST['member3']));
    $member4 = trim(mysqli_real_escape_string($con, $_POST['member4']));
    $member5 = trim(mysqli_real_escape_string($con, $_POST['member5']));
    $member6 = trim(mysqli_real_escape_string($con, $_POST['member6']));
    $member7 = trim(mysqli_real_escape_string($con, $_POST['member7']));
    $member8 = trim(mysqli_real_escape_string($con, $_POST['member8']));
    $member9 = trim(mysqli_real_escape_string($con, $_POST['member9']));
    $oldimage = trim(mysqli_real_escape_string($con,$_POST['oldimage']));
    if($_FILES['image']['error'] === 4){
        $image = $oldimage;
    } else {
        $image = upload($path);
    }

    mysqli_query($con,"UPDATE squad SET id_game = '$id_game', s_description = '$description', leader = '$leader', member1 = '$member1', member2 = '$member2', member3 = '$member3', member4 = '$member4', member5 = '$member5', member6 = '$member6', member7 = '$member7', member8 = '$member8', member9 = '$member9', name = '$name', description = '$description', image = '$image' WHERE id_squad = '$id'") or die (mysqli_error($con));
    echo "<script>alert('Squad profile edited!');window.location='../index.html';</script>";
}