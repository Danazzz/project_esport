<?php
require_once "../../../config/conn.php";

// $id = @$_GET['id_user'];
// $sql = "SELECT * FROM user
// WHERE id_user = '$id'
// ";
// $query = mysqli_query($con, $sql);
// $data = mysqli_fetch_array($query);
// $gambar= $data['gambar'];
// $path = "../_assets/uploads/".$gambar;
// unlink($path);
// var_dump($_GET);die;

mysqli_query($con, "DELETE FROM user WHERE id_user = '$_GET[id]'") or die (mysqli_error($con));
echo "<script>alert('Absensi telah dihapus!');window.location='../index.php';</script>";
?>