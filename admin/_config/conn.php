<?php

//global session start
session_start();

$hostname   = "localhost";  //Host name
$username   = "root";       //Table username
$password   = "";           //Table password
$database   = "project_esport"; //Database name

$con = new mysqli($hostname, $username, $password, $database);

//Check connection
if ($con->connect_errno){
    die("Connection failed: " . $con->connect_error);
}

// fungsi base_url
function base_url($url = null){
    $base_url = "http://localhost/project_esport_admin";
    if($url != null){
        return $base_url."/".$url;
    }
    else{
        return $base_url;
    }
}