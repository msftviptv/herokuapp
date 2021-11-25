<?php
/*$array1=array("msftv" => 100,);
if (array_key_exists($_GET['user'],$array1))
{
*/function play($ch){
      //bein_sport
        if ( $ch === 'bein4k' ) return "https://grgs2020.000webhostapp.com/ks.m3u8?s=2848";
        if ( $ch === 'beinsport1' ) return "http://api.magiaiptv.com/live/800261/138645/m1_b3LqtPcVf80FH9zmjuIKYaSdNW4_720p";
        if ( $ch === 'beinsport2' ) return "http://viralshoc.com:80/script1/ayoub.m3u8?hash=http://62.210.139.222:8081/yacinetv/BeinLow2/playlist.m3u8";
        if ( $ch === 'beinsport3' ) return "http://viralshoc.com:80/script1/ayoub.m3u8?hash=http://62.210.139.222:8081/yacinetv/BeinLow3/playlist.m3u8";
        if ( $ch === 'beinsport4' ) return "http://viralshoc.com:80/script1/ayoub.m3u8?hash=http://62.210.139.222:8081/yacinetv/BeinLow4/playlist.m3u8";
        if ( $ch === 'beinsport5' ) return "http://viralshoc.com:80/script1/ayoub.m3u8?hash=http://62.210.139.222:8081/yacinetv/BeinLow5/playlist.m3u8";
        if ( $ch === 'beinsport6' ) return "http://viralshoc.com:80/script1/ayoub.m3u8?hash=http://62.210.139.222:8081/yacinetv/BeinLow6/playlist.m3u8";
        if ( $ch === 'beinsport7' ) return "http://viralshoc.com:80/script1/ayoub.m3u8?hash=http://62.210.139.222:8081/yacinetv/BeinLow7/playlist.m3u8";
        if ( $ch === 'beinsport8' ) return "http://viralshoc.com:80/script1/ayoub.m3u8?hash=http://62.210.139.222:8081/yacinetv/BeinLow8/playlist.m3u8";
        if ( $ch === 'beinsport9' ) return "http://viralshoc.com:80/script1/ayoub.m3u8?hash=http://62.210.139.222:8081/yacinetv/BeinLow9/playlist.m3u8";
        if ( $ch === 'beinsport10' ) return "http://viralshoc.com:80/script1/ayoub.m3u8?hash=http://62.210.139.222:8081/yacinetv/BeinLow10/playlist.m3u8";
        if ( $ch === 'beinsport1-2' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=7";
        if ( $ch === 'beinsport2-2' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=8";
        if ( $ch === 'beinsport3-2' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=9";
        if ( $ch === 'beinsport4-2' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=10";
        if ( $ch === 'beinsport5-2' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=11";
        if ( $ch === 'beinsport6-2' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=12";
        if ( $ch === 'beinsport7-2' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=20";
        if ( $ch === 'beinsport8-2' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=21";
        if ( $ch === 'beinsport9-2' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=22";
        if ( $ch === 'beinsport10-2' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=13";
        if ( $ch === 'beinsport1-3' )return "https://tv2020.gq:443/play.php?id=3485";
        if ( $ch === 'beinsport2-3' ) return "https://tv2020.gq:443/play.php?id=3486";
        if ( $ch === 'beinsport3-3' ) return "https://tv2020.gq:443/play.php?id=3487";
        if ( $ch === 'beinsport4-3' ) return "https://tv2020.gq:443/play.php?id=3488";
        if ( $ch === 'beinsport5-3' ) return "https://tv2020.gq:443/play.php?id=3489";
        if ( $ch === 'beinsport6-3' ) return "https://tv2020.gq:443/play.php?id=3490";
        if ( $ch === 'beinsport7-3' ) return "https://tv2020.gq:443/play.php?id=3491";
        if ( $ch === 'beinsport8-3' ) return "https://tv2020.gq:443/play.php?id=3492";
        if ( $ch === 'beinsport9-3' ) return "https://tv2020.gq:443/play.php?id=3493";
        if ( $ch === 'beinsport10-3' ) return "https://tv2020.gq:443/play.php?id=3494";
        if ( $ch === 'beinsport1-4' )return "https://vodcache.worldwidetv.club/root-c2/liveorigin/hd-bein1_480/playlist.m3u8";
        if ( $ch === 'beinsport2-4' ) return "https://vodcache.worldwidetv.club/root-c2/liveorigin/hd-bein2_480/playlist.m3u8";
        if ( $ch === 'beinsport3-4' ) return "https://vodcache.worldwidetv.club/root-c2/liveorigin/hd-bein3_480/playlist.m3u8";
        if ( $ch === 'beinsport4-4' ) return "https://vodcache.worldwidetv.club/root-c2/liveorigin/hd-bein4_480/playlist.m3u8";
        if ( $ch === 'beinsport5-4' ) return "https://vodcache.worldwidetv.club/root-c2/liveorigin/hd-bein5_480/playlist.m3u8";
        if ( $ch === 'beinsport6-4' ) return "https://vodcache.worldwidetv.club/root-c2/liveorigin/hd-bein6_480/playlist.m3u8";
        if ( $ch === 'beinsport7-4' ) return "https://vodcache.worldwidetv.club/root-c2/liveorigin/hd-bein7_480/playlist.m3u8";
        if ( $ch === 'beinsport8-4' ) return "https://vodcache.worldwidetv.club/root-c2/liveorigin/hd-bein8_480/playlist.m3u8";
        if ( $ch === 'beinsport9-4' ) return "https://vodcache.worldwidetv.club/root-c2/liveorigin/hd-bein9_480/playlist.m3u8";
        if ( $ch === 'beinsport10-4' ) return "https://vodcache.worldwidetv.club/root-c2/liveorigin/hd-bein10_480/playlist.m3u8";
        if ( $ch === 'beinsport1-5' )return "http://stream-e30453a4b.nmbs.top/m3u/Sports/e3bd6ad94b.m3u8";
        if ( $ch === 'beinsport2-5' ) return "https://live-gwott.cdnvideo.ru/gwott/marvin/playlist.m3u8";
        if ( $ch === 'beinsport3-5' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/915461b83a.m3u8";
        if ( $ch === 'beinsport4-5' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/aadfc3ee8e.m3u8";
        if ( $ch === 'beinsport5-5' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/0613369e0e.m3u8";
        if ( $ch === 'beinsport6-5' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/e9d1f956b0.m3u8";
        if ( $ch === 'beinsport7-5' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/f06271f891.m3u8";
        if ( $ch === 'beinsport8-5' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/c8258ea7d8.m3u8";
        if ( $ch === 'beinsport9-5' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/16a88ce00f.m3u8";
        if ( $ch === 'beinsport10-5' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/17087669cf.m3u8";
        if ( $ch === 'beinsport1-6' )return "https://ydv2wp0o6ma.a.trbcdn.net/hls/m3u8/CDN-HLS-Bein1-F.m3u8";
        if ( $ch === 'beinsport2-6' ) return "https://stream.suboroiptv.tv/Bein2/index.m3u8";
        if ( $ch === 'beinsport3-6' ) return "http://130.193.165.50:4000/play/a006/index.m3u8";
        if ( $ch === 'beinsport4-6' ) return "https://stream.suboroiptv.tv/Bein4/index.m3u8";
        if ( $ch === 'beinsport5-6' ) return "https://stream.suboroiptv.tv/Bein5/index.m3u8";
        if ( $ch === 'beinsport6-6' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/7090081cef.m3u8";
        if ( $ch === 'beinsport7-6' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/bb5c759926.m3u8";
        if ( $ch === 'beinsport8-6' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/c8258ea7d8.m3u8";
        if ( $ch === 'beinsport9-6' ) return "https://stream.suboroiptv.tv/Bein9/index.m3u8";
        if ( $ch === 'beinsport10-6' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/9045c40d50.m3u8";
            if ( $ch === 'beinsport1-7' )return "http://teledunet.com:25461/live/tdn/74467946754/20061.m3u8";
        if ( $ch === 'beinsport2-7' ) return "http://teledunet.com:25461/live/tdn/74467946754/20062.m3u8";
        if ( $ch === 'beinsport3-7' ) return "http://teledunet.com:25461/live/tdn/74467946754/20063.m3u8";
        if ( $ch === 'beinsport4-7' ) return "http://teledunet.com:25461/live/tdn/74467946754/20064.m3u8";
        if ( $ch === 'beinsport5-7' ) return "http://teledunet.com:25461/live/tdn/74467946754/20065.m3u8";
        if ( $ch === 'beinsport6-7' ) return "http://teledunet.com:25461/live/tdn/74467946754/20066.m3u8";
        if ( $ch === 'beinsport7-7' ) return "http://teledunet.com:25461/live/tdn/74467946754/20067.m3u8";
        if ( $ch === 'beinsport8-7' ) return "http://teledunet.com:25461/live/tdn/74467946754/20068.m3u8";
        if ( $ch === 'beinsport9-7' ) return "http://teledunet.com:25461/live/tdn/74467946754/20069.m3u8";
        if ( $ch === 'beinsport10-7' ) return "http://teledunet.com:25461/live/tdn/74467946754/20070.m3u8";
       //arabic_sport
        if ( $ch === 'timesport' ) return "http://52.138.1.40:25461/NYY1zPrM7O/xQWe3CwgnH/75";
        if ( $ch === 'onsport' ) return "http://95.170.215.107/hls/m3u8/ON-Sport.m3u8";
        if ( $ch === 'onsport2' ) return "http://52.138.1.40:25461/NYY1zPrM7O/xQWe3CwgnH/77";
        if ( $ch === 'nilesport' ) return "http://livecdnh2.tvanywhere.ae/hls/nile_sp/04.m3u8";
        if ( $ch === 'zamalek' ) return "http://ahmed-yasser-servers.ga/ks.m3u8?s=2068";
        if ( $ch === 'ahly' ) return "http://mu02.v2iptv.com:8880/live/HJNM142/AnQJLxmC2L/2092.ts";
        if ( $ch === 'libyasport' ) return "http://skdn.redi-vo.com/iptv/ch1077?code=103131497823984&key=29086";
        if ( $ch === 'adsport1' ) return "http://www.elahmad.com/tv/m3u8/adtv.m3u8?id=abudhabi_sports1";
        if ( $ch === 'adsport2' ) return "http://www.elahmad.com/tv/m3u8/adtv.m3u8?id=abudhabi_sports2";
        if ( $ch === 'adsport3' ) return "http://www.elahmad.com/tv/m3u8/adtv.m3u8?id=abudhabi_sports3";
        if ( $ch === 'adsport4' ) return "http://www.elahmad.com/tv/m3u8/adtv.m3u8?id=abudhabi_sports4";
        if ( $ch === 'dubais1' ) return "http://dmitnthvll.cdn.mangomolo.com/dubaisports/smil:dubaisports.smil/index.m3u8";
        if ( $ch === 'dubais2' ) return "http://95.170.215.107/hls/Dub-Sport2-Bakup-M.m3u8";
        if ( $ch === 'dubais3' ) return "http://dmitwlfr.cdn.mangomolo.com/dubaisportshd5/smil:dubaisportshd5.smil/index.m3u8";
        if ( $ch === 'ksasport' ) return "https://edge-1192-ch-gv.filmon.com/live/1781.high.stream/playlist.m3u8";
        if ( $ch === 'ksasport2' ) return "https://edge-1192-ch-gv.filmon.com/live/1778.high.stream/playlist.m3u8";
         //sports
        if ( $ch === 'wwe' ) return "http://live.highstream.club/live/WWE/playlist.m3u8";
        if ( $ch === 'VARZESH' ) return "http://51.158.66.44/hls/stream.m3u8";
        if ( $ch === 'VARZESH2' ) return "http://51.158.176.190/hls/stream.m3u8";
        if ( $ch === 'VARZESH3' ) return "http://51.15.236.137/hls/stream.m3u8";
        if ( $ch === 'VARZESH4' ) return "http://163.172.138.186/hls/stream.m3u8";
        if ( $ch === 'ajyal' ) return "http://htvajyal.mada.ps:8888/ajyal/index.m3u8";
        if ( $ch === 'amwaj' ) return "http://vstreamgz.hadara.ps:8081/Amwaj/Amwaj/chunks.m3u8";
        if ( $ch === 'fajertv1' ) return "http://vstream3.hadara.ps:8081/AlfajertvUN_web/web/playlist.m3u8";
        if ( $ch === 'fajertv2' ) return "http://two.alfajertv.com:8081/AlfajertvHDTwo_web/web/chunks.m3u8";
        if ( $ch === 'fajertv3' ) return "http://vstream2.hadara.ps:8081/AlfajertvHD2_web/web1/chunks.m3u8";
        if ( $ch === 'fajertv4' ) return "http://82.102.232.165:8081/AlfajertvHD1_web/web1/chunks.m3u8";
            if ( $ch === 'felesport' ) return "https://streamer1.furrera.ps/felesportWeb/index.m3u8?token=c79c637d-ba7a-4a86-b30b-771197b68926";
          if ( $ch === 'match' ) return "https://185-198-56-56.livesports24.online/ooomatch.m3u8";
            if ( $ch === 'match1' ) return "https://185-198-56-56.livesports24.online/ntvmatchfoot1.m3u8";
            if ( $ch === 'match2' ) return "https://185-198-56-56.livesports24.online/mfootball2rus.m3u8";
            if ( $ch === 'match3' ) return "https://185-198-56-56.livesports24.online/rumatchf3.m3u8";
       if ( $ch === 'football1' ) return "https://185-198-56-56.livesports24.online/uafootballua1.m3u8";
           if ( $ch === 'football2' ) return "https://185-198-56-56.livesports24.online/fooootball2.m3u8";
               if ( $ch === 'football3' ) return "https://185-198-56-56.livesports24.online/football3ua.m3u8";
             if ( $ch === 'belarusss5' ) return "https://185-198-56-56.livesports24.online/belarusss5.m3u8";
                if ( $ch === 'espn' ) return "http://185.59.223.82:8080/espn/tracks-v1a1/mono.m3u8";
               if ( $ch === 'espn2' ) return "http://185.59.223.82:8080/espn2/tracks-v1a1/mono.m3u8";
                 if ( $ch === 'espn3' ) return "http://rayito-tv.xyz:41001/1/1/32687";
                 if ( $ch === 'fox1' ) return "http://live.highstream.club/live/FS1/playlist.m3u8";
                 if ( $ch === 'fox2' ) return "https://foxsports01-i.akamaihd.net/hls/live/619466/fs2_sg/index.m3u8?hdnts=st=1593192605~exp=1593192845~acl=/*~hmac=78d19656e0b23d58983f5c4cb13fc0cf0971a7598c4716d74bca2f8658b009f7";
                 if ( $ch === 'fox3' ) return "http://200.73.59.84:8000/play/a00t";
                 if ( $ch === 'foxpr' ) return "http://rayito-tv.xyz:41001/1/1/30523";
                  if ( $ch === 'ten1' ) return "https://sony247channels.akamaized.net/hls/live/2004802/SONYTEN1HD/master.m3u8?hdnea=exp=1594424839~acl=/*~hmac=83f1aab290adcecd58296efe621ec7c8ed08d086c488a97c87cf62465105997c";
             if ( $ch === 'ten2' ) return "https://sony247channels.akamaized.net/hls/live/2004803/SONYTEN2HD/master.m3u8?hdnea=exp=1594424839~acl=/*~hmac=83f1aab290adcecd58296efe621ec7c8ed08d086c488a97c87cf62465105997c";
                 if ( $ch === 'ten3' ) return "https://sony247channels.akamaized.net/hls/live/2004804/SONYTEN3HD/master.m3u8?hdnea=exp=1594424839~acl=/*~hmac=83f1aab290adcecd58296efe621ec7c8ed08d086c488a97c87cf62465105997c";
                if ( $ch === 'sespn' ) return "https://streamer-1.toffeelive.com/live/sony_espn_576/index.m3u8";
                if ( $ch === 'sesix' ) return "https://streamer-1.toffeelive.com/live/sony_six_576/index.m3u";
                  if ( $ch === 'sportpor1' ) return "https://grgs2020.000webhostapp.com/ks.m3u8?s=2166";
                  if ( $ch === 'sportpor2' ) return "https://grgs2020.000webhostapp.com/ks.m3u8?s=2167";
                    if ( $ch === 'sportpor3' ) return "https://grgs2020.000webhostapp.com/ks.m3u8?s=2168";
                    if ( $ch === 'sportpor4' ) return "https://grgs2020.000webhostapp.com/ks.m3u8?s=2169";
                    if ( $ch === 'sportpor5' ) return "https://grgs2020.000webhostapp.com/ks.m3u8?s=2170";
                    if ( $ch === 'skynet5' ) return "http://27.254.149.109:8081/tumlive/SKYNET5/playlist.m3u8";
                    if ( $ch === 'skynet6' ) return "http://27.254.149.109:8081/tumlive/SKYNET6/playlist.m3u8";
                    if ( $ch === 'ertsport' ) return "https://ert-live.siliconweb.com/media/ert_sports/ert_sportshigh.m3u8";
                     if ( $ch === 'laliga' ) return "http://live.highstream.club/live/BEINSPORTLALIGA/playlist.m3u8";
                     if ( $ch === 'movistarligadecampeones' ) return "https://cdo0.dailysport.pw/11/11.m3u8";
                     if ( $ch === 'adjarasport' ) return "https://receiver.adjara.com/adjarasport_live/LiveTV/tracks-v1a1/mono.m3u8";
                      if ( $ch === 'adjarasport2' ) return "https://receiver.adjara.com/adjarasport_live/LiveTV/tracks-v1a1/mono.m3u8";
        if ( $ch === 'primersport' ) return "https://cf98fa7b2ee4450e.mediapackage.us-east-1.amazonaws.com/out/v1/b36a6bd32ce54e709c51f9f1fceb70f8/index.m3u8";          
                if ( $ch === 'arenasport1' ) return "http://hrv.00387.info/Arena1HDHR/index.m3u8?token=test";   
                if ( $ch === 'arenasport2' ) return "http://hrv.00387.info/Arena2HDHR/index.m3u8?token=test";   
                if ( $ch === 'arenasport3' ) return "http://hrv.00387.info/Arena3HDHR/index.m3u8?token=test";   
                if ( $ch === 'arenasport4' ) return "http://hrv.00387.info/Arena4HDHR/index.m3u8?token=test";   
                if ( $ch === 'arenasport5' ) return "http://hrv.00387.info/Arena5HDHR/index.m3u8?token=test";   





    //OSN
    if ( $ch === 'osnyahala' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=88";
    if ( $ch === 'osnmovies' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=105";
    if ( $ch === 'osnaction' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=96";
    if ( $ch === 'osnmoviesfirst' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=109";
    if ( $ch === 'osnyahalacinema' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=92";
    if ( $ch === 'StarWorld' ) return "http://iptv8.premium-stv.com:2052/osnpro2@uasdq/@osqnpro2@/1710";
    if ( $ch === 'osncinema1' ) return "http://livecdnh1.tvanywhere.ae/hls/cin1/index.m3u8";
    if ( $ch === 'osnyahala1' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=89";
    //bein_entertaiment
    if ( $ch === 'BeinMovies1' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=23";
      if ( $ch === 'BeinMovies2' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=24";
      if ( $ch === 'BeinMovies3' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=25";
      if ( $ch === 'BeinMovies4' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=26";
      if ( $ch === 'Beindrama' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=31";
    //arabic
    if ( $ch === 'arthikayat1' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=93";
    if ( $ch === 'arthikayat2' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=94";
    if ( $ch === 'artaflam1' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=90";
    if ( $ch === 'artaflam2' ) return "http://grgs2020.000webhostapp.com/srv/ysbein.m3u8?s=91";
    if ( $ch === 'nahar' ) return "http://livecdnh2.tvanywhere.ae/hls/nahar_sd/04.m3u8";  
    if ( $ch === 'nahardrama' ) return "http://livecdnh2.tvanywhere.ae/hls/nahar_sd_drama/04.m3u8";
    if ( $ch === 'cbc' ) return "http://95.170.215.109/hls/CBC-Backup-M.m3u8"; 
    if ( $ch === 'cbcdrama' ) return "http://livecdnh2.tvanywhere.ae/hls/cbc_drama/04.m3u8"; 
    if ( $ch === 'hayat' ) return "http://livecdnh2.tvanywhere.ae/hls/hayat/04.m3u8"; 
    if ( $ch === 'dmc' ) return "http://95.170.215.109/hls/dmc-Backup-M.m3u8";
    if ( $ch === 'dmcdrama' ) return "http://95.170.215.109/hls/dmc-drama-Backup-M.m3u8";  
    if ( $ch === 'on' ) return "http://dragon2020.com:8080/live/admin_390589/aZhEHCVO/105280.m3u8";         
    if ( $ch === 'ondrama' ) return "http://95.170.215.107/hls/m3u8/ON-Drama.m3u8";  
    if ( $ch === 'mbcdrama' ) return "http://livecdnh2.tvanywhere.ae/hls/mbc_drama/04.m3u8";    
    if ( $ch === 'mbcmsr' ) return "http://livecdnh2.tvanywhere.ae/hls/mbc_msr/04.m3u8";
    if ( $ch === 'mbcmsr2' ) return "http://95.170.215.107/hls/MBC-Masr-2-Backu-M.m3u8";
    if ( $ch === 'mbciraq' ) return "http://95.170.215.109:80/hls/m3u8/MBC-IRAQ-Backup.m3u8";
    if ( $ch === 'mbc1' ) return "http://livecdnh2.tvanywhere.ae:80/hls/mbc1/04.m3u8";
    if ( $ch === 'mbc2' ) return "http://livecdnh3.tvanywhere.ae/hls/mbc2/04.m3u8";
    if ( $ch === 'mbc3' ) return "http://livecdnh2.tvanywhere.ae/hls/mbc3/04.m3u8";
    if ( $ch === 'mbc4' ) return "http://livecdnh3.tvanywhere.ae/hls/mbc4/04.m3u8";
    if ( $ch === 'mbcaction' ) return "http://livecdnh3.tvanywhere.ae/hls/mbcaction/04.m3u8";
    if ( $ch === 'mbcbolly' ) return "http://livecdnh2.tvanywhere.ae/hls/mbc_bolly/04.m3u8";
    if ( $ch === 'mbcmax' ) return "http://livecdnh2.tvanywhere.ae/hls/mbcmax/04.m3u8";


    //italy
    if ( $ch === 'skcl1' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/28470";
    if ( $ch === 'skysportunoit' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/28332";
    if ( $ch === 'skysportfootballit' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/28307";
    if ( $ch === 'skysportnbait' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/28309";          
    if ( $ch === 'skysportarenait' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/28452";
    if ( $ch === 'skysportf1it' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/2695";
    if ( $ch === 'skysportmotogpit' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/28466";        
    if ( $ch === 'skysport24it' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/2696";        
    if ( $ch === 'dazn1it' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/28472";
    if ( $ch === 'dazn2it' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/28415";
    if ( $ch === 'skycinemauno' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/2694";
    if ( $ch === 'skycinemadue' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/28270";
    if ( $ch === 'skycinemaaction' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/28274";
    if ( $ch === 'skycinemafamily' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/2702";
    if ( $ch === 'skycinemaromance' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/28268";
    if ( $ch === 'skycinemacomedy' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/2703";
          
    //UK
    if ( $ch === 'skysportme' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/6466b97264.m3u8";
    if ( $ch === 'SkySportaction' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/9ed0e5e694.m3u8";
    if ( $ch === 'SkySportPL' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/7b0be90830.m3u8";
    if ( $ch === 'SkySportfootball' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/b2c6f5370b.m3u8";
    if ( $ch === 'SkySportcricket' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/209b929d09.m3u8";
    if ( $ch === 'SkySportF1' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/dd960521e0.m3u8";
    if ( $ch === 'SkySportGolf' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/73b2082f87.m3u8";
    if ( $ch === 'SkySportArena' ) return "http://stream-e30453a4b.nmbs.top/m3u/Sports/050156c6ae.m3u8";
    if ( $ch === 'btsport1' ) return "http://ahmed-yasser-servers.ga/ks.m3u8?s=838";
    if ( $ch === 'btsport2' ) return "http://ahmed-yasser-servers.ga/ks.m3u8?s=839";
    if ( $ch === 'btsport3' ) return "http://ahmed-yasser-servers.ga/ks.m3u8?s=840"; 
    if ( $ch === 'btsportespn' ) return "http://live.highstream.club/live/BTSPORTESPN/playlist.m3u8";
     

    //USA    
    if ( $ch === 'nbcsn' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/3105";
    if ( $ch === 'beinusa' ) return "http://live.highstream.club/live/BEINSPORTSUSA/playlist.m3u8";
    if ( $ch === 'usa' ) return "http://live.highstream.club/live/USA/playlist.m3u8";
    if ( $ch === 'tnt' ) return "http://live.highstream.club/live/TNT/playlist.m3u8";
    if ( $ch === 'beinn' ) return "http://live.highstream.club/live/BEINSPORTSESP/playlist.m3u8";      
    if ( $ch === 'nba' ) return "http://live.highstream.club/live/NBATV/playlist.m3u8";
    if ( $ch === 'tsn1' ) return "http://live.highstream.club/live/TSN1/playlist.m3u8";
    if ( $ch === 'tsn2' ) return "http://live.highstream.club/live/TSN2/playlist.m3u8"; 
    if ( $ch === 'tsn3' ) return "http://live.highstream.club/live/TSN3/playlist.m3u8";
    if ( $ch === 'tsn4' ) return "http://live.highstream.club/live/TSN4/playlist.m3u8";
    if ( $ch === 'tsn5' ) return "http://live.highstream.club/live/TSN5/playlist.m3u8";
    
    //turkey
    if ( $ch === 'trt1' ) return "http://trtcanlitv-lh.akamaihd.net/i/TRT1HD_1@181842/master.m3u8";
    if ( $ch === 'trtarabic' ) return "http://trtcanlitv-lh.akamaihd.net/i/TRTARAPCA_1@181945/master.m3u8";
    if ( $ch === 'TRTTURK' ) return "http://trtcanlitv-lh.akamaihd.net/i/TRTTURK_1@182144/master.m3u8";
    if ( $ch === 'TRTCocuk' ) return "http://trtcanlitv-lh.akamaihd.net/i/TRTCOCUK_1@181844/master.m3u8";
    if ( $ch === 'TRTWorld' ) return "https://trtcanlitv-lh.akamaihd.net/i/TRTWORLD_1@321783/master.m3u8";    
    if ( $ch === 'TRTsport' ) return "http://iptvmasterlink.dyndns.org:8080/Entry/trtsporhd_yeni/index.m3u8";
    if ( $ch === 'foxtr' ) return "http://95.170.215.120:80/hls/m3u8/Fox-HD.m3u8";  
    if ( $ch === 'bein1tr' ) return "https://us2.sports24.win/selcuksportsfutbol/beinmax1111/chunks.m3u8";
    if ( $ch === 'bein2tr' ) return "https://us2.sports24.win/selcuksportsfutbol/bein22222/chunks.m3u8";
    if ( $ch === 'bein3tr' ) return "https://us2.sports24.win/selcuksportsfutbol/bein3333/chunks.m3u8";
       

    //germany
     if ( $ch === 'sportdegital' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/2613";
     if ( $ch === 'skysport1de' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/2619";
     if ( $ch === 'skysport2de' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/2618";        
     if ( $ch === 'skysportbundesliga' ) return "http://mu02.v2iptv.com:8880/HJNM142/AnQJLxmC2L/2632";   
       


}

$tv= play($_GET['ch']);
header('Location: '.$tv);
;
/*}
else
{
  header("Location: https://dl.dropbox.com/s/j2us8slxie26i1m/%D8%A7%D9%84%D9%85%D9%82%D8%AF%D9%85%D8%A9.mp4");
}*/
?>
