<?php
$array1=array("admin" => 12062021,
"hysam" => 12102023,
"grgs" => 25042022,);
if (array_key_exists($_GET['user'],$array1))
{
function play($ch){
      //bein_sport
        if ( $ch === 'test' ) return "http://live-gwott.cdnvideo.ru:80/gwott/marvin/playlist.m3u8";
       if ( $ch === 'thegames1ep1' ) return "https://m3u.fwtv.live/akwam.mp4?s=akwam.in/watch/761/239";
}

$tv= play($_GET['ch']);
header('Location: '.$tv);
;
}
else
{
  header("Location: https://dl.dropbox.com/s/v954jaba9o7g25e/88d9f36020fa27b76f712094591dbbfc.mp4");
}
?>
