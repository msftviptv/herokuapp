<?php
$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'http://www.t100v.com/apk/api.php',);
echo $res->getStatusCode();
// "200"
echo $res->getHeader('content-type')[0];
// 'application/json; charset=utf8'
echo $res->getBody();
// {"type":"User"...'


?>