<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
	$valor = 'sim';
		if ($valor == 'sim') {
			$resposta = 'Go to the beach!';	
		}else{
			$resposta = 'Sem praia por hoje negada!';
		}

		echo $resposta.'<hr />';
		//TERNARIAS: ECONOMIA DE ESCRITA NO CODIGO. COM APENAS UMA LINHA SUBSTITUIMOS O IF E O ELSE
		$resposta = ($valor == 'sim' ? 'Vamos a praia.' : 'Não vamos a praia.');

		echo $resposta.'<hr />';

		//EXEMPLO DE APROVACAO NA COMPRA DE UMA LOJA VIRTUAL. SUBTITUICAO DE ELSEIF
		$condicional = 3;
		$execute = ($condicional == 1 ? 'Aprovada' : ($condicional == 2 ? 'Pendente' : ($condicional == 3 ? 'Enviado' : 'Reprovada')));
		echo $execute;
?>