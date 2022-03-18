<?php
header("Content-type: application/text");
//header("Content-Disposition: attachment; filename=index.m3u8");



$url ="https://ku.karwan.tv/live/".$_GET['ch'].".php";

$ch = curl_init();
curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
$html = curl_exec($ch);
curl_close($ch);
$first_step = explode( 'source src="' , $html );
$second_step = explode('" type="application' , $first_step[1] );

$user= $second_step[0];

$link = $user;
//header('Location: '.$link);

echo $link;
?>
