<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
//ENVIO DE ARQUIVO
if (isset($_POST['enviar'])) {
	$arq = $_FILES['arq'];
	//echo '<pre>'; print_r($arq); echo '</pre>'; DEBUG ;)

	//VALIDACAO DE TIPOS DE ARQUIVO
	$arq_valid 	= array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'text/plain');

	//VALIDAR EXTENSAO DE ARQUIVO
	$arq_ext	= ($arq['type'] == 'text/plain' ? '.txt' : ($arq['type'] == 'image/png' ? '.png' : '.jpg'));

	//VALIDAR TAMANHO DE ARQUIVO
	$arq_size	= 1024*1024*2; //PERMITIDO ARQUIVOS DE 2MB 1024(BYTE)*1024(MEGAS)*2(QUANTIDADE)

	//INTERPETRACAO PARA UPLOAD (AVISOS)

	if ($arq['size'] > $arq_size) {
		echo 'Tamanho máximo para envio do arquivo é de 2MB!';
	}elseif (!in_array($arq['type'], $arq_valid)) {
		echo 'Apenas imagens (JPG/PNG) ou arquivo de texto(TXT).';
	}else{
		$direct = ($arq['type'] == 'text/plain' ? 'files' : 'imgs');
		$direct = 'uploads/'.$direct;
		 $arq_name = md5(time()).$arq_ext; //FUNCAO PARA RENOMEAR O ARQUIVO MESMO QUE ELE TENHA O MESMO NOME OU SEJAM O MESMO ARQUIVO

		if (move_uploaded_file($arq['tmp_name'], $direct.'/'.$arq_name)){
			echo 'Arquivo enviado com sucesso!';
		}else{
			echo 'Erro ao enviar o arquivo!';
		}
	}

}	
 ?>
 <hr>
 <form name="form" action="" method="post" enctype="multipart/form-data"> <!-- é necessário o enctype para retorno em forma de Array -->
 	<label>
 		<span>Arquivo:</span><br>
 		<input type="file" name="arq">
 	</label>
 	<br>
 	<br>
 	<input type="submit" value="Enviar" name="enviar">
 </form>

