<? 
$get_url = isset($_GET["ch"]) && !empty($_GET["ch"]) ? $_GET["ch"] : "aso-sport";
ini_set("user_agent", "Mozilla/5.0 (Linux; Android 10; SNE-LX1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36");
function get_data($url) {
    $ch = curl_init();
    $timeout = 2;
    $referer = ($url);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 10; SNE-LX1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36");
    curl_setopt($ch, CURLOPT_REFERER, $referer);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

$link = get_data("https://ku.karwan.tv/live/".$get_url.".php");


preg_match_all('/(http.*m3u8.*")/U', $link,$matches, PREG_PATTERN_ORDER);

$stream_m3u = $matches[1][0];
$stream_m3u = str_replace('"', '', $stream_m3u);
header ("location: ".$stream_m3u) ;
?>