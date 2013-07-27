<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
	//ISSET verifica se existe a variável - IGNORA o CONTEÚDO
	//EMPTY verifica se não existe a variável - VERIFICA o CONTEÚDO
	$a = '6';
	$b = '';
	echo '<hr/>';
		if (isset($a)) {
			echo 'Existe A'.'<hr/>';
		}
		if (!isset($a)) {
			echo 'Não existe A';
		}
		if (!empty($b)) {
			echo 'B existe e está preenchida';
		}
		if (empty($b)) {
			echo 'B Não existe ou está sem valor';
		}
		

	echo '<hr/>';
	echo '<hr/>';
		if (isset($a) && $a > 5) {
			echo 'Existe A e é maior que 5';
		}
		if (!isset($a)) {
			echo 'Não existe A';
		}
	echo '<hr/>';
		if (isset($a)) {
			echo 'Existe A';
		}
		if (!isset($a)) {
			echo 'Não existe A';
		}
	echo '<hr/>';
		if (isset($a)) {
			echo 'Existe A';
		}else{
			echo 'Não existe A';
		}
 ?>

