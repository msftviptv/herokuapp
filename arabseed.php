<?php
//header("Content-type: application/text");
//header("Content-Disposition: attachment; filename=index.m3u8");
$url ="https://m.seeeed.xyz/embed-j6n7bmb7br7f.html";
$content = file_get_contents($url);
$first_step = explode( 'source src="' , $content );
$second_step = explode('" type="video' , $first_step[1] );

$user= $second_step[0];

$link = $user;
//header('Location: '.$link);
echo $link;
?>
