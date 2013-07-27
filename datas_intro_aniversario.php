<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
echo date('d/m/Y H:i:s').'<hr />';

$diaSemana	=	date('w');
$diaMes		=	date('d');
$mesAtual	=	date('m');
$anoAtual	=	date('Y');

$diaExt		= 	array(
		"0"	=> 	"Domingo",
		"1"	=>	"Segunda-feira",
		"2"	=> 	"Terça-feira",
		"3" =>	"Quarta-feira",
		"4"	=>	"Quinta-feira",
		"5"	=>	"Sexta-feira",
		"6"	=>	"Sábado-feira"
	);

$mesExt		=	array(
		"01" =>	"Janeiro",
		"02" =>	"Fevereiro",
		"03" => "Março",
		"04" => "Abril",
		"05" => "Maio",
		"06" => "Junho",
		"07" => "Julho",
		"08" => "Agosto",
		"09" => "Setembro",
		"10" => "Outubro",
		"11" => "Novembro",
		"12" =>	"Dezembro"
	);

echo $diaExt[$diaSemana].'<hr />';
echo 'Hoje é '.$diaExt[$diaSemana].', dia '.$diaMes.' de '.$mesExt[$mesAtual].' de '.$anoAtual.''.'<hr />';

$diaHoje 	= strtotime(date('Y-m-d'));
$diaNiver	= strtotime(date('Y-07-27'));
$timeResta	= $diaNiver - $diaHoje;
$timeDiario	= 24*60*60;
$faltaNiver = $timeResta / $timeDiario;

echo $diaHoje.'<br />';
echo $diaNiver.'<br />';
echo $timeResta.'<hr />';
echo 'Faltam '.$faltaNiver.' dias para o meu aniversário'.'<hr />';

if ($faltaNiver == 0) {
	echo 'PARABÉNS! Feliz aniversário!'.'<hr />';
} elseif ($faltaNiver == 1) {
	echo 'Faltam menos de 24 horas para o seu aniversário. Escolha seu presente hoje mesmo!'.'<hr />';
} elseif ($faltaNiver > 1) {
	echo 'Faltam '.$faltaNiver.' dias para o meu aniversário'.'<hr />';
} else {
	echo 'Que pena... iremos te presentear apenas no próximo ano'.'<hr />';
}
?>