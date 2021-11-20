<?php
$opts = array(
'http'=>array(
'method'=>"GET",
'header'=>"Referer: https://daddylive.me/embed/stream-91.php" .
  "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:51.0) Gecko/20100101 Firefox/51.0"
));
$url = file_get_contents('https://jazzy.to/daddylive.php?live='.$_GET['s'].'&vw=100vw&vh=100vh', false, stream_context_create($opts));
$first_step = explode( 'source: "' , $url );
$second_step = explode('",' , $first_step[1] );

$user= $second_step[0];
$optc = array(
'http'=>array(
'method'=>"GET",
'header'=>"Referer: https://jazzy.to/" .
  "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:51.0) Gecko/20100101 Firefox/51.0"
));
$uri = file_get_contents($user, false, stream_context_create($optc));
echo $uri;
?>
