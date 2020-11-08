<?php

$url ='https://youtube-downloader3.herokuapp.com/video_info.php?url=https://www.youtube.com/watch?v='.$_GET['s'];
$content = file_get_contents($url);
$first_step = explode( '"url": "' , $content );
$second_step = explode('",
            "itag": 137,
            "format": "mp4, video, 1080p"' , $first_step[1] );

$user= $second_step[0];

$link = $user;
header('Location: '.$link);
?>