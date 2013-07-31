<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 

$stringFull = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
<a href="#">tempor</a> incididunt ut labore et dolore magna aliqua. <a href="#">Ut enim ad minim veniam</a>,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure <strong>dolor in reprehenderit </strong> in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia <em>deserunt mollit anim id est laborum.</em>';

function ReadMore($string, $read_more = '100'){
	$string = strip_tags($string);
	$caract = strlen($string);

	if ($caract <= $read_more) {
		return $string;
	}else{
		$strpos = strrpos(substr($string,0,$read_more),' ');
		return substr($string,0,$strpos).'... Leia mais';
	}
}

echo ReadMore($stringFull,100).'<hr />'; //FUNCAO BUSCA A VARIAVEL NO BANCO. O 100 EH A QUANTIDADE DE CARACTERES

//EXEMPLO COM DATAS

function DateVal($data){

			$data = explode('/', $data);

			$dia = $data[0];
			$mes = $data[1];
			$ano = $data[2];

			$diaV = TRUE;
			$mesV = TRUE;
			$anoV = TRUE;

				if ($ano <= date('Y') && $ano >= 1985) {
					
					$arr_one = array('1','3','5','7','8','10','12'); //MESES COM 31 DIAS
					$arr_two = array('4','6','9','11'); //MESES COM 30 DIAS
					//VALIDAR MESES
					if (in_array($mes, $arr_one)) {
						//VALIDAR DIAS NOS MESES DE 31 DIAS
							if ($dia < 1 || $dia > 31):
								$diaV = FALSE;
							endif; //VALIDACAO UNICA
					}elseif (in_array($mes, $arr_two)) {
						//VALIDAR DIAS NOS MESES DE 30 DIAS
							if ($dia < 1 || $dia > 30):
								$diaV = FALSE;
							endif;
					//MES DE FEVEREIRO
					}elseif ($mes == 2) {
						//CALCULAR ANO BISEXTO QUE ACONTECE A CADA 4 ANOS
						if (($ano%4==0 && $ano%100!=0) || ($ano%400==0)) {
							//VERIFICAR SE O ANO É BISEXTO
							$fev = '29'; //ASPAS SIMPLES PARA EFETUAR A LEITURA E NAO INTERPETRAR
						}else {
							$fev = '28';
						}
							if ($dia < 1 || $dia > $fev):
								$diaV = FALSE;
							endif;

					}else{
						$mesV = FALSE;
					}

				}else{
					$anoV = FALSE;
				}

			if (!$anoV) {
				echo 'Só aceitamos nascidos entre 1980 e '.date('Y').'. Obrigado! <hr />';
			}elseif (!$mesV) {
				echo 'Mês informado não existe em nosso calendário! Por favor, verifique.'.'<hr />';
			}elseif (!$diaV) {
				echo 'Dia informado não existe em nosso calendário! Por favor, verifique.'.'<hr />';
			}else{
				echo 'A Data está dentro do exigido. Obrigado.'.'<hr />';
			}

			// echo '<strong> DEBUG </strong>'.'<hr />';
			// print_r($data);
	} //SE FOR TRATAR A FUNCAO APLICA-SE O RETURN SE NAO, USA O ECHO

DateVal('31/07/2013');
?>