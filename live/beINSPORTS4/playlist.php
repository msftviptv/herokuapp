
<?php
header("Content-type: application/text");
header("Content-Disposition: attachment; filename=index.m3u8");
echo'#EXTM3U
#EXT-X-VERSION:3
#EXT-X-STREAM-INF:BANDWIDTH=125000,NAME="180p",RESOLUTION=320x180
http://maveniptv.tv:2095/live/s9hbo/shikos9hbox/61327.m3u8
#EXT-X-STREAM-INF:BANDWIDTH=200000,NAME="234p",RESOLUTION=416x234
http://maveniptv.tv:2095/live/s9hbo/shikos9hbox/56555.m3u8
#EXT-X-STREAM-INF:BANDWIDTH=450000,NAME="360p",RESOLUTION=640x360
http://maveniptv.tv:2095/live/s9hbo/shikos9hbox/56555.m3u8
#EXT-X-STREAM-INF:BANDWIDTH=800000,NAME="480p",RESOLUTION=854x480
http://maveniptv.tv:2095/live/s9hbo/shikos9hbox/56587.m3u8
#EXT-X-STREAM-INF:BANDWIDTH=1800000,NAME="720p",RESOLUTION=1280x720
http://maveniptv.tv:2095/live/s9hbo/shikos9hbox/56545.m3u8
#EXT-X-STREAM-INF:BANDWIDTH=4000000,NAME="1080p",RESOLUTION=1920x1080
http://maveniptv.tv:2095/live/s9hbo/shikos9hbox/10428.m3u8
'
?>