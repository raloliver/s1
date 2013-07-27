<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
	//for ('DEFINICAO'=0; 'CONDICAO' < ; 'COMANDO'++) { 
	//	'COMANDO'
	//}

		//MODELO DE COMANDO PARA TRAVAR PHP E DIE PARA FINALIZAR PHP
		for ($i=1; ; $i++) { 
			echo $i;
			if ($i < 15) {
				echo ', ';
			}if ($i < 15) {
				continue;
			} else {
				break;
			}
			
		}

		echo '<br />Olá mundo!';

			
		echo '<hr />';

		//MODELO DE EXIBICAO DE CONTEUDO EM ARRAYS USANDO FOR E COUNT
		$teste [] = 'Israel';
		$teste [] = 'CEO';
		$teste [] = 'ROWS';

		$contador = count($teste);

		for ($a=0; $a < $contador; $a++) { 
			echo $teste[$a].'<br />';
		}

			
		echo '<hr />';

		//MODELO DE REPETICAO PARA NUMEROS PARA E IMPAR COM APLICACAO DE COR
		for ($ac=1; $ac <= 9; $ac++) {
			if ($ac%3==0) {	
				$color = '#105966';
			}else{
				$color = '#a3613b';
			}
				echo '<p style="color:'.$color.'">TestColor</p>';
			}
			
		echo '<hr />';

		//MODELO DE REPETICAO PARA NUMEROS PAR E IMPAR COM DESTAQUE
		for ($a=0; $a <= 12; $a++) {
			if ($a%2==0) {
				echo '<strong>'.$a.'</strong>'.'<br />';
			} else {
				echo $a.'<br />';
			}
			
		}
		echo '<hr />';
?>

	<?php 
		//MODELO DE REPETICAO PARA COLUNAS PAR E IMPAR
		for ($a=0; $a <= 12; $a++) {
			if ($a%2==0) {
				echo ''.$a.' é PAR'.'<br />';
			} else {
				echo $a.'<br />';
			}
			
		}
		echo '<hr />';

		//MODELO DE TABUADA COMECANDO A PARTIR DE E FINALIZANDO EM
		for ($a=10; $a <= 25; $a++) {
			$tabuada = 9; 
			echo $tabuada.' x '.$a.' = '.($tabuada * $a).'<br />';
		}
		echo '<hr />';

		//MODELO DE TABUADA
		for ($a=1; $a <= 10; $a++) {
			$tabuada = 7; 
			echo $tabuada.' x '.$a.' = '.($tabuada * $a).'<br />';
		}
		echo '<hr />';

		//CONTA DE MULTIPLAR (TABUADA)
		for ($a=1; $a <= 10; $a++) { 
			echo '5 x '.$a.' = '.(5 * $a).'<br/>';
		}

		//REPETICAO
		echo '<hr />';
		for ($a=1, $b = 10; $a <= 10, $b >= 1; $a++, $b--) { 
			echo $a.' - '.$b.'<br />';
		}
 	?>