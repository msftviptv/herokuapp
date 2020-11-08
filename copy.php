<?php
$ch  = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://config.e-droid.net/srv/config.php?v=26&vname=5.0.0&idapp=634302&idusu=476907991&cod_g=hmkispy1&pw=1&gp=0&am=0&pa_env=1&pa=US&pn=copy.book&fus=010100000000&recup_todo=1&aid=4e3a984ec951910');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Android Vinebre Software');
$html = curl_exec($ch);
echo $html;
?>