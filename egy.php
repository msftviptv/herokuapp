<?php
$url ='https://almlf.net//embed-'.$_GET['s'].".html";
$content = file_get_contents($url);
$first_step = explode( 'file:"' , $content );
$second_step = explode('",label:"720p' , $first_step[1] );

$user= $second_step[0];

$link = $user;

header('Location: '.$link);
?>