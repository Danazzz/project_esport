<?php
require_once "../../../config/conn.php";

$id = @$_GET['id_game'];
$sql = "SELECT * FROM game
WHERE id_game = '$id'
";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_array($query);
$image= $data['image'];
$path = "../../../database/img/".$image;
unlink($path);

mysqli_query($con, "DELETE FROM game WHERE id_game = '$_GET[id]'") or die (mysqli_error($con));
echo "<script>alert('Game deleted!');window.location='../index.html';</script>";
?>