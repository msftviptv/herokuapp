<!DOCTYPE html><html lang="en"><head><meta charset="utf-8">
<title>bein1 live </title><style type="text/css">
html,body {height:100%; width:100%; padding:0; margin:0; }
iframe {height:100%;width:100%; padding:0; margin:0;position:fixed;}</style>
<iframe  id="ap" src=""  allowtransparency="true" frameborder="0" width="100%"  height="100%"></iframe>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
var url="https://jsonp.afeld.me/?url=https://www.janjua.tv/membedplayer/bnw_111111111111111/1/1280/595";
$.ajax({url: "https://tvportremote.com/loadbalancer?100116",
success:function(data) {ea = data.split('=')[1];}
});
$.get(url,
function(e)
{p=e.split('var hlsUrl = "https://" + ea + "')[1],
url=p.split('";')[0],
src=JSON.parse('{ "l":"'+url+'"}'),
x=e.split('enableVideo("')[1],
id=x.split('");')[0],
pk=JSON.parse('{ "l":"'+id+'"}'),
document.getElementById("ap");
var str = (pk.l);
var result = str.slice(-73,3); 
var res = str.slice(4);
ap.src = "http://www.html-editor.tk/hls/api-hls.html?src=" + ('https://'+ea+src.l+result+res);
});
</script> </body></html>