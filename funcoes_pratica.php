<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
// VALIDACAO DE CPF

// $cpf = '111.111.111-11';

function cpf_validacao($cpf) 
	{

		$cpf = preg_replace('/[^0-9]/', '', $cpf); // VERIFICAR LINK http://www.geradorcpf.com/algoritmo_do_cpf.htm

		// echo $cpf.'<hr>';

		$cpf_digitoA = 0;
		$cpf_digitoB = 0;

		for ($i=0, $x = 10; $i <= 8 ; $i++, $x--) { 
			// echo $cpf[$i].' x '.$x.' = ';			// ALINHAR COLUNAS E MULTIPLAR OS VALORES DE CADA COLUNA E DESCOBRIR O RESULTADO
			$cpf_digitoA += $cpf[$i] * $x;
		}
		for ($i=0, $x = 11; $i <= 9 ; $i++, $x--) { 

			if (str_repeat($i, 11) == $cpf) {			//CORRECAO DE CARACTERES IGUAIS, EX: 111.111.111-11
				return FALSE;
			}

			$cpf_digitoB += $cpf[$i] * $x;
		}

		$countA = (($cpf_digitoA%11) < 2) ? 0 : 11-($cpf_digitoA%11); // DIGITO VERIFICADOR A
		$countB = (($cpf_digitoB%11) < 2) ? 0 : 11-($cpf_digitoB%11); // DIGITO VERIFICADOR B

		if ($countA != $cpf[9] || $countB != $cpf[10]) {
			return FALSE;
		}else{
			return TRUE;
		}
	}

	if (cpf_validacao('364.258.951-00')) { 		//GERADOR DE CPF http://www.geradorcpf.com/
		echo 'CPF Válido';
	}else{
		echo 'CPF Inválido';
	}

?>