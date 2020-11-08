<?php
echo"#EXTM3U". chr(10);
$file = file_get_contents("http://grgs2020.000webhostapp.com/rich.php");
$json = json_decode($file);



foreach ($json as &$value ) {
    $sream_name = $value->name;
    $sream_url = $value->link;
echo "#EXTINF:0,AR: ".$sream_name. chr(10);
echo $sream_url. chr(10);
    }
?>