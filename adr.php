<?php
$ch  = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://config.e-droid.net/srv/config.php?v=90&vname=1&idapp=904969&idusu=1641138491&cod_g=2m2pfrp8&pw=1&gp=1&am=0&idl=en&pa_env=1&pa=US&pn=ad.rar.tv&fus=030422120219&aid=40739dc111358653');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Android Vinebre Software');
$html = curl_exec($ch);
echo $html;
?>
