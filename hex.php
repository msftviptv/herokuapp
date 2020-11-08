<?php
$url ='https://youdbox.com/embed-'.$_GET['s'].".html";
$content = file_get_contents($url);
$first_step = explode( '<script>
	(function() {var urK4sa = [' , $content );
$second_step = explode(']
' , $first_step[1] );

$user= $second_step[0];

$link = $user;
//header('Location: '.$link);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<textarea style="width:100%;height:80%" id="out">
</textarea>

</body>
</html>
<?php

$abc = '<script>
(function() {var urK4sa = ['.$link.'];
document.getElementById("out").outerText=vatiable
=urK4sa.reverse().join("");})();

</script>';
echo $abc;
?>
