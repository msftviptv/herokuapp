<?php
$url ="https://www.alkass.net/alkass/live.aspx?ch=".$_GET['ch'];
$content = file_get_contents($url);
$first_step = explode( 'source: " ' , $content );
$second_step = explode('",' , $first_step[1] );

$user= $second_step[0];

$link = $user;
header('Location: '.$link);
?>
