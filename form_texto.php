<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
//EXEMPLOS DE TEXT AREA COM QUEBRA DE LINHA
if (isset($_POST['enviar'])) {
	echo nl2br($_POST ['texto']); // Substituir /nl por <br>
}

 ?>
 <hr>
 <form name="form" action="" method="post">
 	<label>
 		<span>Texto:</span><br>
 		<textarea name="texto" rows="10"></textarea>
 	</label>
 	<input type="submit" value="Enviar" name="enviar">
 </form>

