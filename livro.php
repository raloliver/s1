<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
	$nome = TRUE;

	if ($nome) {
		echo 'Israel'.'<hr />';
	}

	define("CLIENTES", 50);
		echo CLIENTES.'<hr />';

	$a = 2;
	$b = 4;
	echo $a+3*4+5*$b.'<br />';
	echo ($a+3)*4+(5*$b).'<hr />';

	$c = 1234;
	$d = '1234';

	if ($c === $d) {
		echo '$c e $d são iguais e do mesmo tipo'.'<hr />';
	}

	if ($c !== $d) {
		echo '$c e $d são de tipos diferentes'.'<hr />';
	}

	$e = 0;

	if ($e == FALSE) {
		echo '$e é falso'.'<br />';
	}
	if ($e === FALSE) {
		echo '$e é do tipo FALSE'.'<br />';
	}
	if ($e === 0) {
		echo '$e é zero mesmo'.'<hr />';
	}

	$vai_chover = TRUE;
	$esta_frio = TRUE;

	if ($vai_chover xor $esta_frio) {
		echo 'Vou pensar duas vezes antes de sair'.'<hr />';
	} else {
		echo 'Não vou sair de casa'.'<hr />';
	}

	$umidade = 89;
	$chuva = ($umidade > 90);

	if ($chuva) {
		echo 'Está chuvendo';
	} else {
		echo 'Caiu neve por aqui';
	}
 ?>