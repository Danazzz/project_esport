<?php
require_once "../../../config/conn.php";

$id = @$_GET['id_user'];
$sql = "SELECT * FROM tournament
WHERE id_tournament = '$id'
";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_array($query);
$image = $data['image'];
$path = "../../../database/img/".$image;
unlink($path);

mysqli_query($con, "DELETE FROM tournament WHERE id_tournament = '$_GET[id]'") or die (mysqli_error($con));
echo "<script>alert('Tournament sudah dihapus!');window.location='../index.php';</script>";
?>