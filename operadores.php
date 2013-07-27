<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
$a = '10';
$b = '10';

echo $a + $b.'<br />';
echo $a - $b.'<br />';
echo $a * $b.'<br />';
echo $a / $b.'<br />';
echo $a % $b.'<hr />';

$ano = '1985';
$atual = date('Y');

echo 'Israel tem '.($atual - $ano).' anos de idade'.'<hr />';

$valor = '100';
echo '25% de '.$valor.' é '.($valor / 100) * 25 .'<hr />';

$preco = '17507.50';
echo number_format($preco,'2',',','.');
?>