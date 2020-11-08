<?php
$url ='http://grgs2020.000webhostapp.com/hex.php?s=b01taos2i95o';
$content = file_get_contents($url);
$first_step = explode( '<source src="' , $content );
$second_step = explode('" type="' , $first_step[1] );
$user= $second_step[0];

$link = $user;
echo $link
//header('Location: '.$link);
?>