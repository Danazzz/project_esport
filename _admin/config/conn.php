<?php

// session start
session_start();

// koneksi ke database
$con = mysqli_connect('localhost','root','','project_esport');
if(mysqli_connect_errno()){
    echo mysqli_connect_error();
}

// fungsi base_url
function base_url($url = null){
    $base_url = "http://localhost/project_esport/admin";
    if($url != null){
        return $base_url."/".$url;
    }
    else{
        return $base_url;
    }
}

?>