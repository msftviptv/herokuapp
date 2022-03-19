<?php
//header("Content-type: application/text");
//header("Content-Disposition: attachment; filename=index.m3u8");
function get_data($url) {
    $ch = curl_init();
    $timeout = 2;
    $referer = ($url);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 10; SNE-LX1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36");
    curl_setopt($ch, CURLOPT_REFERER, $referer);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

$link = get_data("https://ku.karwan.tv/live/".$_GET['ch'].".php");
$first_step = explode( 'source src="' , $content );
$second_step = explode('" type="application' , $first_step[1] );

$user= $second_step[0];

$link = $user;
//header('Location: '.$link);
echo $link;
?>
