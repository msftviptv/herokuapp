<?php
$url ="https://m.arabseed.me/embed-87re05ig913b.html";
$content = file_get_contents($url);
$first_step = explode( 'source src="' , $content );
$second_step = explode('" type="video' , $first_step[1] );

$user= $second_step[0];

$link = $user;
echo $link;
//header('Location: '.$link);
?>
