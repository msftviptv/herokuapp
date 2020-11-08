
<?php
$url = 'http://yacineapptv.com/api/getChannelsByCategory/7';
$content = file_get_contents($url);
$first_step = explode( 'http:\/\/62.210.181.164:7777\/' , $content );
$second_step = explode("\/" , $first_step[1] );

$user= $second_step[0];
$link = "http://62.210.181.164:7777/".$user."/".$user."/".$_GET['s'];

header('Location: '.$link);
?>