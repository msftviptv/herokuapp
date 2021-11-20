<?php
$url ='https://anacondaapp.herokuapp.com/egy.php';
$content = file_get_contents($url);
$first_step = explode( 's1048249_url=' , $content );
$second_step = explode("218]" , $first_step[1] );

$user= $second_step[0];

$link = $user.$_GET['s'];
header('Location: '.$link);
?>