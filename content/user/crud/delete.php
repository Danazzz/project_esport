<?php
require_once "../../../config/conn.php";

$id = @$_GET['id_user'];
$sql = "SELECT * FROM user
WHERE id_user = '$id'
";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_array($query);
$image = $data['image'];
$path = "../../../database/img/".$image;
unlink($path);

mysqli_query($con, "DELETE FROM user WHERE id_user = '$_GET[id]'") or die (mysqli_error($con));
echo "<script>alert('User Deleted successfully!');window.location='../index.html';</script>";
?>