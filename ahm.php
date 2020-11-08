<?php
$url ='http://www.elahmad.com/tv/arabic-tv-online.php?id=alahlytv';
$content = file_get_contents($url);
$first_step = explode( 'var streamUrl = "' , $content );
$second_step = explode('";' , $first_step[1] );

$user= $second_step[0];

$link = $user;
header('Location: '.$link);
?>