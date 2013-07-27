<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
define (CARRO,'Cruze');
define (ANO,'2013');
define (TABELA, 'carros');

$nome = 'Ral Oliver';
$preco = 'R$ 80.000,00';

$opcionais = array (
	'Rodas' => 'Aro 17',
	'Som' => 'MP3 Sony',
	'Outros' => 'AC, TE, Alarme'
);

echo '<h1>Modelo: '.CARRO.'</h1>';
echo '<h2>Ano: '.ANO.'</h2>';
echo '<p>Este carro pertence à: <strong>'.$nome.'</strong></p>';
echo '<p>Preço: <strong>'.$preco.'</strong></p>';
echo '<ul>';

	foreach($opcionais as $campo => $valor){
		echo '<li>';
		echo $campo.': '.$valor;
		echo '</li>';
	}

echo '</ul>';
	echo '<hr/>';
	
	$campos = implode(', ',array_keys($opcionais));
	$valores = "'".implode("', '",array_values($opcionais))."'";
	// echo $campos;
	// echo '</br>';
	// echo $valores;
	echo $cadastro = "INSERT INTO ".TABELA." (".$campos.") VALUES (".$valores.")";
?>