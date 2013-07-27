<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
$texto_um 	= "primeira string 1";
$texto_dois = "segunda string 2";
$letras_iguais = similar_text($texto_um, $texto_dois);

//echo $letras_iguais.'<hr />';

$countUm = strlen($texto_um);
$countDois = strlen($texto_dois);
$todas_as_letras = $countUm + $countDois;
//echo $countUm + $countDois;

echo 'as strings tem '.$letras_iguais.' char iguais e '.$todas_as_letras.' letras no total'.'<hr />';
echo 'sendo que o texto um tem '.$countUm.' chars e o texto dois tem '.$countDois.'<hr />';

$cpf = '00022233345';
$cpf = substr($cpf,0,3).'.'.substr($cpf,3,3).'.'.substr($cpf,6,3).'-'.substr($cpf,9,3);
echo $cpf.'<hr />';

$cpf = '000.222.333-45';
$cpf = str_replace('.', '', $cpf);
$cpf = str_replace('-', '', $cpf);

echo $cpf;

?>