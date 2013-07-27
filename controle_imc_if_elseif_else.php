<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
	$sexo = 'f';
	$altura = '1.55';
	$peso = '56';

		if ($sexo == 'm') {
			if ($altura >= '1.70' && $altura <= '1.86') {
				if ($peso >= '65' && $peso <= '79') {
					echo 'Você está na média. Parabéns!';
				}elseif($peso < '65') {
					echo 'Você está abaixo do ideal.';
				}else{
					echo 'Cuidado com a alimentação! <a href="#"> Confira nossas dicas de alimentação. </a>';
				}
			}else{
					echo 'Não conseguimos calcular o seu IMC.';
			}
		} elseif ($sexo == 'f'){
			if ($altura >= '1.50' && $altura <= '1.60') {
				if ($peso >= '48' && $peso <= '56') {
					echo 'Você está de parabéns! Ótima forma.';
				}elseif($peso < '48') {
					echo 'Você está abaixo do ideal. <a href="#"> Confira nossas dicas de alimentação. </a>';
				}else{
					echo 'Menina, cuidado com a alimentação! <a href="#"> Confira nossas dicas de alimentação. </a>';
				}
			}else{
					echo 'Não conseguimos calcular o seu IMC.';
			}
		} else {
			echo 'Por favor, selecione seu gênero sexual';
		}
		
 ?>

