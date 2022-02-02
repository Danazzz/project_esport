<?php
require_once "config/conn.php";
if(isset($_SESSION['user'])){
    echo "<script>window.location='".base_url()."';</script>";
}
else{
    echo "<script>window.location='".base_url('auth/loginn.php')."';</script>";
}
?>