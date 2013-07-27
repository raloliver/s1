<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
$stringAll = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
<a href="#">tempor</a> incididunt ut labore et dolore magna aliqua. <a href="#">Ut enim ad minim veniam</a>,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure <strong>dolor in reprehenderit </strong> in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia <em>deserunt mollit anim id est laborum.</em>';

echo $stringAll.'<hr />';

//eliminar html
$strip = strip_tags($stringAll);
echo $strip.'<hr />';

$count = strlen($stringAll);
echo $count.'<hr />';

$length = '140';
$corte = substr($strip,0,$length);
echo $corte.' [...]<hr />';

$pos = strrpos($corte, ' ');
echo $pos.'<hr />';

$final = substr($strip,0,$pos);

echo $final.' <a href="" title=""> leia mais...</a>';


?>

