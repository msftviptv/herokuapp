<?php
$url ='https://streamable.com/'.$_GET['s'];
$content = file_get_contents($url);
$first_step = explode( '"og:video:url" content="' , $content );
$second_step = explode('">' , $first_step[1] );

$user= $second_step[0];

$link = $user;

header('Location: '.$link);
?>