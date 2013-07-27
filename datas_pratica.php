<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
$data = '29/02/2013';
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

echo '<strong> DEBUG </strong>'.'<hr />';
print_r($data);

?>