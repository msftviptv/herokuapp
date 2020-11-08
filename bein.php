<?php
$url ='http://grgs2020.000webhostapp.com/ar.php';
$content = file_get_contents($url);
$first_step = explode( 'enableVideo("' , $content );
$second_step = explode('");' , $first_step[1] );

$user= $second_step[0];

$link = $user;
echo $link
//header('Location: '.$link);
?>