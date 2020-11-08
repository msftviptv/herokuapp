<?php
$url ='https://grgs2020.000webhostapp.com/rd.php';
$content = file_get_contents($url);
$first_step = explode( 's11886099_url=' , $content );
$second_step = explode("139][" , $first_step[1] );

$user= $second_step[0];

$link = $user.$_GET['s'];
header('Location: '.$link);
?>