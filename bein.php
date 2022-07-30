<?php
$url ='http://assia23.com/live/arena-sport/';
$content = file_get_contents($url);
$first_step = explode( "source: '" , $content );
$second_step = explode("'," , $first_step[1] );

$user= $second_step[0];

$link = $user;
//echo $link
header('Location: '.$link);
?>
