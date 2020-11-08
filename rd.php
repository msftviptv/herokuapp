<?php
$ch  = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://config.e-droid.net:80/srv/config.php?v=24&vname=1.0&idapp=1058395&idusu=0&cod_g=&pw=1&gp=0&am=0&pa_env=1&pa=FR&pn=com.raeedtv2020.tvplus&fus=010100000000&recup_todo=1&aid=4e3a984ec951910');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Android Vinebre Software');
$html = curl_exec($ch);
echo $html;
?>