<?php 
// ACESSO SO ARQUIVO DE CONFIGURACAO
require('rsys.php');

// CONECTAR BD
$conect = mysql_connect(HOST, USER, PASS) or die ('Erro na conexão com o Banco de Dados! '.mysql_error());
$dbsa	= mysql_select_db(DBSA) or die ('Erro na seleção do Banco de Dados! '.mysql_error());

// FUNCOES GENERICAS

// FUNCAO DE CADASTRO NO BANCO
	function create($tabela, array $datas) {
			$fields = implode(", ", array_keys($datas));
			$values = "'".implode("', '", array_values($datas))."'";
			// DENTRO DE UM INSERT DEVEMOS UTILIZAR AS {} PARA SE REVERENCIAR A UMA VARIAVEL
			$query_create 	= "INSERT INTO {$tabela} ($fields) VALUES ($values) ";
			$string_create	= mysql_query($query_create) or die ('Erro ao inserir dados! '.$tabela.' '.mysql_error());

			if ($string_create) {
				return TRUE;
			}
	}


	// $datas = array(
	// 		"title" 	=> "New Title",
	// 		"content"	=> "Content",
	// 		"date"		=> date('Y-m-d H:i:s')
	// 	);

	// APENAS ESSA LINHA SERA NECESSARIA PARA INSERIR AS INFORMACOES NO BD
	// $cadastrar = create('rows_articles', $datas);

	// if ($cadastrar) {
	// 	echo 'Cadastro com sucesso!';
	// }

 ?>