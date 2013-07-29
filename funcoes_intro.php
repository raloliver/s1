<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
	//PADRAO DE VERSAO COM ACERVO DE FUNCOES PROPRIAS
	//DOIS TIPOS DE FUNCOES: QUE EXIBE E QUE RETORNA DADOS
	//SEMPRE NOMEAR A FUNCAO DENTRO DAQUILO QUE ELA VAI DE FATO FAZER

//A-FUNCAO ESPECIFICA
function show(){
	echo 'Hello World!<hr />';
}

show();

function back(){
	return 'Olá Mundo!<hr />';
}

 echo back();

 function conta($value,$chance = 35){ //PODE SER DEFINIDO O VALOR NULL PARA QUE NAO OCORRA ERROS OU NADA PARA QUE SEJA OBRIGATORIA  INCLUSAO DO VALOR.
 	$conta	= ($value/100)*$chance;
 	return $conta; //COM return RETORNAMOS COMO STRING, COM O echo NAO E POSSIVEL FAZER ISSO
 }
 echo conta(5500,50).'<hr />'; //PRIORIDADE DA EXECUCAO, CASO NAO EXISTA, A FUNCAO TODA A DIANTEIRA ;)

//CADASTRO EM DATA NO BANCO DE DADOS PASSANDO A DATA ATUAL, DO DIA.

function dataform($data){
	$data = explode('/', $data); //PARA INSERIR NO BANCO E NECESSARIO TRANSFORMAR NO FORMATO TIMESTAMP
	$ano = $data[2];
	$mes = $data[1];
	$dia = $data[0];
	return $ano.'-'.$mes.'-'.$dia.' '.date('H:i:s'); // PODEMOS USAR 00:00:00 PARA QUE NAO EXIBIR HORAS, MINUTOS E SEGUNDOS
	// print_r($data); PARA DEBUGAR E VER OS INDICES ARRAY
}
echo date('d/m/Y H:i:s',strtotime (dataform('13/07/2015'))).'<hr />';
// dataform('13/07/2015'); (DEBUGANDO) 

function conta_geral($valueOne, $valueTwo, $contaALL = '+'){ //VALOR, PELO QUE QUERO EXECUTAR O VALOR, TIPO DE CALCULO
		if ($contaALL == '+') {
			return $valueOne + $valueTwo;
		}elseif ($contaALL == '-') {
			return $valueOne - $valueTwo;
		}elseif ($contaALL == '*') {
			return $valueOne * $valueTwo;
		}elseif ($contaALL == '/') {
			return $valueOne / $valueTwo;
		}elseif ($contaALL == '%') {
			return ($valueOne/100) * $valueTwo;
		}elseif ($contaALL == 'module') {
			if ($valueOne % $valueTwo == 0) {
				return $valueOne.' não é módulo de '.$valueTwo;
			}else{
				return $valueOne.' é módulo de '.$valueTwo.' <strong>e o módulo é: </strong>'.$valueOne%$valueTwo;
			}
		}else{
			return 'Erro no cálculo. Operação inválida.';
		}
}
//EXEMPLOS DE CONTAS BASEADO NA FUNCAO ACIMA
echo conta_geral('50','50').'<hr />';
echo conta_geral('50','50','-').'<hr />';
echo conta_geral('50','50','/').'<hr />';
echo conta_geral('50','50','*').'<hr />';
echo conta_geral('50','50','%').'<hr />';
echo conta_geral('50','50','module').'<hr />';
echo conta_geral('50','100','module').'<hr />';
?>