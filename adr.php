<?php
$ch  = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://config.e-droid.net/srv/config.php?v=197&vname=1&idapp=2792810&idusu=1641138491&cod_g=2m2pfrp8&pw=1&gp=1&am=0&idl=en&pa_env=1&pa=US&pn=app.arnewapp525.com&fus=030422120219&aid=40739dc111358653');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Android Vinebre Software');
$html = curl_exec($ch);
echo $html;
?>
