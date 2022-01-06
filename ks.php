<?php
$url ='https://anacondaapp.herokuapp.com/kc.php';
$content = file_get_contents($url);
$first_step = explode( 's8529073_url=' , $content );
$second_step = explode("19][" , $first_step[1] );
$user= $second_step[0];
$thired_step = explode( 's8529073_ua=' , $content );
$forth_step = explode("][" , $thired_step[1] );
$pass= $forth_step[0];

echo $user."</br>".$pass;
//header('Location: '.$link);
?>
