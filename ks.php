<?php
$url ='https://anacondaapp.herokuapp.com/kc.php';
$content = file_get_contents($url);
$first_step = explode( 's8529073_url=' , $content );
$second_step = explode("19][" , $first_step[1] );
$user= $second_step[0];
$thired_step = explode( 's8529073_ua=' , $content );
$forth_step = explode("][" , $thired_step[1] );
$pass= $forth_step[0];

echo "#EXTM3U
#EXTINF:0,AR: Saudi Qraan
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."126
#EXTINF:0,AR: Saudi Sunna
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."958
#EXTINF:0,Quran TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3020
#EXTINF:0,AR: Almajd TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2092
#EXTINF:0,AR: Almajd Quraan
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."957
#EXTINF:0,AR: Almajd Hadeth
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."956
#EXTINF:0,AR:  Almajd Documentary
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2090
#EXTINF:0,AR: Ahl Al Quran
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2091
#EXTINF:0,AR:Al_Nas
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2089
#EXTINF:0,BEOUT 1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2991
#EXTINF:0,BEOUT 2 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2992
#EXTINF:0,BEOUT 3 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2993
#EXTINF:0,BEOUT ACTION
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2994
#EXTINF:0,BEOUT Arabia
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2995
#EXTINF:0,BEOUT Cinema
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2996
#EXTINF:0,BEOUT Masr7 Masr
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2997
#EXTINF:0,BEOUT Scare tv
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2998
#EXTINF:0,BEOUT ShowTime1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2999
#EXTINF:0,BEOUT showTime2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3000
#EXTINF:0,beIN SPORTS FullHD1 PR
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3221
#EXTINF:0,beIN SPORTS FullHD2 PR
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3222
#EXTINF:0,beIN SPORTS FullHD3 PR
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3223
#EXTINF:0,beIN SPORTS FullHD1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3224
#EXTINF:0,beIN SPORTS FullHD2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3225
#EXTINF:0,beIN SPORTS FullHD3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3226
#EXTINF:0,beIN SPORTS FullHD4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3230
#EXTINF:0,beIN SPORTS FullHD5
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3227
#EXTINF:0,beIN SPORTS FullHD6
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3228
#EXTINF:0,beIN SPORTS FullHD7
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3229
#EXTINF:0,BEOUT 1 FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3385
#EXTINF:0,BEOUT 1 SD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3394
#EXTINF:0,BEOUT 2 SD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3395
#EXTINF:0,AR: beIN Sports 1 4K HEVC PR
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."459
#EXTINF:0,AR: beIN Sports 2 4K HEVC PR
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."450
#EXTINF:0,AR: beIN Sports  3 4K HEVC PR
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."451
#EXTINF:0,AR: beIN Sports  1 4K HEVC
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."452
#EXTINF:0,AR: beIN Sports  2 4K HEVC
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."453
#EXTINF:0,AR: beIN Sports  3 4K HEVC
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."454
#EXTINF:0,AR: beIN Sports  4 4K HEVC
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."455
#EXTINF:0,AR: beIN Sports  5 4K HEVC
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."456
#EXTINF:0,AR: beIN Sports  6 4K HEVC
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."457
#EXTINF:0,AR: beIN Sports  7 4K HEVC
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."458
#EXTINF:0,AR: beIN Soprt HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."960
#EXTINF:0,AR: beIN sports News
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2051
#EXTINF:0,AR: beIN SPORTS HD1 PR
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."46
#EXTINF:0,AR: beIN SPORTS HD2 PR
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."47
#EXTINF:0,AR: beIN SPORTS HD3 PR
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."48
#EXTINF:0,AR: beIN SPORTS HD1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."49
#EXTINF:0,AR: beIN SPORTS HD2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."50
#EXTINF:0,AR: beIN SPORTS HD3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."51
#EXTINF:0,AR: beIN SPORTS HD4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."52
#EXTINF:0,AR: beIN SPORTS HD5
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."53
#EXTINF:0,AR: beIN SPORTS HD6
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."54
#EXTINF:0,AR: beIN SPORTS HD7
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."55
#EXTINF:0,AR: beIN SPORTS HD11
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3001
#EXTINF:0,AR: beIN SPORTS HD12
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3002
#EXTINF:0,beIN Sport XTRA 1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3409
#EXTINF:0,beIN Sport XTRA 2 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3410
#EXTINF:0,AR: beIN SPORTS SD1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."56
#EXTINF:0,AR: beIN SPORTS SD2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."57
#EXTINF:0,AR: beIN SPORTS SD3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."58
#EXTINF:0,AR: beIN SPORTS SD4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."59
#EXTINF:0,AR: beIN SPORTS SD5
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."60
#EXTINF:0,AR: beIN SPORTS SD6
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."93
#EXTINF:0,AR: beIN SPORTS SD7
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."92
#EXTINF:0,AR: beIN SPORTS SD8
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."91
#EXTINF:0,AR: beIN SPORTS SD9
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."61
#EXTINF:0,AR: beIN SPORTS SD10
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1459
#EXTINF:0,AR: beIN SPORTS LOW1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."62
#EXTINF:0,AR: beIN SPORTS LOW2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."63
#EXTINF:0,AR: beIN SPORTS LOW3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."64
#EXTINF:0,AR: beIN SPORTS LOW4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."65
#EXTINF:0,AR: beIN SPORTS LOW5
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."66
#EXTINF:0,AR:bein sport low6
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2108
#EXTINF:0,AR:bein sport low7
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2109
#EXTINF:0,AR:bein sport low8
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2110
#EXTINF:0,AR:bein sport low9
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2111
#EXTINF:0,AR: bein sport low10
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2112
#EXTINF:0,beIN Radio 4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2018
#EXTINF:0,Radio Bein 1 premium
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3350
#EXTINF:0,Radio Bein 2 premium
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3351
#EXTINF:0,Radio Bein 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3352
#EXTINF:0,Radio Bein 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3353
#EXTINF:0,Radio Bein 3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3354
#EXTINF:0,Radio Bein 4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3355
#EXTINF:0,Radio Bein 5
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3356
#EXTINF:0,Radio Bein 6
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3357
#EXTINF:0,Radio Bein 7
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3358
#EXTINF:0,AR: beIN Movies 1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."24
#EXTINF:0,AR: beIN Movies 2 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."17
#EXTINF:0,AR: beIN Movies 3 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."18
#EXTINF:0,AR: beIN Movies 4 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."19
#EXTINF:0,AR: beIN Series 1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."20
#EXTINF:0,AR: beIN Series 2 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."21
#EXTINF:0,AR:  beIN Outdoor
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."13
#EXTINF:0,AR:  beIN AMC
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."14
#EXTINF:0,AR: beIN  Drama
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."15
#EXTINF:0,AR: beIN  Gourmet
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."16
#EXTINF:0,AR: beIN Jeem HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."22
#EXTINF:0,AR: beIN Fox Movies
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."23
#EXTINF:0,AR: beIN FATAFEAT HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."25
#EXTINF:0,AR: beIN Baraeem
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2028
#EXTINF:0,AR: beIN Baraem 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2950
#EXTINF:0,AR :beIN_BOOMERANG
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2945
#EXTINF:0,AR: beIN DTX
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2946
#EXTINF:0,AR: beIN JUNIOR HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2947
#EXTINF:0,AR: beIN DREAMWORKS HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2948
#EXTINF:0,AR: beIN BOXOFFICE HD1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3276
#EXTINF:0,AR:Cartoon Network Arabic
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2949
#EXTINF:0,AR: Seevii PRIME 1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2951
#EXTINF:0,AR: Seevii_PRIME 2 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2952
#EXTINF:0,KAICER BOX OFFICE 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."494
#EXTINF:0,KAICER BOX OFFICE 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."512
#EXTINF:0,KAICER BOX OFFICE 3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."515
#EXTINF:0,KAICER BOX OFFICE 4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."514
#EXTINF:0,KAICER BOX OFFICE 5
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."516
#EXTINF:0,KAICER BOX OFFICE 6
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2465
#EXTINF:0,KAICER BOX OFFICE 7
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2466
#EXTINF:0,KAICER BOX ARAB 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1476
#EXTINF:0,KAICER BOX ARAB 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1477
#EXTINF:0,KAICER BOX ARAB 3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1478
#EXTINF:0,KAICER BOX ARAB 4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1479
#EXTINF:0,KAICER BOX ARAB 5
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1480
#EXTINF:0,[NETFLIX] Action
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2418
#EXTINF:0,[NETFLIX] Thriller
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2419
#EXTINF:0,[NETFLIX] SCi-Fi
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2420
#EXTINF:0,[NETFLIX] Hendy
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2421
#EXTINF:0,[NETFLIX] Horror
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2422
#EXTINF:0,NETFLIX_Comedy+
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2505
#EXTINF:0,NETFLIX_SCI FI
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2506
#EXTINF:0,NETFLIX_HOME_CINEMA_1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2507
#EXTINF:0,shahid TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2464
#EXTINF:0,[Shahid Action]
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2423
#EXTINF:0,[Shahid Aflam]
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2424
#EXTINF:0,[Shahid Aflam2]
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2425
#EXTINF:0,[Shahid HINDI]
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2426
#EXTINF:0,[Shahid HORROR]
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2427
#EXTINF:0,[Shahid RMANCE]
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2428
#EXTINF:0,NETFLIX N action
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2463
#EXTINF:0,Netflex Action
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2116
#EXTINF:0,Netflix SCF FI
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2041
#EXTINF:0,Netflix Kids
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2042
#EXTINF:0,Netflix Horror
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2043
#EXTINF:0,Netflix Comedy
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2044
#EXTINF:0,NETFLIX  ACTION
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2047
#EXTINF:0,Netflix Comedy 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2346
#EXTINF:0,NETFLIX_DRAMA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2347
#EXTINF:0,NETFLIX_Musalsalat_3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2349
#EXTINF:0,Netflix Horror 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2350
#EXTINF:0,Netflix Bollywood
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2351
#EXTINF:0,Netflix Drama+
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2354
#EXTINF:0,NETFLIX_KIDS2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2357
#EXTINF:0,NETFLIX_THRILLER
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2358
#EXTINF:0,Alkaicer Action Movies
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2398
#EXTINF:0,Alkaicer B-Cinema
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2399
#EXTINF:0,Alkaicer Box-Movies
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2400
#EXTINF:0,Alkaicer Comedy-Movies
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2401
#EXTINF:0,Alkaicer Disney-Movies
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2402
#EXTINF:0,Alkaicer  Cinema_One
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2403
#EXTINF:0,Alkaicer Famely-Movies
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2404
#EXTINF:0,Alkaicer KidsCo-Movies
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2405
#EXTINF:0,Alkaicer MasterPiece-Movies
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2406
#EXTINF:0,Alkaicer Premiere-Movies
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2407
#EXTINF:0,Alkaicer Thriller-Movies
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2408
#EXTINF:0,Alkaicer W-Movies
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2409
#EXTINF:0,Alkaicer The-Movies
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2410
#EXTINF:0,Alkaicer The-Movies2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2411
#EXTINF:0,TOM &JERRY LIVE
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2819
#EXTINF:0,Aroma Action
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2953
#EXTINF:0,Aroma Arabic Films
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2954
#EXTINF:0,Aroma Kids
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2955
#EXTINF:0,Aroma Discovery
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2956
#EXTINF:0,Aroma Drama Films
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2957
#EXTINF:0,Aroma Masra7yat
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2958
#EXTINF:0,Aroma Horror
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2959
#EXTINF:0,Aroma Zaman
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2960
#EXTINF:0,Aroma WWE
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2961
#EXTINF:0,Aroma  Box Office 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2962
#EXTINF:0,Aroma  Box Office 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2963
#EXTINF:0,Aroma  Box Office 3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2964
#EXTINF:0,Aroma  Box Office 4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2965
#EXTINF:0,live film 4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2934
#EXTINF:0,live film 3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2935
#EXTINF:0,live film 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2936
#EXTINF:0,live film 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2937
#EXTINF:0,DNH FILM
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2928
#EXTINF:0,DNH KIDS
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2929
#EXTINF:0,DNH TIATRO
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2930
#EXTINF:0,DNH ARABIC
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2931
#EXTINF:0,Nimo Kids HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2932
#EXTINF:0,Panorama Tom & Jerry HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2976
#EXTINF:0,DREAM KIDS
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2977
#EXTINF:0,Majestic Arabic
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3009
#EXTINF:0,Majestic Cinema
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3010
#EXTINF:0,Majestic Mega
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3011
#EXTINF:0,Majestic Kids HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3014
#EXTINF:0,Majestic Bollywood
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3015
#EXTINF:0,Mega
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3246
#EXTINF:0,AMAZON PRIME Arabic 4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3248
#EXTINF:0,DNH FILM
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3249
#EXTINF:0,DNH TIATRO
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3250
#EXTINF:0,DNH ARABIC
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3251
#EXTINF:0,GO_ENGLISH
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3252
#EXTINF:0,GO_ARABIC
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3253
#EXTINF:0,GO_FAGR_SHOW
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3254
#EXTINF:0,GO_MOVES_LAND
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3315
#EXTINF:0,OZN_AHMEDZAKI
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3311
#EXTINF:0,OZN_MASRAH_MASR
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3312
#EXTINF:0,OZN_ADELEMAM
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3313
#EXTINF:0,OZN_ISMAIL.YASEAN
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3314
#EXTINF:0,AR:SONY_MAX
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3316
#EXTINF:0,AR:SONY_NAWAEAM
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3317
#EXTINF:0,AR:SONY_ACTION
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3318
#EXTINF:0,AR:SONY_DRAMA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3319
#EXTINF:0,AR: NETFLIX ACTION +1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3320
#EXTINF:0,AR: NETFLIX ACTION +2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3321
#EXTINF:0,AR: NETFLIX Action Top+
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3322
#EXTINF:0,AR: NETFLIX ANIME +2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3324
#EXTINF:0,AR: NETFLIX ANIME +3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3325
#EXTINF:0,AR: NETFLIX ANIME +4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3326
#EXTINF:0,AR: NETFLIX Comedy+++
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3327
#EXTINF:0,AR: NETFLIX COMEDY +1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3328
#EXTINF:0,AR: NETFLIX Comedy +2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3329
#EXTINF:0,AR: Netflix DRAMA+
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3330
#EXTINF:0,AR: NETFLIX DRAMA +1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3331
#EXTINF:0,AR: NETFLIX DRAMA +2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3332
#EXTINF:0,AR: Netflix Horror+
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3333
#EXTINF:0,AR: NETFLIX HORROR +1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3334
#EXTINF:0,AR: NETFLIX HORROR +3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3336
#EXTINF:0,AR: NETFLIX HORROR +4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3337
#EXTINF:0,AR: NETFLIX Kids +1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3339
#EXTINF:0,AR: NETFLIX Kids +2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3340
#EXTINF:0,AR: NETFLIX Kids +3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3341
#EXTINF:0,AR: NETFLIX Kids +4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3342
#EXTINF:0,AR: NETFLIX S-FICTION
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3343
#EXTINF:0,El Shorouk Quran
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3359
#EXTINF:0,El Shorouk Action
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3360
#EXTINF:0,El Shorouk Aflam
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3361
#EXTINF:0,El Shorouk Classic
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3362
#EXTINF:0,El Shorouk Hindi
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3363
#EXTINF:0,El Shorouk Cartoon
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3364
#EXTINF:0,El Shorouk Turky
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3365
#EXTINF:0,El Shorouk Masrah
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3366
#EXTINF:0,El Shorouk Clip
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3367
#EXTINF:0,RADIO UMM KULTHUM
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3368
#EXTINF:0,RADIO ABDEL HALIM HAFEZ
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3369
#EXTINF:0,RADIO GEORGE WASOUF
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3370
#EXTINF:0,RADIO AMR DIAB
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3371
#EXTINF:0,Mix Action
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3372
#EXTINF:0,Mix Crime
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3374
#EXTINF:0,Mix Mystery
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3375
#EXTINF:0,Mix Sport Movies
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3376
#EXTINF:0,best tv movies ch
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3377
#EXTINF:0,iflix Arabia
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3378
#EXTINF:0,iflix Turk
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3379
#EXTINF:0,iflix Action
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3380
#EXTINF:0,iflix Comedy
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3381
#EXTINF:0,iflix moudablaj
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3382
#EXTINF:0,iflix Prime
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3383
#EXTINF:0,AR: ART Aflam 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."997
#EXTINF:0,AR: ART Aflam  2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."102
#EXTINF:0,AR: ART Cinema
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."103
#EXTINF:0,AR: ART Hekayat 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."104
#EXTINF:0,AR: ART Hekayat 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."105
#EXTINF:0,AR: OSN Nat Geo SD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."85
#EXTINF:0,AR: OSN Cinema 1 SD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."86
#EXTINF:0,AR: OSN Nat Geo pepole SD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."88
#EXTINF:0,AR: OSN Star World SD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."89
#EXTINF:0,AR: OSN Star Movies SD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."90
#EXTINF:0,OSN:  ITV Choice
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2172
#EXTINF:0,[OSN] Movies firest
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2825
#EXTINF:0,[OSN] FX HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2826
#EXTINF:0,OSN: Nickelodeon HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3284
#EXTINF:0,AR: OSN  Binge
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."84
#EXTINF:0,OSN Movies
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."153
#EXTINF:0,OSN Disney XD HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2543
#EXTINF:0,[OSN] Alfa Mosalsalat
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."995
#EXTINF:0,OSN:  Snaiper Anime
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2542
#EXTINF:0,OSN :  KIDS ZONE
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."154
#EXTINF:0,OSN Action
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."155
#EXTINF:0,OSN YAHALA HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."156
#EXTINF:0,OSN Nat Geo
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."157
#EXTINF:0,OSN Nat Geo Pepole
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."158
#EXTINF:0,OSN Star Movies
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."159
#EXTINF:0,OSN Star World
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."160
#EXTINF:0,OSN Ya Hala Cinema
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."161
#EXTINF:0,OSN Disny Junior
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."162
#EXTINF:0,OSN Enigma
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."164
#EXTINF:0,OSN Discovery Show
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."165
#EXTINF:0,OSN History Channel
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."167
#EXTINF:0,OSN Discovery Science
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."168
#EXTINF:0,OSN  OSN BBC First
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."169
#EXTINF:0,OSN Movies First
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."170
#EXTINF:0,OSN Movies Disney
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."171
#EXTINF:0,OSN  Movies First
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."175
#EXTINF:0,OSN: Disney Channel
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."667
#EXTINF:0,OSN: Movies First  ++2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."738
#EXTINF:0,[OSN] Movies
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."963
#EXTINF:0,[OSN] wwe
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."994
#EXTINF:0,[OSN] Food
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."993
#EXTINF:0,[OSN] Alfa Cinema 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."991
#EXTINF:0,[OSN] Alfa Cinema 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."992
#EXTINF:0,[OSN] OSN Cinema
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."964
#EXTINF:0,[OSN] Alfa Alyoum
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."990
#EXTINF:0,[OSN] OSN Ya Hala Aloula
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."988
#EXTINF:0,[OSN] : Enigma
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."987
#EXTINF:0,[OSN] Thriller
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."986
#EXTINF:0,[OSN] OSN Animal Planet
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."962
#EXTINF:0,[OSN] OSN Nat Geo Abudhabi
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."983
#EXTINF:0,[OSN] OSN Nat Geo Wild
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."982
#EXTINF:0,[OSN] OSN Comedy
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."965
#EXTINF:0,[OSN] OSN Nat Geo People
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."981
#EXTINF:0,[OSN] OSN Movies First
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."980
#EXTINF:0,[OSN] Nick JR
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."979
#EXTINF:0,[OSN] OSN Living
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."977
#EXTINF:0,[OSN] OSN Kids
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."976
#EXTINF:0,[OSN] Pop up
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."975
#EXTINF:0,[OSN] Movies Family
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."974
#EXTINF:0,[OSN] OSN Box Office 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."973
#EXTINF:0,[OSN] OSN ON DEMANDE 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."972
#EXTINF:0,OSN MOVIES BOX OFFICE 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."971
#EXTINF:0,[OSN] OSN Discovery HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."969
#EXTINF:0,[OSN] Discovery ID
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."968
#EXTINF:0,[OSN] OSN Comedy Central
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."966
#EXTINF:0,OSN:  Fine Living
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2828
#EXTINF:0,OSN: Alfa Fann
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2829
#EXTINF:0,OSN:  Alfa Safwa
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2830
#EXTINF:0,OSN: OSN BBC First
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2831
#EXTINF:0,OSN: ON-DEMAND-EXTRA-HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2832
#EXTINF:0,MYHD: MBC 1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."845
#EXTINF:0,MYHD: MBC 2 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."846
#EXTINF:0,MYHD: MBC 3 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."847
#EXTINF:0,MYHD: MBC 4 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."848
#EXTINF:0,MYHD: MBC 5 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2114
#EXTINF:0,MYHD: MBC Bollywood HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."849
#EXTINF:0,MYHD: MBC Massr HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."850
#EXTINF:0,MYHD: MBC Masr 2 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."851
#EXTINF:0,MYHD: MBC Drama HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."852
#EXTINF:0,MYHD: MBC Action HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."853
#EXTINF:0,MYHD: MBC Max HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."854
#EXTINF:0,MYHD: MBC Iraq HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."855
#EXTINF:0,MYHD: MBC Drama+ HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."856
#EXTINF:0,MYHD: MBC+Variety HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."857
#EXTINF:0,MYHD: FOX Rewayat HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."859
#EXTINF:0,MYHD: FOX Life HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."860
#EXTINF:0,MYHD: Family Movies HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."861
#EXTINF:0,MYHD: FOX Crime HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."862
#EXTINF:0,MYHD: Fox Action
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."863
#EXTINF:0,MYHD: Film box
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."864
#EXTINF:0,MYHD: Docu Box HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."865
#EXTINF:0,MYHD: Fight Box HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."866
#EXTINF:0,MYHD: Fox Movies
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."867
#EXTINF:0,MYHD: Planet Earth HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."869
#EXTINF:0,MYHD: Discovery SC HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."871
#EXTINF:0,MYHD: Gulli Arabic HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."872
#EXTINF:0,MYHD: Duck TV HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."874
#EXTINF:0,MBC_1 sd
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2771
#EXTINF:0,MBC_2 sd
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2772
#EXTINF:0,MBC_3 sd
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2773
#EXTINF:0,MBC_4 sd
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2774
#EXTINF:0,MBC_5 sd
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2775
#EXTINF:0,MBC_MAX sd
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2776
#EXTINF:0,MBC_ACTION sd
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2777
#EXTINF:0,MBC_DRAMA sd
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2778
#EXTINF:0,MBC_MASR sd
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2779
#EXTINF:0,MBC_MASR 2 sd
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2780
#EXTINF:0,MBC_FM_PANORAMA sd
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2781
#EXTINF:0,AR: Al Jazeera
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."999
#EXTINF:0,AR: Al Jazeera Documentry
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1000
#EXTINF:0,AR: AL JAZEERA MUBASHER
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3208
#EXTINF:0,AR: AlJazeera-English
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3209
#EXTINF:0,AR: Al Jazeera Mubasher LIVE
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1003
#EXTINF:0,AR: Al ALArabiya
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1001
#EXTINF:0,AR: Al ALArabiya Alhadaath
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1002
#EXTINF:0,AR: BBC Arabic
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1005
#EXTINF:0,AR: RT News
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1008
#EXTINF:0,AR: Sky News
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1007
#EXTINF:0,AR: TRT-ELARABIYE
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1006
#EXTINF:0,AR: RT Arabic
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1004
#EXTINF:0,AR: FR 24 arabic HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3206
#EXTINF:0,AR: DW Arabic
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3207
#EXTINF:0,AR:  Alhurra
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3211
#EXTINF:0,CNN
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3212
#EXTINF:0,France 24 (En Francais)
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3213
#EXTINF:0,AR: Iraqia News
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3214
#EXTINF:0,AR: Rotana Comedy
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3216
#EXTINF:0,AR:Rotana Cinema
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."106
#EXTINF:0,AR: Rotana Cinema KSA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."107
#EXTINF:0,AR:Rotana Aflam
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."108
#EXTINF:0,AR: Rotana  Comedy
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."109
#EXTINF:0,AR: Rotana Classic
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."110
#EXTINF:0,AR: Rotana Drama
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3215
#EXTINF:0,AR: Rotana Clip
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3217
#EXTINF:0,AR: Rotana Khaliji
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3218
#EXTINF:0,AR: ON Time Sport 1 SD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2397
#EXTINF:0,AR: ON Time Sport 1HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."507
#EXTINF:0,AR: ON Time Sport 2 SD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2396
#EXTINF:0,AR: ON Time Sport 2 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."949
#EXTINF:0,AR: Time Sport
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."951
#EXTINF:0,AR: Alahly
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."952
#EXTINF:0,AR: Zamalek TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2068
#EXTINF:0,AR:  Sada Elbabad
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."495
#EXTINF:0,AR:  Nile Sport
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."496
#EXTINF:0,AR:  Nile Comedy
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."497
#EXTINF:0,AR: Nile News
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."498
#EXTINF:0,AR: Oscar
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."499
#EXTINF:0,AR:CBC Drama
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."500
#EXTINF:0,AR:CBC Sofra
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."501
#EXTINF:0,AR:CBC
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."502
#EXTINF:0,AR:DMC
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."503
#EXTINF:0,AR:Alnahar
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."504
#EXTINF:0,AR: ALnahar Drama
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."505
#EXTINF:0,AR: ON Drama
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."506
#EXTINF:0,AR: ON E
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."508
#EXTINF:0,AR: Alhayah
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."509
#EXTINF:0,AR:  Maspero-Zaman
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."950
#EXTINF:0,AR: Mehwar
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."510
#EXTINF:0,AR : Zee Alwan
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3308
#EXTINF:0,AR : ZEE AFLAM
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3309
#EXTINF:0,AR: Mksaby
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3349
#EXTINF:0,AR: SUDAN
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3142
#EXTINF:0,AR: Sudan AlIstijaba
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3143
#EXTINF:0,AR: Sudan Ashorooq
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3144
#EXTINF:0,AR: Sudan BlueNile
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3145
#EXTINF:0,AR: Sudan Drama
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3146
#EXTINF:0,AR: Sudan Jazeera_Green
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3147
#EXTINF:0,AR: Sudan Kassala
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3148
#EXTINF:0,AR: Sudan Khartoum
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3149
#EXTINF:0,AR: Sudan Knowledge
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3150
#EXTINF:0,AR: Sudan Monwaat
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3151
#EXTINF:0,AR: Sudan Music
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3152
#EXTINF:0,AR: Sudan OmDorman
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3153
#EXTINF:0,AR: Sudan Sport
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3154
#EXTINF:0,AR: Sudan Sport HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3155
#EXTINF:0,AR: Sudan Tybah
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3156
#EXTINF:0,AR: Sudania 24
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3157
#EXTINF:0,AR:  Sport HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2841
#EXTINF:0,AR: betlahem 1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2843
#EXTINF:0,AR: Betlahem 2 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2842
#EXTINF:0,AR: FajerTV1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."584
#EXTINF:0,AR: FajerTV2 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."587
#EXTINF:0,AR: palastine  live
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."590
#EXTINF:0,AR: FajerTV 1 1080
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."593
#EXTINF:0,AR: radio marah
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."596
#EXTINF:0,AR: Raya
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."481
#EXTINF:0,AR: Ajyal
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."482
#EXTINF:0,Al nagah
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."483
#EXTINF:0,AR: Palstine Today
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."486
#EXTINF:0,AR: Alhorrya
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2942
#EXTINF:0,AR: OMG
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2943
#EXTINF:0,AR: Aqsa tv
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2944
#EXTINF:0,AR: Hala Ramallah
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3044
#EXTINF:0,AR: nablus live
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3045
#EXTINF:0,AR: Fajr 1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."448
#EXTINF:0,AR: Fajr 2 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."449
#EXTINF:0,AR: Jordan Almamlaka
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3117
#EXTINF:0,AR: Jordan Amen
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3118
#EXTINF:0,AR: Jordan Amman
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3119
#EXTINF:0,AR: Jordan Nart
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3120
#EXTINF:0,AR: Jordan Noor
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3121
#EXTINF:0,AR: Jordan Ro2ya
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3122
#EXTINF:0,AR: JORDAN SPORTS
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3123
#EXTINF:0,AR: Jordan Today
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3124
#EXTINF:0,AR: JORDAN TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3125
#EXTINF:0,AR: Jordan Yarmouk
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3126
#EXTINF:0,AR: Jordan Zweina
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3127
#EXTINF:0,AR: LIBYA 218 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3128
#EXTINF:0,AR: Libya 218 News
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3129
#EXTINF:0,AR: Libya AlAhrar
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3130
#EXTINF:0,AR: Libya Alhadath
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3131
#EXTINF:0,AR: Libya Almarsad
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3132
#EXTINF:0,AR: Libya Alwatanya
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3133
#EXTINF:0,AR: Libya elwatan
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3134
#EXTINF:0,AR: Libya 218 News
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3135
#EXTINF:0,AR: LIBYA WTV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3136
#EXTINF:0,AR: Libya Panorama
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3137
#EXTINF:0,AR: Libya Tanasuh
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3138
#EXTINF:0,AR: Libya Waad
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3139
#EXTINF:0,AR: Libyas Channel
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3140
#EXTINF:0,MA:ALOULA INT
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."726
#EXTINF:0,MA:ALMAGHRIBIA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."727
#EXTINF:0,MA:2M
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."728
#EXTINF:0,MA:ALRABIA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."729
#EXTINF:0,MA:ASSADISA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."730
#EXTINF:0,MA: telemaroc
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."733
#EXTINF:0,MA:ARRIADIA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."731
#EXTINF:0,MA:MEDI1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."732
#EXTINF:0,MA:ALMAGHRIBIA NEWS
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."734
#EXTINF:0,MA:TELE MAROC
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."735
#EXTINF:0,MA:TAMAZIGHT
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."736
#EXTINF:0,AR: Arriadia FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3105
#EXTINF:0,AR: Arriadia HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3106
#EXTINF:0,AR: Alrrabia FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3107
#EXTINF:0,AR: Alrrabia
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3108
#EXTINF:0,AR: AL MAGHRIBIA FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3109
#EXTINF:0,AR: AL MAGHRIBIA HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3110
#EXTINF:0,AR: Assadissa FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3111
#EXTINF:0,AR: Assadissa
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3112
#EXTINF:0,AR: Assabiaa FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3113
#EXTINF:0,AR: Tamazight HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3114
#EXTINF:0,AR: Medi1 Afrique FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3115
#EXTINF:0,TN:WATANIA1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."890
#EXTINF:0,TN:WATANIA2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."891
#EXTINF:0,TN:ELHIWAR
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."892
#EXTINF:0,TN:NESSMA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."893
#EXTINF:0,Tunisia Carthage
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2541
#EXTINF:0,TN:HANNIBAL
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."894
#EXTINF:0,TN:ATTESIA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."895
#EXTINF:0,TN:MTUNISIA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."896
#EXTINF:0,TN:TELEVISION1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."903
#EXTINF:0,TN:SAHELTV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."905
#EXTINF:0,TN:ALMOSTKELLA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."902
#EXTINF:0,TN:ALINSEN
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."901
#EXTINF:0,TN:ZAYTOUNA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."900
#EXTINF:0,TN:TELVZATV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."899
#EXTINF:0,TN:JANOUBIA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."898
#EXTINF:0,TN:TOUNESNA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."897
#EXTINF:0,AR: Semsem
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1010
#EXTINF:0,AR: Cartoon Network
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1011
#EXTINF:0,AR: PBS Kids 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1012
#EXTINF:0,AR: Al Mickey Channel
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1013
#EXTINF:0,AR: KARAMEESH
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1014
#EXTINF:0,AR: Kooky
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1015
#EXTINF:0,AR: Hodhod
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1021
#EXTINF:0,AR: Toyor Baby
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1018
#EXTINF:0,AR: Toyor Al Ganna
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1020
#EXTINF:0,AR: Maged
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1019
#EXTINF:0,AR: Spacetoon
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1017
#EXTINF:0,AR: Mody Kids
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1016
#EXTINF:0,AR: Boba TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3310
#EXTINF:0,AR:Baby-lon
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."916
#EXTINF:0,Algerian:CANAL ALGERIE 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."907
#EXTINF:0,Algerian:ALGERIE3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."908
#EXTINF:0,Algerian:Fajr
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."909
#EXTINF:0,Algerian:ECHOUROUK
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."911
#EXTINF:0,Algerian:DJAZAIRIA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."910
#EXTINF:0,Algerian:Echorouk BENNA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."912
#EXTINF:0,Algerian:Dzair 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."913
#EXTINF:0,Algerian:SAMIRA TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."915
#EXTINF:0,Algerian:ENTV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."917
#EXTINF:0,Algerian:Bahia Tv
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."946
#EXTINF:0,Algerian:TV BERBERE HD*
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."945
#EXTINF:0,Algerian:BEUR TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."918
#EXTINF:0,Algerian:ALHADEF
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."919
#EXTINF:0,AL MAGHRIBIA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."943
#EXTINF:0,Algerian:CHAMS TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."940
#EXTINF:0,Algerian:ENTV TERRESTRE DZ
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."941
#EXTINF:0,Algerian:ELHAYA-ALGERIE
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."938
#EXTINF:0,Algerian: Al adjwaa
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."934
#EXTINF:0,Algerian: ENNAHAR TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."935
#EXTINF:0,Algerian:Awrass  TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."932
#EXTINF:0,Algerian: El-Heddaf.TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."933
#EXTINF:0,Algerian: BAHIA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."931
#EXTINF:0,Algerian: Samira
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."927
#EXTINF:0,Algerian:ENNAHAR
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."924
#EXTINF:0,Algerian:Numidia--TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."922
#EXTINF:0,Algerian:ECHOUROUK News TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."923
#EXTINF:0,Algerian-ELBILAD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."926
#EXTINF:0,Algerian:Algeria-DZAIR 3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."925
#EXTINF:0,Algerian: ALGERIE3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."928
#EXTINF:0,Algerian: ALGERIE4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."929
#EXTINF:0,Algerian: ALGERIE5
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."930
#EXTINF:0,SY: SYRIA. ALOULA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2000
#EXTINF:0,SY: SYRIA.DRAMA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2001
#EXTINF:0,Syr-Sama-TV+
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2002
#EXTINF:0,SY: LANA Tv
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2003
#EXTINF:0,SY: Sama.alsham
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2013
#EXTINF:0,SY: SYRIA-TV2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2005
#EXTINF:0,SY: NOUREL SHAM
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2012
#EXTINF:0,SY: Halab-Today
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2011
#EXTINF:0,SY: Al.KhabarTV HD*
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2010
#EXTINF:0,SY: Drama-Al-Badawya
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2007
#EXTINF:0,SY:  LANA Tv HD*
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2009
#EXTINF:0,SY: ORIENT
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2004
#EXTINF:0,SY: SAMA TV SYRIA HD*
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2008
#EXTINF:0,SY: SYRIA.ALIKHBARIA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2006
#EXTINF:0,AR: Tarbawia
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2057
#EXTINF:0,==== IRAQ =====
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3075
#EXTINF:0,AR: AL HURRA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3076
#EXTINF:0,AR:Al Fallujah
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3078
#EXTINF:0,AR:Al Iraqiya
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3079
#EXTINF:0,AR:Al Iraqiya News
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3080
#EXTINF:0,AR:Al Al Rafidain
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3081
#EXTINF:0,AR:Al Sharqiya
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3082
#EXTINF:0,AR:Al Sharqiya News
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3083
#EXTINF:0,AR: Assyrian ANB
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3084
#EXTINF:0,AR:Babylon TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3085
#EXTINF:0,AR: News Dijlah
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3086
#EXTINF:0,AR:Dijlah Tarab
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3087
#EXTINF:0,AR:KurdMax
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3088
#EXTINF:0,AR:Kurdistan TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3089
#EXTINF:0,AR:Kurdsat
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3090
#EXTINF:0,AR Rudaw TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3091
#EXTINF:0,LBC
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3025
#EXTINF:0,LBCI.International
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3026
#EXTINF:0,LDC LEBANON
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3027
#EXTINF:0,LEBANON TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3028
#EXTINF:0,MTV LEBANON
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3029
#EXTINF:0,HAWACOM
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3030
#EXTINF:0,FUTURE LEBANON
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3031
#EXTINF:0,NBN HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3032
#EXTINF:0,AL MAYADEEN
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3033
#EXTINF:0,AL MANAR
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3034
#EXTINF:0,AGHANI AGHANI
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3035
#EXTINF:0,NOURSAT LEBANON
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3036
#EXTINF:0,NOUR AL SHAM
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3037
#EXTINF:0,AL JADEED LEBANON
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3038
#EXTINF:0,AL EKHBARIYA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3039
#EXTINF:0,OTV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3040
#EXTINF:0,CHARITY TV LEBANON
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3041
#EXTINF:0,ARABICA MUSIC LEBANON
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3042
#EXTINF:0,AR: AD Sport 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."112
#EXTINF:0,AR: AD Sport 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."113
#EXTINF:0,AR: AD Sport 3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."114
#EXTINF:0,AR: AD Sport 4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."115
#EXTINF:0,AR: KSA Sports 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2053
#EXTINF:0,AR: KSA Sports 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2054
#EXTINF:0,AR: KSA SPORTS 3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2055
#EXTINF:0,AR: ksa Sport 4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2056
#EXTINF:0,[LIB] Libya Sport Channel
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3347
#EXTINF:0,HU: GALAXY 4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2158
#EXTINF:0,Arena Sport 2 (Serb)
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1466
#EXTINF:0,Arena Sport 3 (Serb
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1467
#EXTINF:0,Arena Sport 4 (Serb
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1468
#EXTINF:0,Arena Sport 5 (Serb)
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1469
#EXTINF:0,Arena Sport 1 (Serb)
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1465
#EXTINF:0,PT: Sport TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2165
#EXTINF:0,PT: Sport TV 1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2166
#EXTINF:0,PT: Sport TV 2 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2167
#EXTINF:0,PT: Sport TV 3 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2168
#EXTINF:0,PT: Sport TV 4 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2169
#EXTINF:0,PT:  Sport TV 5 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2170
#EXTINF:0,MATCH 1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2837
#EXTINF:0,TRT Sport HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2839
#EXTINF:0,RAI 1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2836
#EXTINF:0,BT SPORT 1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2840
#EXTINF:0,[SPO*] SuperSport 01
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3060
#EXTINF:0,[SPO*] SuperSport 02
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3061
#EXTINF:0,[SPO*] SuperSport 03
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3062
#EXTINF:0,[SPO*] SuperSport 04
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3064
#EXTINF:0,[SPO*] SuperSport 05
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3063
#EXTINF:0,[SPO*] SuperSport 06
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3065
#EXTINF:0,[SPO*] SuperSport 07
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3066
#EXTINF:0,[SPO*] SuperSport 08
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3067
#EXTINF:0,[SPO*] SuperSport 09
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3068
#EXTINF:0,[SPO*] SuperSport 10
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3069
#EXTINF:0,[SPO*] SuperSport 11
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3070
#EXTINF:0,[SPO*] SuperSport 12
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3071
#EXTINF:0,ARGENTINA: TNT SPORT
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3072
#EXTINF:0,ARGENTINA: TYC
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3073
#EXTINF:0,ARGENTINA: FOX SPORTS PREMIUM
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3074
#EXTINF:0,POL: CANAL_SPORT
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3159
#EXTINF:0,AL: TRING_SPORT_1HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3169
#EXTINF:0,AL: TRING_SPORT_2HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3170
#EXTINF:0,AL: TRING_SPORT_3HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3171
#EXTINF:0,AL: TRING_SPORT_4HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3172
#EXTINF:0,AL:SUPER SPORT 1 NEWS
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3173
#EXTINF:0,AL:SUPER SPORT 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3174
#EXTINF:0,AL:SUPER SPORT 3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3175
#EXTINF:0,AL:SUPER SPORT 4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3176
#EXTINF:0,AL: EXPLORER_NATYRA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3177
#EXTINF:0,AL:FILM AKSION HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3178
#EXTINF:0,[PT] ELEVEN SPORTS 1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3279
#EXTINF:0,[PT] ELEVEN SPORTS 2 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3280
#EXTINF:0,[PT] ELEVEN SPORTS 3 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3281
#EXTINF:0,[PT] ELEVEN SPORTS 4 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3282
#EXTINF:0,[PT] ELEVEN SPORTS 5 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3283
#EXTINF:0,FR: TELEFOOT HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3047
#EXTINF:0,FR: Telefoot Stadium 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3161
#EXTINF:0,FR: Telefoot Stadium 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3162
#EXTINF:0,FR: Telefoot Stadium 3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3163
#EXTINF:0,FR: Telefoot Stadium 4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3164
#EXTINF:0,FR: Telefoot Stadium 5
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3165
#EXTINF:0,FR: Telefoot Stadium 6
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3166
#EXTINF:0,FR: Telefoot Stadium 7
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3167
#EXTINF:0,FR: Telefoot Stadium 8
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3168
#EXTINF:0,|FR| CANAL FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1022
#EXTINF:0,|FR| CANAL CINEMA FIHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1023
#EXTINF:0,|FR| CANAL DECALE FIHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1024
#EXTINF:0,|FR| CANAL SERIES FIHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1026
#EXTINF:0,|FR| CANAL FAMILY FIHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1025
#EXTINF:0,|FR| CANAL SPORT FIHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1027
#EXTINF:0,|FR| CINE+ CLASSIC FIHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1028
#EXTINF:0,|FR| CINE+ CLUB FIHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1029
#EXTINF:0,|FR| CINE+ EMOTION FIHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1030
#EXTINF:0,|FR| CINE+ FAMIZ FIHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1031
#EXTINF:0,|FR| CINE+ FRISSON FIHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1032
#EXTINF:0,|FR| CINE+ ¨POLAR FIHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1033
#EXTINF:0,|FR| CINE+ PREMIER FIHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1034
#EXTINF:0,|FR| TF1 FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1035
#EXTINF:0,|FR| TF1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1036
#EXTINF:0,|FR| M6 FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1037
#EXTINF:0,|FR| M6 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1038
#EXTINF:0,|FR| W9 FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1039
#EXTINF:0,|FR| ARTE HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1041
#EXTINF:0,|FR| RMC STORY FHD.
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1042
#EXTINF:0,|FR| FRANCE O HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1044
#EXTINF:0,|FR| FRANCE 2  FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1045
#EXTINF:0,|FR| RMC STORY HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1043
#EXTINF:0,|FR| W9 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1040
#EXTINF:0,|FR| FRANCE 2 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1046
#EXTINF:0,|FR| FRANCE 3 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1047
#EXTINF:0,|FR| FRANCE 3 FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1048
#EXTINF:0,|FR| FRANCE 4 FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1049
#EXTINF:0,|FR| FRANCE 4 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1050
#EXTINF:0,|FR| FRANCE 5 FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1051
#EXTINF:0,|FR| FRANCE 5 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1052
#EXTINF:0,|FR| TFX HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1053
#EXTINF:0,|FR| CNEWS FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1055
#EXTINF:0,|FR| BFM TV HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1056
#EXTINF:0,|FR| TMC HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1054
#EXTINF:0,|FR| EURONEWS
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1057
#EXTINF:0,|FR| FRANCE 24
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1058
#EXTINF:0,|FR| TV5 MONDE
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1059
#EXTINF:0,|FR| RMC SPORT 1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1073
#EXTINF:0,|FR| RMC SPORT 2 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1074
#EXTINF:0,|FR| RMC SPORT 3 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1075
#EXTINF:0,|FR| RMC SPORT 4 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1076
#EXTINF:0,|FR| BEIN SPORTS 1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1077
#EXTINF:0,|FR| BEIN SPORTS 2 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1078
#EXTINF:0,|FR| BEIN SPORTS 3 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1079
#EXTINF:0,|FR| BEIN MAX 4 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1080
#EXTINF:0,|FR| BEIN MAX 5 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1081
#EXTINF:0,|FR| BEIN MAX 7 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1083
#EXTINF:0,|FR| BEIN MAX 8 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1084
#EXTINF:0,|FR| BEIN MAX 9 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1085
#EXTINF:0,|FR| BEIN MAX 10 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1086
#EXTINF:0,|FR| BEIN MAX 6 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1082
#EXTINF:0,|FR| EXTREME SPORT HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1087
#EXTINF:0,|FR| EUROSPORT 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1088
#EXTINF:0,|FR| EUROSPORT 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1089
#EXTINF:0,|FR| FOOT+ 24/24
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1090
#EXTINF:0,|FR| L'EQUIPE 21 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1091
#EXTINF:0,|FR| GOLF+ HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1092
#EXTINF:0,|FR| OL TV HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1093
#EXTINF:0,|FR| INFOSPORT+ HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1094
#EXTINF:0,|FR| RMC NEWS SPORT HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1095
#EXTINF:0,|FR| EQUIDIA LIVE
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1096
#EXTINF:0,|FR| EQUIDIA LIFE HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1097
#EXTINF:0,|FR| AUTO MOTO HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1098
#EXTINF:0,|FR| KOMBAT SPORT
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1099
#EXTINF:0,|FR| CANAL+ HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1100
#EXTINF:0,|FR| CANAL+ CINEMA HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1101
#EXTINF:0,|FR| CANAL+  CINEMA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1102
#EXTINF:0,|FR| CANAL+ SERIE
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1104
#EXTINF:0,|FR| CANAL+ SERIES HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1103
#EXTINF:0,|FR| CANAL+  FAMILY HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1105
#EXTINF:0,|FR| CANAL+  FAMILY
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1106
#EXTINF:0,|FR| CANAL+  DECALE HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1107
#EXTINF:0,|FR| CANAL+  DECALE
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1108
#EXTINF:0,|FR| CANAL+  SPORT HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1109
#EXTINF:0,|FR| OCS MAX HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1110
#EXTINF:0,|FR| OCS GEANT HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1111
#EXTINF:0,|FR| OCS CITY HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1113
#EXTINF:0,|FR| CINE+  PREMIER
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1114
#EXTINF:0,|FR| CINE+  PREMIER HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1115
#EXTINF:0,|FR| OCS CHOC HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1112
#EXTINF:0,|FR| CINE+  FRISSON HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1116
#EXTINF:0,|FR| CINE+  FAMIZ HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1117
#EXTINF:0,|FR| CINE+  EMOTION HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1118
#EXTINF:0,|FR| CINE CLASSIC HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1119
#EXTINF:0,|FR| CINE+ CLUB HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1120
#EXTINF:0,|FR| PARAMOUNT CHANNEL
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1121
#EXTINF:0,|FR| MB LIVE TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1122
#EXTINF:0,|FR| PARAMOUNT CHANNEL HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1123
#EXTINF:0,|FR| TCM CINEMA HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1124
#EXTINF:0,|FR| ACTION HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1125
#EXTINF:0,|FR| E! HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1126
#EXTINF:0,|FR| BET HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1127
#EXTINF:0,|FR| COMEDIE+ FHD.
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1129
#EXTINF:0,|FR| COMEDIE+ HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1130
#EXTINF:0,|FR| MCM HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1128
#EXTINF:0,|FR| SYFY HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1131
#EXTINF:0,|FR| PARIS PREMIERE HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1132
#EXTINF:0,|FR| TV BREIZH FHD.
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1133
#EXTINF:0,|FR| TV BREIZH HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1134
#EXTINF:0,|FR| RTL9 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1135
#EXTINF:0,|FR| TEVA HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1136
#EXTINF:0,|FR| SERIE CLUB HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1137
#EXTINF:0,|FR| 13EME RUE HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1138
#EXTINF:0,|FR| AB1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1140
#EXTINF:0,|FR| AB1 FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1141
#EXTINF:0,|FR| AB3 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1142
#EXTINF:0,|FR| MTV FRANCE HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1139
#EXTINF:0,|FR| J ONE HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1143
#EXTINF:0,|FR| GAME ONE HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1144
#EXTINF:0,|FR| CHERIE25 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1145
#EXTINF:0,|FR| NRJ12 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1146
#EXTINF:0,|FR| RTS UN HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1147
#EXTINF:0,|FR| RTS  DEUX HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1148
#EXTINF:0,|FR| 6TER HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1149
#EXTINF:0,|FR| HD1 FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1150
#EXTINF:0,|FR| HD1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1151
#EXTINF:0,|FR| CSTAR FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1153
#EXTINF:0,|FR| CSTAR HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1154
#EXTINF:0,|FR| TOONAMI  FHD.
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1155
#EXTINF:0,|FR| TOONAMI  HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1156
#EXTINF:0,|FR| CARTOON NETWORK FHD.
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1157
#EXTINF:0,|FR| C8 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1152
#EXTINF:0,|FR| CARTOON NETWORK HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1158
#EXTINF:0,|FR| TELETOON+ HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1159
#EXTINF:0,|FR| ZOUZOU TV HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1160
#EXTINF:0,|FR| NICKELODEON JR HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1161
#EXTINF:0,|FR| NICKELODEON HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1162
#EXTINF:0,|FR| NICKELODEON 4TEEN HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1163
#EXTINF:0,|FR| DISNEY CINEMA  FHD.
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1164
#EXTINF:0,|FR| DISNEY CINEMA HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1165
#EXTINF:0,|FR| DISNEY CHANNEL  +1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1166
#EXTINF:0,|FR| DISNEY CHANNEL HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1167
#EXTINF:0,|FR| DISNEY XD FHD.
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1168
#EXTINF:0,|FR| DISNEY XD HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1169
#EXTINF:0,|FR| PIWI HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1170
#EXTINF:0,|FR| CANAL J HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1171
#EXTINF:0,|FR| BOOMERANG HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1172
#EXTINF:0,|FR| BOING HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1175
#EXTINF:0,|FR| DISNEY JUNIOR FHD.
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1176
#EXTINF:0,|FR| MANGAS HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1173
#EXTINF:0,|FR| BOING FHD.
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1174
#EXTINF:0,|FR| DISNEY JUNIOR HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1177
#EXTINF:0,|FR| TIJI HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1178
#EXTINF:0,|FR| GULLI HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1179
#EXTINF:0,|FR| WEO HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1180
#EXTINF:0,|FR| DISCOVERY FAMILY
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1181
#EXTINF:0,|FR| CRIME DISTRICT HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1182
#EXTINF:0,|FR| DISCOVERY INVESTIGATION HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1183
#EXTINF:0,|FR| DISCOVERY HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1184
#EXTINF:0,|FR| DISCOVERY SCIENCE  HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1185
#EXTINF:0,|FR| VOYAGE FHD.
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1186
#EXTINF:0,|FR| VOYAGE HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1187
#EXTINF:0,|FR| NATIONAL GEO HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1188
#EXTINF:0,|FR| NATIONAL GEO FHD.
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1189
#EXTINF:0,|FR| NATIONAL GEO WILD HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1190
#EXTINF:0,|FR| ANIMAUX HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1191
#EXTINF:0,|FR| CHASSE ET PECHE HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1192
#EXTINF:0,|FR| SEASONS HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1193
#EXTINF:0,|FR| SCIENCES & VIE HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1194
#EXTINF:0,|FR| TOUTE L HISTOIRE HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1195
#EXTINF:0,|FR| HISTOIRE HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1196
#EXTINF:0,|FR| USHUAIA TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1197
#EXTINF:0,|FR| PLANETE+ A&E FHD.
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1198
#EXTINF:0,|FR| PLANETE+ A&E HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1199
#EXTINF:0,|FR| PLANETE  CI HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1200
#EXTINF:0,|FR| PLANETE+ HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1201
#EXTINF:0,|FR| RMC DECOUVERTE FHD.
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1202
#EXTINF:0,|FR| RMC DECOUVERTE HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1203
#EXTINF:0,|FR| TREK HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1204
#EXTINF:0,|FR| CANAL PLAY 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1205
#EXTINF:0,|FR| CANAL PLAY 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1206
#EXTINF:0,|FR| CANAL PLAY 3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1207
#EXTINF:0,|FR| CANAL PLAY 4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1208
#EXTINF:0,|FR| CANAL PLAY 5
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1209
#EXTINF:0,|FR| CANAL PLAY 6
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1210
#EXTINF:0,|FR|  A LA CARTE 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1211
#EXTINF:0,|FR|  A LA CARTE 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1212
#EXTINF:0,|FR|  A LA CARTE 3
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1213
#EXTINF:0,|FR|  A LA CARTE 4
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1214
#EXTINF:0,|FR|  A LA CARTE 5
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1215
#EXTINF:0,|FR|  A LA CARTE 6
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1216
#EXTINF:0,|FR|  A LA CARTE 7
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1217
#EXTINF:0,|FR|  A LA CARTE 9
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1219
#EXTINF:0,|FR|  A LA CARTE 10
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1220
#EXTINF:0,|FR|  A LA CARTE 8
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."1218
#EXTINF:0,ES: CUATRO FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3058
#EXTINF:0,ES: Cuatro hd
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3059
#EXTINF:0,ES:  Movistar Accion HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."340
#EXTINF:0,ES: Viajar HD Dual II
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."341
#EXTINF:0,ES: Movistar  DCine HD Dual II
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."342
#EXTINF:0,ES: Movistar Cine N
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."343
#EXTINF:0,ES: Movistar GOLF HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."344
#EXTINF:0,ES: Movistar Series HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."345
#EXTINF:0,ES: MOVISTAR LIGA DE CAMPEONES HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2345
#EXTINF:0,ES: MOVISTAR Liga Campeones HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2344
#EXTINF:0,ES: HOLLYWOOD HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."346
#EXTINF:0,ES: AXN HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."347
#EXTINF:0,ES: CALLE 13 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."348
#EXTINF:0,ES: #0 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."349
#EXTINF:0,ES: Movistar F1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."350
#EXTINF:0,ES: Movistar Comedy HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."351
#EXTINF:0,ES: Movistar  Deportes 1 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."352
#EXTINF:0,ES: Movistar  Estrenos HD Dual II
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."353
#EXTINF:0,ES: Movistar Futbol HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."354
#EXTINF:0,ES: CANAL  LIGA  HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."355
#EXTINF:0,ES: Movistar  Series Xtra HD Dual II
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."356
#EXTINF:0,ES: Canal Coccina
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."357
#EXTINF:0,ES: A&E
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."358
#EXTINF:0,ES: ANTENNA 3 HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."359
#EXTINF:0,ES: MEGA HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."360
#EXTINF:0,ES: C  GOLF
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."361
#EXTINF:0,ES: CAZAYPESCA
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."362
#EXTINF:0,ES: AMC HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."363
#EXTINF:0,ES: Cosmo HD Dual II
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."364
#EXTINF:0,ES: DIVINITY Dual II
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."365
#EXTINF:0,ES: Cuatro HD Dual II
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."366
#EXTINF:0,ES: DISNEY CHANNEL
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."367
#EXTINF:0,ES: ENERGY
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."368
#EXTINF:0,ES: FDF
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."369
#EXTINF:0,ES: FOX HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."370
#EXTINF:0,ES: La Liga TV HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."371
#EXTINF:0,ES: History
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."372
#EXTINF:0,ES: LA 1
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."373
#EXTINF:0,ES: LA 2
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."374
#EXTINF:0,ES: la sexta HD_local
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."375
#EXTINF:0,ES: Movistar Toros
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."376
#EXTINF:0,ES: NATIONAL GEO WILD HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."377
#EXTINF:0,ES: NATIONAL GEOGRAPHIC CHANNEL
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."378
#EXTINF:0,ES: NEOX
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."379
#EXTINF:0,ES: REAL MADRID TV HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."380
#EXTINF:0,ES: SYFY Dual II
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."381
#EXTINF:0,ES: TELECINCO HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."382
#EXTINF:0,ES: TOROS TV
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."383
#EXTINF:0,ES:  Fox Life Dual II
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."385
#EXTINF:0,ES: Movis Star Moto Gp
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."386
#EXTINF:0,LIGA TV (ES)
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."415
#EXTINF:0,LALIGA TV BAR (ES)
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."416
#EXTINF:0,LIGA 123 HD (ES)
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."417
#EXTINF:0,LIGA CAMPEONES HD (ES)
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."418
#EXTINF:0,TR: Star TV FHD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."2117
#EXTINF:0,AR:ON time sport 3HD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3346
#EXTINF:0,AR;On sport3 SD
#EXTVLCOPT:http-user-agent=".$pass . PHP_EOL . $user ."3348
";
?>
