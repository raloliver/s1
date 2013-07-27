<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
// string é uma variável que retorna textos
$texto = 'Hora de aprender PHP!';
echo $texto.'<hr />';

echo strtolower($texto).'<hr />'; //letras minúsculas
echo strtoupper($texto).'<hr />'; //letras maiúsculas
echo ucfirst($texto).'<hr />'; //primeia maiúscula
echo ucwords($texto).'<hr />'; //primeira palavra maiúscula

$string = "Olá. Preciso de um novo site, \n pode me ajudar?";
echo nl2br($string).'<hr />';

$script = "Olá. <?php echo 'Tudo bem?'; ?>";
echo htmlspecialchars ($script).'<br />';
echo htmlentities ($script).'<hr />';

$metas = get_meta_tags ('http://www.raloliver.com/tableless/index.php');
echo '<pre>';
print_r($metas);
echo '</pre>';

$resumo = 'Visite o site do nosso <a href="#">parceiro.</a>';
echo strip_tags($resumo).'<hr />';

$base = 'http://www.joomtus.com.br/';
$link = urlencode('phpprogramação');
echo $base.$link.'<br />';
echo $base.urldecode($link).'<hr />';
?>

