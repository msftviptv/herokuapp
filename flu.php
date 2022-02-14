<?php
$flussonic = 'http://68.183.104.185'; // This script gets Flussonic address from a query. String 'http://flussonic-ip'
$key = '23232111223'; // The key from flussonic.conf file. KEEP IT IN SECRET.
$lifetime = 3600 * 3; // The link will become invalid in 3 hours.

$stream = $_GET['stream']; // This script gets the stream name from a query. string (script.php?stream=bbc)

$ipaddr = $_SERVER['REMOTE_ADDR']; // (v20.07) Set $ipaddr = 'no_check_ip' if you want to exclude IP address of client devices from checking.
$desync = 300; // Allowed time desync between Flussonic and hosting servers in seconds.
$starttime = time() - $desync;
$endtime = $starttime + $lifetime;
$salt = bin2hex(openssl_random_pseudo_bytes(16));

$hashsrt = $stream.$ipaddr.$starttime.$endtime.$key.$salt;
$hash = sha1($hashsrt);

$token = $hash.'-'.$salt.'-'.$endtime.'-'.$starttime;
$link = $flussonic.'/'.$stream.'/embed.html?token='.$token.'&remote='.$ipaddr;
$embed = '<iframe allowfullscreen style="width:640px; height:480px;" src="'.$link.'"></iframe>';

echo $embed;
?>
