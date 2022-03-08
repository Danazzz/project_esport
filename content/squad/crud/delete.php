<?php
require_once "../../../config/conn.php";

$id = @$_GET['id_squad'];
$sql = "SELECT * FROM squad
WHERE id_squad = '$id'
";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_array($query);
$image= $data['image'];
$path = "../../../database/img/".$image;
unlink($path);

mysqli_query($con, "DELETE FROM squad WHERE id_squad = '$_GET[id]'") or die (mysqli_error($con));
echo "<script>alert('Squad deleted!');window.location='../index.html';</script>";
?>