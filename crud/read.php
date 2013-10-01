<?php 
	require('config.php'); // O IDEAL E UTILIZAR O require POIS O include_once TENDE A DEIXAR A APLICACAO MAIS LENTA
	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
	echo '<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">';
	echo '<script src="../js/bootstrap.min.js"></script>';

	//SELECT=Seleciona colunas //FROM=Seleciona tabela //WHERE=Seleciona campo //GROUP BY=Agrupa //ORDER BY=Ordena
	//LIMIT=Limita a exibição //OFFSET=Remove o último da lista
	$cons_query = "SELECT * FROM rows_articles WHERE id !='' GROUP BY id ORDER BY date DESC LIMIT 20 OFFSET 0";
	$exec_query = mysql_query($cons_query) or die(mysql_error());	


	//EXIBIR ITEM
	if (!empty($_GET['id'])) {

		//PARA EXIBIR O ITEM, E NECESSARIO UTILIZAR A QUERY E CRIAR UMA NOVA VARIAVEL PARA O ITEM
		$id_item	= mysql_real_escape_string($_GET['id']);
		$cons_item 	= "SELECT * FROM rows_articles WHERE id = '$id_item' ";
		$exec_item 	= mysql_query($cons_item) or die(mysql_error());
		//NESTE CASO NAO E NECESSARIO O LOOPING, POIS IREMOS BUSCAR APENAS UM VALOR
		$read_item	= mysql_fetch_assoc($exec_item);

		echo '<form class="form-horizontal"><fieldset>';
		echo '<legend>'.$read_item['title'].'</legend>';
		echo '<p>'.$read_item['content'].'</p>';
		echo '<p><strong>'.date('d/m/Y H:i',strtotime($read_item['date'])).'</strong></p>';
		echo '<a href="read.php">Voltar</a>';
		echo '</fieldset></form>';
	}

	//CONTAR RESULTADOS
	echo 'Existem '.mysql_num_rows($exec_query).' posts cadastrados em uma tabela com ';
	echo mysql_num_fields($exec_query).' colunas.';

	// VERIFICAR O RETORNO DOS RESULTADOS
	if (mysql_num_rows($exec_query) <= 0) {
		echo 'Dados não encontrados';
	}else{
	// LOOPING DE RESULTADOS
		echo '<ul>';
		while ($resu_query = mysql_fetch_array($exec_query)) {
	// TUDO QUE FOR INCLUIDO AQUI VAI SER REPETIDO BASEADO NOS RESULTADOS DA QUERY
			echo '<li>';
				echo '<a href="read.php?id='.$resu_query['id'].'">'.$resu_query['title'].'</a>';
			echo '</li>';
	// DEBUG
	//	echo '<pre>';
	//	while ($resu_query = mysql_fetch_assoc($exec_query)) { // USAMOS o mysql_fetch_assoc PARA RETORNAR APENAS O VALOR SEM O INDICE
	//		print_r ($resu_query);
		}
		echo '</ul>';	
	}
?>

