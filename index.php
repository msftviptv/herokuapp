<?php
$ch  = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://config.e-droid.net/srv/config.php?v=113&vname=2.0&idapp=832249&idusu=1644469110&cod_g=7aj6lgvm&gp=1&am=0&idl=en&pa_env=1&pa=FR&pn=com.syria004&fus=191121113851&aid=2e930e0fbe976e5b');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Android Vinebre Software');
$html = curl_exec($ch);
echo $html;
?>
