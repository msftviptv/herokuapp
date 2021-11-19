

<!DOCTYPE html>
<html dir="rtl">
<head>
<base target="_parent">
<meta charset="UTF-8">
<title>جدول المباريات</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'/>

<style>
    @font-face{font-family:'Changa'; src:local('BEIN'),local('bein'),url('https://cdn.staticaly.com/gh/Abdo-Hegazi/gooalhd/8f6393bf/HacenTunisiaLt.woff2') format('woff')}
/* body */
.item div#adsCenter div a {
    margin: auto !important;
}
@keyframes blinker {50% {opacity: 0}}
body{background:#e0e0e0;font-family:Changa,Segoe UI;font-size:16px;font-weight:400;text-align:right;color:#000;margin:0;padding:0}
ul {margin:0;padding:0;}
li {display: list-item;text-align: -webkit-match-parent;}
* {list-style:none;text-decoration:none;margin:0;padding:0;outline:0}
*, :before, :after {box-sizing: border-box}
a {color:#343434;}
.clear {clear:both;}
.widget {margin: 0;}
.admc,.mobile-ad,.widget-item-control,#ContactForm1,#ContactForm1 br{display:none;}
.widget li {padding: 0;}
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, abbr, acronym, address, big, cite, code, del, dfn, em, font, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {border: 0;font-family:Changa,Segoe UI;font-size: 100%;font-style: inherit;color: inherit;font-weight: inherit;margin: 0;outline: 0;padding: 0;vertical-align: baseline;}
.container {
    position: relative;
    max-width: 950px;
    margin: auto;
    width: 95%;
}
button, input, optgroup, select {font-family:Changa,Segoe UI;border:0}
img {max-width: 100%;}
/* header */
.min-side h3.title {
    display: none;
}img#Header1_headerimg {
    height: 40px;
}
header{display:block;margin-bottom:10px;position:relative;width:100%;background:#163d74 url(//i.imgur.com/nuqZtzf.jpg);}
header .logo{text-align:center;margin:auto;display:table}
header .logo h1,header .logo h2{opacity:0}
.header {display: none;overflow: hidden;padding: 15px 0 0 0;}
#logo{width: 16%;height: 55px;float: right;padding: 5px 0;}
.header h1,.header h2{display: none;}
#adgooal{float: left;width: 70%;display: none;}
#adgooal a{display: grid;}
/* main */
.main-menu{overflow:hidden;width: 100%;}
#main-menu ul li {position: relative;float: right;}
#main-menu ul li a{padding-right:15px;display:block;line-height:57px;color:#fff;height:55px;font-size: 15px;}
.navbar-left{float:left;height: 55px;}
.navbar-left li{float: right;}
.navbar-left li a{display: grid;position: relative;background-repeat: no-repeat;font-size: 25px;margin: 0;box-shadow: initial;border: 0;background: initial;padding: 15px 10px 0 0;}
.navbar-left li a img {border-radius: 50%;width: 25px;height: 25px;}
#main-menu{float:right}
div#header-inner {
    height: 45px;
    display: table-cell;
    vertical-align: middle;
    overflow: hidden;
}
.navbar-left li a:before {
    content: "";
    display: block;
    overflow: hidden;
    font-family: FontAwesome;
    font-size: 20px;
    font-weight: normal;
    color: #fff;
    margin: 5px 5px 0;
}

.navbar-left li a.facebook:before {
    content: "\f09a";
}
.navbar-left li a.youtube:before {
    content: "\f167";
}
.navbar-left li a.telegram:before {
    content: "\f2c6";
}
.Thumb span,a.related-img,.FeaturedPost span{
    width: 100%;
    height: 100%;
    -webkit-background-size: cover!important;
    background-size: cover!important;
    background-position: center center!important;
    display: block;
}
  @font-face {
    font-family: 'Changa';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/changa/v8/2-c79JNi2YuVOUcOarRPgnNGooxCZ62xcjLj9ytf.woff2) format('woff2');
    unicode-range: U+0600-06FF, U+200C-200E, U+2010-2011, U+204F, U+2E41, U+FB50-FDFF, U+FE80-FEFC
  }

  a,
  abbr,
  acronym,
  address,
  applet,
  b,
  big,
  blockquote,
  body,
  caption,
  center,
  cite,
  code,
  dd,
  del,
  dfn,
  div,
  dl,
  dt,
  em,
  fieldset,
  font,
  form,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  html,
  i,
  iframe,
  img,
  ins,
  kbd,
  label,
  legend,
  li,
  object,
  p,
  pre,
  q,
  s,
  samp,
  small,
  span,
  strike,
  strong,
  sub,
  sup,
  table,
  tbody,
  td,
  tfoot,
  th,
  thead,
  tr,
  tt,
  u,
  ul,
  var {
    padding: 0;
    border: 0;
    outline: 0;
    vertical-align: baseline;
    background: 0 0
  }

  *,
  ::before,
  ::after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
  }

  * {
    margin: 0;
    padding: 0;
    outline: 0
  }

  body {
    font-size: 14px;
    line-height: 1.42857143;
    color: rgb(0, 0, 0);
    background-color: rgb(255, 255, 255);
    font-family: 'Changa';
    margin: 0;
    padding: 0
  }

  img {
    max-width: 100%;
    vertical-align: middle;
    border: 0
  }

  /*======================================C. TABLE=====================================*/
  .alba-live-table {
    width: 100%;
    position: relative;
    z-index: 1;
    overflow: hidden;
    padding: 0;
    max-width: 1010px;
    background: rgba(255, 255, 255, 1) 0% 0% no-repeat padding-box;
    box-shadow: 0 30px 50px rgba(0, 0, 0, 0.16);
    border-radius: 0 0 7px 7px;
    margin: 0 auto;
    clear: both
  }

  .table-title {
    background: #000000;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between
  }

  .table-title .title {
    color: #fff;
    font: Bold 19px/34px Changa;
    flex: 1;
    width: 32%;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center
  }

  a {
    text-decoration: none
  }

  .table-title .title select {
    height: 30px;
    min-width: 145px;
    padding-right: 10px;
    color: rgba(120, 120, 120, 1);
    font-size: 0.7em;
    -webkit-border-radius: 80px;
    -moz-border-radius: 80px;
    -ms-border-radius: 80px;
    -o-border-radius: 80px;
    border-radius: 80px;
    background: #ffffff;
    font-family: Changa
  }

  .table-title .title svg {
    width: 18px;
    margin-left: 6px
  }

  .tab.filter-days {
    display: flex;
    justify-content: center;
    position: relative;
    background: #000000;
    margin-bottom: 15px
  }

  .tablinks {
    text-align: center;
    background: transparent;
    padding: 0 10px;
    font-size: 1rem;
    line-height: 20px;
    border-radius: 3px;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    height: 55px;
    display: flex;
    border: 0;
    font-weight: 700;
    color: #fff;
    font-family: 'Changa';
    width: 32%;
    position: relative
  }

  .tablinks.active {
    background: #4f4f4f
  }

  .tablinks.active:before {
    content: "";
    float: right;
    position: absolute;
    top: 0;
    right: 0;
    width: 0;
    height: 0;
    border-color: transparent #383838 transparent transparent;
    border-style: solid;
    border-width: 27.5px 18px 27.5px 0
  }

  .tablinks.active:after {
    content: "";
    float: left;
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 0;
    border-color: transparent transparent transparent #383838;
    border-style: solid;
    border-width: 27.5px 0 27.5px 18px
  }

  .tablinks svg {
    width: 22px;
    margin-left: 6px
  }

  .new-league-head {
    float: right;
    width: 100%;
    margin: 0;
    padding: 0;
    text-align: center
  }

  .new-league-head .title-aria {
    width: 195px;
    margin: 0 auto;
    text-align: center;
    z-index: 99;
    padding-top: 5px;
    background: rgb(219, 219, 219);
    border-radius: 17px 17px 0 0;
    position: relative;
    bottom: 0;
    padding-bottom: 0;
    height: 34px;
    display: inline-flex;
    align-items: center
  }

  .new-league-head .title-aria::before {
    content: "";
    position: absolute;
    right: -10px;
    height: 34px;
    top: 0;
    width: 23px;
    transform: skew(22deg);
    background: #ddd;
    border-radius: 0 14px 0 0
  }

  .new-league-head .title-aria::after {
    content: "";
    position: absolute;
    left: -10px;
    height: 34px;
    top: 0;
    width: 23px;
    transform: skew(-22deg);
    background: #ddd;
    border-radius: 14px 0 0 0
  }

  .new-league-head .title-imag {
    margin: 0 auto;
    display: table;
    text-align: center
  }

  .league-title {
    text-align: center;
    color: #000;
    font-size: 13px;
    background: rgb(237, 237, 237);
    padding: 2px;
    border-top: solid 2px #383838;
    border-radius: 12px 12px 0 0;
    position: relative;
    z-index: 2222;
    height: 28px;
    width: 175px;
    display: flex;
    justify-content: center;
    align-items: center
  }

  .league-title::before {
    content: "";
    position: absolute;
    right: -10px;
    height: 28px;
    top: -2px;
    width: 18px;
    transform: skew(22deg);
    background: rgb(237, 237, 237);
    border-radius: 0 8px 0 0;
    border-top: solid 2px #383838;
    z-index: 1
  }

  .league-title::after {
    content: "";
    position: absolute;
    left: -10px;
    height: 28px;
    top: -2px;
    width: 18px;
    transform: skew(-22deg);
    background: rgb(237, 237, 237);
    border-radius: 8px 0 0 0;
    border-top: solid 2px #383838
  }

  .tabcontent {
    display: none
  }

  #today {
    display: block
  }

  .alba_sports_events-event_item {
    text-align: center;
    width: 100%;
    display: block;
    overflow: hidden;
    margin: 0 auto;
    position: relative;
    padding: 0 40px 10px
  }

  .live,
  .comming-soon,
  .ended {
    display: inline-block;
    width: 68px;
    position: relative;
    border-radius: 50px;
    font-size: 12px;
    height: 23px;
    line-height: 22px
  }

  .live {
    background: rgba(227, 5, 34, 1)
  }

  .comming-soon {
    background: #00af00
  }

  .ended {
    background: #000000
  }

  .event_inner {
    margin: 0;
    width: 100%;
    float: right;
    padding: 6px 20px;
    position: relative;
    background: #736f6f;
    height: 52px;
  }

  .event_inner::before {
    content: "";
    background: rgba(255, 255, 255, 0.12);
    position: absolute;
    top: 0;
    height: 100%;
    width: 35px;
    transform: skewX(44deg);
    right: 47%;
    z-index: 0;
  }

  .event_inner::after {
    content: "";
    background: rgba(255, 255, 255, 0.12);
    position: absolute;
    top: 0;
    height: 100%;
    width: 18px;
    transform: skewX(44deg);
    right: 52%;
    z-index: 0;
  }

  .team-aria {
    position: relative;
    float: right;
    width: calc(50% - 110px);
    display: block;
    text-align: center;
    height: 40px;
    z-index: 22;
    color: rgb(119, 119, 119);
    background: #000000;
  }

  .team-aria::before {
    content: "";
    background: rgba(255, 255, 255, 0.08);
    position: absolute;
    top: 0;
    height: 100%;
    width: 27px;
    transform: skewX(13deg);
    z-index: 11;
    right: 34%;
  }

  .team-aria::after {
    content: "";
    background: rgba(255, 255, 255, 0.08);
    position: absolute;
    top: 0;
    height: 100%;
    width: 15px;
    transform: skewX(13deg);
    z-index: 11;
    right: 45%;
  }

  .team-first::before,
  .team-first::after {
    transform: skewX(60deg);
  }

  .team-first {
    transform: skew(-45deg);
    border-left: 4px solid #fff;
    border-top: 3px solid #fff;
  }

  .team-second {
    transform: skew(45deg);
    border-right: 4px solid #fff;
    border-top: 3px solid #fff;
  }

  .width {
    width: 220px;
    display: table;
    float: right;
    color: rgb(255, 255, 255);
    position: relative;
    font: Bold 30px/40px Changa;
  }

  .width span {
    display: table-cell;
    vertical-align: middle;
  }

  .alba-team_logo {
    display: flex;
    width: 75px;
    height: 75px;
    border-radius: 50%;
    background: #fff;
    align-items: center;
    justify-content: center;
    margin-top: -21px;
    border: solid 2px #122c48;
    box-shadow: 0px 3px 70px #00000061;
  }

  .team-first .alba-team_logo {
    float: right;
    margin-right: -35px;
    transform: skew(45deg);
  }

  .team-second .alba-team_logo {
    float: left;
    margin-left: -35px;
    transform: skew(-45deg);
  }

  .team-first .alba_sports_events-team_title {
    transform: skew(45deg);
  }

  .team-second .alba_sports_events-team_title {
    transform: skew(-45deg);
  }

  .alba-team_logo img {
    display: block;
    margin: 0 auto;
    max-height: 55px;
    width: auto;
  }

  .alba_sports_events-team_title {
    font-size: 16px;
    color: #fff;
    font-weight: 700;
    margin-top: 6px;
    text-align: center;
    display: inline-block;
  }

  .events-info-aria {
    position: relative;
    width: 62%;
    margin: 0 auto;
    clear: both;
    height: 52px;
    padding: 0 7px;
    border-radius: 0 0 25px 25px;
    text-align: center;
    filter: drop-shadow(0px 2px 1px rgba(0, 0, 0, 0.28));
  }

  .events-info-aria::before {
    content: "";
    position: absolute;
    right: -4px;
    height: 44px;
    top: 0px;
    width: 22px;
    transform: skew(-20deg);
    border-radius: 0px 0px 8px;
    z-index: -1;
  }

  .events-info-aria:after {
    content: "";
    position: absolute;
    left: -4px;
    height: 44px;
    top: 0px;
    width: 22px;
    transform: skew(20deg);
    border-radius: 0px 0px 0px 8px;
    z-index: -1;
  }

  .events-info-aria,
  .events-info-aria::before,
  .events-info-aria:after {
    background: #ddd;
  }

  .events-info {
    width: 100%;
    margin: 0 auto;
    color: rgb(0, 0, 0);
    font-size: 12.5px;
    height: 34px;
    display: inline-flex;
    position: relative;
    border-radius: 20px;
  }

  .events-info::before {
    content: "";
    position: absolute;
    right: -4px;
    height: 34px;
    top: 0px;
    width: 22px;
    transform: skew(-20deg);
    border-radius: 0px 0px 8px;
  }

  .events-info:after {
    content: "";
    position: absolute;
    left: -4px;
    height: 34px;
    top: 0px;
    width: 22px;
    transform: skew(20deg);
    border-radius: 0px 0px 0px 8px;
  }

  .events-info span {
    padding: 0 10px;
    float: right;
    width: 33.33333333%;
    color: #383838;
    font-weight: 700;
    line-height: 30px;
    flex: 1;
    background: #ededed;
    height: 30px;
    z-index: 1;
  }

  .event_time.match_date_time {
    width: 136px;
    max-width: 170px;
    position: relative;
    z-index: 2;
    color: #fff;
    font-size: 14px;
  }

  .event_chanel {
    transform: skew(22deg);
    border-radius: 0px 0px 0px 8px;
  }

  .event_chanel p {
    transform: skew(-22deg);
  }

  .event_time.match_date_time::before {
    content: "";
    position: absolute;
    right: -24px;
    height: 30px;
    top: 0px;
    width: 35px;
    transform: skew(-20deg);
    border-radius: 0px 0px 8px;
    border-right: solid 3px rgb(56, 56, 56);
  }

  .event_time::after {
    content: "";
    position: absolute;
    left: -24px;
    height: 30px;
    top: 0px;
    width: 35px;
    transform: skew(20deg);
    border-radius: 0px 0px 0px 8px;
    border-left: solid 3px rgb(56, 56, 56);
  }

  .event_time.match_date_time,
  .event_time::after,
  .event_time::before {
    background: rgb(112, 110, 110);
  }

  .event_commenter {
    transform: skew(-22deg);
    border-radius: 0px 0px 8px;
  }

  .event_commenter p {
    transform: skew(22deg);
  }

  .events-info span p {
    padding: 0;
    margin: 0;
  }

  .events-info,
  .events-info:before,
  .events-info:after {
    background: rgb(56, 56, 56);
  }

  .event_chanel p::before,
  .event_commenter p::before {
    content: "";
    display: inline-block;
    width: 18px;
    height: 18px;
    background-size: 17px;
    background-repeat: no-repeat;
    position: relative;
    top: 5px;
    left: 5px;
  }

  .event_chanel p::before {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='25.043' height='25.253' viewBox='0 0 25.043 25.253'%3E%3Cdefs%3E%3Cstyle%3E.a%7Bfill:%23122c48;%7D%3C/style%3E%3C/defs%3E%3Cpath class='a' d='M25.151,4.119H17.27a3.169,3.169,0,0,0-.385-1.092L23.464.965a.494.494,0,1,0-.3-.942L16.208,2.2a3.184,3.184,0,0,0-4.185,0L5.062.022a.494.494,0,1,0-.3.942l6.579,2.061a3.169,3.169,0,0,0-.385,1.092H3.08A1.488,1.488,0,0,0,1.594,5.6V22.318A1.488,1.488,0,0,0,3.08,23.8h.238v.955a.494.494,0,1,0,.988,0V23.8H23.925v.955a.494.494,0,1,0,.988,0V23.8h.238a1.488,1.488,0,0,0,1.486-1.486V5.6A1.487,1.487,0,0,0,25.151,4.119ZM14.115,2.407a2.209,2.209,0,0,1,2.149,1.712h-4.3A2.209,2.209,0,0,1,14.115,2.407ZM25.649,22.318a.5.5,0,0,1-.5.5H3.08a.5.5,0,0,1-.5-.5V5.6a.5.5,0,0,1,.5-.5H25.151a.5.5,0,0,1,.5.5V22.318Z' transform='translate(-1.594 0)'/%3E%3Cpath class='a' d='M48.679,92.083a.494.494,0,0,0-.445-.409,116.917,116.917,0,0,0-19.544,0,.494.494,0,0,0-.445.409,40.821,40.821,0,0,0,0,13.809.494.494,0,0,0,.445.409c3.242.273,6.507.409,9.772.409s6.53-.136,9.772-.409a.494.494,0,0,0,.445-.409A40.821,40.821,0,0,0,48.679,92.083Zm-.911,13.266a115.952,115.952,0,0,1-18.613,0,39.826,39.826,0,0,1,0-12.722,115.952,115.952,0,0,1,18.613,0A39.83,39.83,0,0,1,47.768,105.349Z' transform='translate(-25.94 -85.257)'/%3E%3Cpath class='a' d='M313.478,168.679a.494.494,0,0,0-.466.52,38.2,38.2,0,0,1-.069,5.219.494.494,0,0,0,.452.532l.041,0a.494.494,0,0,0,.492-.453,39.187,39.187,0,0,0,.071-5.354A.493.493,0,0,0,313.478,168.679Z' transform='translate(-292.443 -157.573)'/%3E%3Cpath class='a' d='M310.183,124.26l.048,0a.494.494,0,0,0,.444-.539c-.049-.506-.109-1.019-.178-1.525a.494.494,0,0,0-.978.133c.067.493.125.993.173,1.487A.494.494,0,0,0,310.183,124.26Z' transform='translate(-289.242 -113.75)'/%3E%3Cpath class='a' d='M346.734,324.685a.494.494,0,1,0,.19.577A.5.5,0,0,0,346.734,324.685Z' transform='translate(-323.293 -303.233)'/%3E%3C/svg%3E");
  }

  .event_commenter p::before {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16.319' height='20.266' viewBox='0 0 12.319 30.266'%3E%3Cdefs%3E%3Cstyle%3E.a%7Bfill:%23122c48;%7D%3C/style%3E%3C/defs%3E%3Cpath class='a' d='M167.557,21.312a5.563,5.563,0,0,0,5.557-5.557V5.557a5.557,5.557,0,1,0-11.113,0v10.2A5.563,5.563,0,0,0,167.557,21.312Zm0-20.13a4.379,4.379,0,0,1,4.374,4.374v4.885h-8.749V5.557A4.379,4.379,0,0,1,167.557,1.182Zm-4.374,10.442h8.749v4.131a4.374,4.374,0,1,1-8.749,0Zm0,0' transform='translate(-159.397)'/%3E%3Cpath class='a' d='M222.259,112.5h2.877a.591.591,0,0,0,0-1.182h-2.877a.591.591,0,0,0,0,1.182Zm0,0' transform='translate(-215.538 -104.733)'/%3E%3Cpath class='a' d='M222.259,75.225h2.877a.591.591,0,0,0,0-1.182h-2.877a.591.591,0,0,0,0,1.182Zm0,0' transform='translate(-215.538 -69.666)'/%3E%3Cpath class='a' d='M133.7,256.531a.591.591,0,0,0-.591.591,6.977,6.977,0,0,1-13.955,0,.591.591,0,1,0-1.182,0,8.174,8.174,0,0,0,6.417,7.972v2.988h-.046a2.963,2.963,0,0,0-2.959,2.959.591.591,0,0,0,.591.591h8.315a.591.591,0,0,0,.591-.591,2.963,2.963,0,0,0-2.959-2.959h-.046v-2.988a8.173,8.173,0,0,0,6.417-7.972.591.591,0,0,0-.591-.591Zm-4.1,13.92h-6.931a1.78,1.78,0,0,1,1.676-1.186h3.579A1.78,1.78,0,0,1,129.594,270.451Zm-2.9-2.368h-1.121v-2.82c.185.013.372.02.561.02s.375-.007.561-.02Zm0,0' transform='translate(-117.969 -241.366)'/%3E%3Cpath class='a' d='M246.591,260.194a3.076,3.076,0,0,0,3.072-3.072.591.591,0,1,0-1.182,0,1.892,1.892,0,0,1-1.89,1.89.591.591,0,0,0,0,1.182Zm0,0' transform='translate(-238.432 -241.367)'/%3E%3Cpath class='a' d='M288.56,223.182a.592.592,0,1,0-.418-.173A.6.6,0,0,0,288.56,223.182Zm0,0' transform='translate(-277.92 -208.877)'/%3E%3C/svg%3E");
  }

  .alba_sports_events-event_mask {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: none;
    z-index: 9999;
  }

  .event_mask_inner {
    justify-content: center;
    align-items: center;
    height: 100%;
    background: rgba(140, 150, 156, 0.6);
    display: flex;
    width: calc(100% - 10px);
    margin: 0 auto;
    border-radius: 5px;
  }

  .alba_sports_events-event_mask_inner_text {
    margin-top: 0 !important;
    background: linear-gradient(to bottom, RGB(0, 0, 0) 0%, rgb(124,124,124) 100%);
    color: rgb(255, 255, 255) !important;
    padding: 5px 30px;
    font-size: 14px !important;
    line-height: 22px;
    text-decoration: none;
    z-index: 555;
  }

  .alba_sports_events-event_item:hover .alba_sports_events-event_mask {
    display: block;
  }

  /*========================*/
  @media screen and (max-width:769px) {
    .alba_sports_events-team_title {
      font-size: 12px;
      letter-spacing: -.5px;
    }

    .table-title .title {
      justify-content: flex-end;
      padding-left: 7px;
    }

    .table-title .h2.title {
      color: #fff;
      font: Bold 16px/30px Changa;
      justify-content: flex-start;
      padding: 5px;
    }

    .tablinks {
      padding: 0 5px;
      font-size: .8rem;
      height: 40px;
      width: 33%;
      position: relative;
      letter-spacing: -.5px;
    }

    .tablinks.active:before {
      border-width: 20px 8px 20px 0;
    }

    .tablinks.active:after {
      border-width: 20px 0px 20px 8px;
    }

    .tablinks svg {
      width: 14px;
      margin-left: 4px;
    }

    .event_inner {
      padding: 3px 0px;
      height: 41px;
    }

    .width {
      width: 130px;
    }

    .team-aria {
      width: calc(50% - 65px);
      height: 35px;
    }

    .alba-team_logo {
      width: 60px;
      height: 60px;
      margin-top: -16px;
    }

    .alba-team_logo img {
      max-height: 45px;
    }

    .events-info-aria {
      width: 70%;
      height: 45px;
    }

    .event_time.match_date_time {
      width: 95px;
      max-width: 95px;
      padding: 0 0px;
      border-radius: 0 0 15px 15px;
    }

    .event_time.match_date_time::before {
      right: -1px;
      top: 0px;
      width: 8px;
      z-index: -1;
    }

    .event_time::after {
      left: -1px;
      z-index: -1;
      width: 8px;
    }
  }

  @media screen and (max-width:600px) {
    .event_time.match_date_time p {
      padding: 0;
      color: #fff;
      height: 17px;
      line-height: 16px !important;
      display: block;
      margin: -7px auto;
    }

    .event_time.match_date_time p.style.colorDefinition.size_sm {
      color: RGB(18, 44, 72);
      margin-top: 3px;
    }

    .table-title {
      height: 35px;
    }

    .alba_sports_events-event_item {
      padding: 5px 5px 10px;
    }

    .new-league-head .title-aria,
    .league-title {
      width: 152px;
      height: 22px;
      padding: 0;
      font-size: 11px;
      letter-spacing: -.5px;
    }

    .league-title::before {
      right: -5px;
      height: 22px;
      width: 12px;
    }

    .league-title::after {
      left: -5px;
      height: 22px;
      width: 12px;
    }

    .new-league-head .title-aria::after,
    .new-league-head .title-aria::before,
    .event_commenter,
    .event_time.match_date_time::before,
    .event_time.match_date_time::after,
    .table-title h2.title {
      display: none;
    }

    .team-aria {
      width: calc(50% - 50px);
      border-radius: 6px;
    }

    .team-first .alba-team_logo {
      margin-right: 0px;
      right: 4px;
    }

    .team-second .alba-team_logo {
      margin-left: 0;
      left: 4px;
    }

    .team-first,
    .team-second .alba-team_logo,
    .team-second .alba_sports_events-team_title {
      transform: skew(-20deg);
    }

    .team-first {
      border-left: 3px solid #fff;
      border-top: 2px solid #fff;
    }

    .team-second,
    .team-first .alba-team_logo,
    .team-first .alba_sports_events-team_title {
      transform: skew(20deg);
    }

    .team-second {
      border-right: 3px solid #fff;
      border-top: 2px solid #fff;
    }

    .width {
      width: 100px;
      font-size: 25px;
    }

    .alba-team_logo {
      width: 40px;
      height: 40px;
      margin-top: -30px;
      position: absolute;
      top: 0;
    }

    .events-info-aria {
      width: 75%;
      height: auto;
      padding: 0 0 2px;
    }

    .event_time.match_date_time {
      color: #122C48;
      background: #ededed;
      transform: skew(-22deg);
      border-radius: 10px 0px 10px 0px !important;
    }

    .event_time.match_date_time p {
      transform: skew(22deg);
      top: 2px;
      position: relative;
      line-height: 22px;
    }

    .event_chanel {
      border-radius: 0px 10px 0px 10px;
    }

    .events-info-aria::before,
    .events-info-aria::after {
      height: 100%;
    }

    .events-info span,
    .event_time.match_date_time::before,
    .event_time.match_date_time::after {
      padding: 0 2px;
      font-weight: 100;
      line-height: 20px;
      font-size: 11px;
      height: 24px;
    }

    .events-info,
    .events-info::before,
    .events-info::after {
      height: 27px;
    }

    .alba-team_logo img {
      max-height: 34px;
    }

    .events-info {
      justify-content: space-around;
    }

    .events-info span,
    .event_time.match_date_time {
      width: 48%;
      max-width: 48%;
    }

    .live {
      height: 17px;
      line-height: 16px !important;
      color: #fff;
      padding: 0 8px !important;
      width: auto;
      font-weight: 700;
      font-size: 11px;
    }

    .event_chanel p::before,
    .event_commenter p::before {
      width: 15px;
      height: 16px;
      background-size: 14px;
    }
  }

  .non-mauch {
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: rgb(240, 242, 245);
    color: rgb(180, 180, 180);
    margin: 15px auto 20px;
  }

</style>




</head>
<body>




<div id="today" class="tabcontent">
  <?php




$file = file_get_contents('https://www.filgoal.com/matches/ajaxlist?date='.gmdate("Y/m/d") );
$json = json_decode($file);





foreach ($json as &$value ) {
    $Slug = $value->Slug;
    $HomeTeamName = $value->HomeTeamName;
    $AwayTeamName = $value->AwayTeamName;
    $HomeTeamLogoUrl = $value->HomeTeamLogoUrl;
    $AwayTeamLogoUrl = $value->AwayTeamLogoUrl;
    $StadiumName = $value->StadiumName;      
    $HomeScore = $value->HomeScore;      
    $AwayScore = $value->AwayScore;
    $Date = $value->Date;        
    $waqt = $value->MatchStatusHistory;
    $score = $AwayScore.'-'.$HomeScore;
    $ChampionshipName = $value->ChampionshipName;
    $TvCoverage = $value->TvCoverage;

     foreach ($TvCoverage as &$value ) {

        $TvChannelName = $value->TvChannelName;
        $CommenterName = $value->CommenterName;
        $TvChannelId = $value->TvChannelId;
        
    foreach ($waqt as &$value ) {
        $StartAt = $value->StartAt;
        $MatchStatusName = $value->MatchStatusName;
        
         $timestamp = preg_replace( '/[^0-9]/', '', $Date);
      $dt = $timestamp /1000;
      $timez =  date(" H:i",  strtotime($dt . " +1 hours"));
      $time = gmdate(" h:i a", strtotime('+2 hours', $dt));
    
      
$intime = gmdate("Y/m/d H:i");
 $timestart =  gmdate("Y/m/d H:i", $dt);
 $timeend =  gmdate("Y/m/d H:i", strtotime('+2 hours', $dt));


     
echo'<div class="alba_sports_events-event_item"  rel="'.$timestart.'">
  <a href="http://livemsftv.blogspot.com/p/'.$TvChannelId.'.html" title="'.$Slug.'">
    <div class="new-league-head">
    <div class="title-aria">
    <div class="title-imag">
    <h6 class="league-title">'.$ChampionshipName.'</h6>
    </div>
    </div>
    </div>
    <div class="alba_sports_events-event_mask">
    <div class="event_mask_inner">
    <div class="h3 alba_sports_events-event_mask_inner_text gray">'.$MatchStatusName.'</div></div>
    </div>
    <div class="event_inner">
    <div class="team-aria team-first">
    <div class="alba-team_logo"><img alt="الاتحاد السعودي " src="'."https:".$HomeTeamLogoUrl.'" /></div>
    <div class="alba_sports_events-team_title">'.$HomeTeamName.'</div>
    </div>
    <div class="width "><p>'.($timestart > $intime ? $time : $score).
    '</p> </div>
    <div class="team-aria team-second">
    <div class="alba-team_logo"><img alt="الشباب" src="'."https:".$AwayTeamLogoUrl.'" /></div>
    <div class="h2 alba_sports_events-team_title">'.$AwayTeamName.'</div>
    </div>
    </div>
    <div class="events-info-aria">
    <div class="events-info">
    <span class="event_commenter"><p>'.$CommenterName.'</p></span>
    <span class="event_time match_date_time"><p id="gmDate5000" class="date stay" data-start="'.$timestart.'" data-gameends="'.$timeend.'"></p>'.($timeend > $intime ? $time : $MatchStatusName).'</span>
    <span class="event_chanel"><p>'.$TvChannelName.'</p></span>
    </div>
    </div>
  </a>
</div>';
    };
    };
    
    
};
?>


</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



</body>
</html>
