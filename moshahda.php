<?php
$url ='https://vidia.tv/embed-ysxabktlqu48.html';
$content = file_get_contents($url);
$first_step = explode( '|srt|' , $content );
$second_step = explode('|play|' , $first_step[1] );
$user= $second_step[0];

$link = $user;
$x = "https://root.filescdn.co/dash/,".$link.",.urlset/manifest.mpd";
header('Location: '.$x);
?>