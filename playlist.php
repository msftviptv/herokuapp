<?php
header("Content-type: application/text");
header("Content-Disposition: attachment; filename=index.m3u8");
echo'#EXTM3U
#EXT-X-VERSION:3
#EXTVLCOPT:http-user-agent="useragent"
#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=1500000,NAME=720p,RESOLUTION=1280x720
http://185.180.223.89:25461/live/eeaknxouc@emltmp.com/eeaknxouc@emltmp.com/34.m3u8
'
?>
