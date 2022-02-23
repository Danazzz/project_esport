<?php
// session start
session_start();

// setting default timezone 
date_default_timezone_set('asia/hong_kong');

// database connection
$con = mysqli_connect('localhost','root','','project_esport');
if(mysqli_connect_errno()){
    echo mysqli_connect_error();
}

// function base_url
function base_url($url = null){
    $base_url = "http://localhost/project_esport";
    if($url != null){
        return $base_url."/".$url;
    }
    else{
        return $base_url;
    }
}

// function date d/m/Y
function indo_date($date){
	$day = substr($date, 8, 2);
	$month = substr($date, 5, 2);
	$year = substr($date, 0, 4);

	return $day."/".$month."/".$year;
}

// function datetime
function indo_time($date){
    $time = date('H:i:s A', $date);

    return $time;
}

// function get time status
function get_time_ago( $time )
{
    $time_difference = time() - $time;

    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;

        if( $d >= 1 )
        {
            $t = round( $d );
            return 'about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
        }
    }
}

// function upload file to local database
function upload(){
    $nameFile = $_FILES['image']['name'];
    $sizeFIle = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];
    $formatImg = ['jpg','jpeg','png','svg'];
    $format = explode('.', $nameFile);
    $format = strtolower(end($format));
    if($error === 4){
        echo "<script>alert ('image not found!')</script>";
        return false;
    }
    if(!in_array($format,$formatImg)){
        echo "<script>alert ('what you uploaded is not an image!')</script>";
        return false;
    }
    if($sizeFIle > 10000000){
        echo "<script>alert ('The image size is too large!')</script>";
        return false;
    }
    $newfilename = uniqid();
    $newfilename .= '.';
    $newfilename .= $format; 
    move_uploaded_file($tmpName,'../../../database/img/' . $newfilename);
    return $newfilename;
}
?>