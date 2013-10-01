<?php 
	require('config.php'); // O IDEAL E UTILIZAR O require POIS O include_once TENDE A DEIXAR A APLICACAO MAIS LENTA
	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
	echo '<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">';
	echo '<script src="../js/bootstrap.min.js"></script>';

	if (isset($_POST['sendform'])) {
		// VARIAVEIS DE VALOR QUE DEVEM SER INSERIDAS NO BD

		#$acc['title'] = $_POST['title']; // METODO MAIS ANTIGO E COMUM, POREM INSEGURO

		$acc['title'] 	= htmlspecialchars(mysql_real_escape_string($_POST['title'])); // MANEIRA MAIS SEGURA COM ADICAO DA \ POREM O htmlspecialchars CONVERTE ISSO PARA UMA MELHOR LEITURA
		$acc['content'] = htmlspecialchars(mysql_real_escape_string($_POST['content']));
		$acc['date'] 	= htmlspecialchars(mysql_real_escape_string($_POST['date']));
		
		$acc_query	= "INSERT INTO rows_articles (title,content,date) ";
		$acc_query .= "VALUES ('$acc[title]','$acc[content]','$acc[date]')"; // PARA SEPARAR VALORES, BASTA CONCATENAR, LEMBRE-SE SEMPRE DO ESPAÇAMENTO
		$acc_create = mysql_query($acc_query) or die ('Erro no cadastro: '.mysql_error()); // SINTAXE BASICA DE CADASTRO

		//DEBUG (Avisos)

		if ($acc) {
			echo 'Conteúdo enviado com Sucesso!';
		}else{
			echo 'Ocorreu um erro.';
		}

		echo '<hr/>'; // ANTES DE EXECUTAR O CRUD VERIFICAR SE O MESMO ESTAO CORRETO
	}
?>

<form name="acc_create" action="" method="post">
	<fieldset>
		<label>
			<span>Título:</span><br>
			<input type="text" name="title"> 
		</label>
		<br><br>
		<label>
			<span>Conteúdo:</span><br>
			<textarea name="content" rows="3"></textarea>
		</label>
		<br><br>
		<label>
			<span>Criação:</span><br>
			<input type="text" name="date" value="<?php echo date('Y-m-d H:i:s'); ?>"> 
		</label>
		<br><br>
		<input type="submit" value="Enviar" name="sendform">
	</fieldset>
</form>