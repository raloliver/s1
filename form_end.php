<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
//ENVIO DE ARQUIVO
if (isset($_POST['enviar'])) {
	$form['teste']	= $_POST['teste'];
	$form['data']	= date('d/m/Y H:i');
	//$form['data']	= $_POST['data']; forma de enviar a data através de um campo hidden
	//DEBUG
	echo '<pre>'; print_r($form); echo '</pre>';
}	
 ?>
 <hr>
 <form name="form" action="" method="post" enctype="multipart/form-data"> <!-- é necessário o enctype para retorno em forma de Array -->
 	<label>
 		<input type="text" name="teste">
 	</label>
 	<br>
 	<br>
 	<!-- <input type="hidden" name="data" value="<?php echo date('d/m/Y H:i') ?>"> --> <!-- campo oculto para salvar a data de envio -->
 	<input type="submit" value="Enviar" name="enviar">
 </form>

