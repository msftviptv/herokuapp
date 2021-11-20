<?php
$url ='https://anacondaapp.herokuapp.com/kc.php';
$content = file_get_contents($url);
$first_step = explode( 's9543724_url=' , $content );
$second_step = explode("450.ts" , $first_step[1] );

$user= $second_step[0];

$link = $user.$_GET['s'];
header('Location: '.$link.'.ts');
?>