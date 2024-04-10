<?php
$url ="https://mycima.wecima.show/watch/".$_GET['a'];
$content = file_get_contents($url);
$first_step = explode( 'btn data-url="' , $content );
$second_step = explode('" class="hoverable' , $first_step[1] );
$user= $second_step[0];;
$contentq = file_get_contents($user);
$oal_step = explode( 'source src="' , $contentq );
$secondo_step = explode('" type=' , $oal_step[1] );
$usero= $secondo_step[0];
header('Location: '.'http://liveb2.blogspot.com/p/live.html?s='.$usero);
?>
