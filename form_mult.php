<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
//ENVIO DE ARQUIVO
if (isset($_POST['enviar'])) {
	$arq = $_FILES['arq'];
	//DEBUG
	//echo '<pre>'; print_r($arq); echo '</pre>';

	//VALIDACAO DE TIPOS DE ARQUIVO
	$arq_valid 	= array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'text/plain');

	//VALIDAR EXTENSAO DE ARQUIVO
	$arq_ext	= ($arq['type'] == 'text/plain' ? '.txt' : ($arq['type'] == 'image/png' ? '.png' : '.jpg'));

	//VALIDAR TAMANHO DE ARQUIVO
	$arq_size	= 1024*1024*2; //PERMITIDO ARQUIVOS DE 2MB 1024(BYTE)*1024(MEGAS)*2(QUANTIDADE)

	//DIRETORIO PARA SALVAR ARQUIVOS
	$direct = 'uploads/imgs';

	//VALIDAR ENVIO

	for ($i=0; $i < count($arq['tmp_name']); $i++) { 
		//DEBUG
		//echo $arq['name'][$i].'<br>';
		//VALIDAR E TROCAR NOME DE TODOS OS ARQUIVOS AO ENVIAR
		$arq_name = md5(time().$arq['tmp_name'][$i]).$arq_ext;
		move_uploaded_file($arq['tmp_name'][$i],$direct.'/'.$arq_name);
	} // o 'temp_name' é incluído para que não sejam coletados indíces desnecessários


}	
 ?>
 <hr>
 <form name="form" action="" method="post" enctype="multipart/form-data"> <!-- é necessário o enctype para retorno em forma de Array -->
 	<label>
 		<span>Arquivo:</span><br>
 		<input type="file" name="arq[]" multiple > <!-- multiple e [] para multi-selecao de arquivos -->
 	</label>
 	<br>
 	<br>
 	<input type="submit" value="Enviar" name="enviar">
 </form>

