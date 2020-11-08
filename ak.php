<?php
$url ="https://eg4.akwam.net/watch/28784/13774/really-sad-devil-guy";
$content = file_get_contents($url);
$first_step = explode( ' <source src="' , $content );
$second_step = explode('" type="video/mp4" ' , $first_step[1] );

$user= $second_step[0];

$link = $user;

header('Location: '.$link);
?>