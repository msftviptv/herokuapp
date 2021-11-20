<?php

$ch  = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://config.e-droid.net/srv/config.php?v=113&vname=2.0&idapp=832249&idusu=0&cod_g=&gp=1&am=0&idl=en&pa_env=1&pa=US&pn=com.syria004&fus=010100000000&aid=40739dc111358653');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Android Vinebre Software');
$html = curl_exec($ch);
echo $html;
?>
