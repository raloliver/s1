<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
//VERIFICAR O QUE FOI ENVIADO
if (isset($_POST['enviar'])) {
	echo $_POST['nome'];
	echo '<hr />';
}

 ?>
 <form name="form" action="" method="post">
 	<label>
 		<span>Nome:</span>
 		<input type="text" name="nome" value="">
 	</label>
 	<input type="submit" value="Enviar" name="enviar">
 </form>
<hr />
<!-- URL AMIGAVEIS -->
<?php 
if (isset($_GET['url']) && $_GET['url'] == true) {
	//echo 'Válido<hr />';
	//echo $_GET['link'];
	echo 'URL '.$_GET['link'].' empresa '.$_GET['empresa'].' parceiro '.$_GET['parceiro'];
}
 ?>
 <!-- ? APENAS NO PRIMEIRO VALOR -->
 <!-- & NOS VALORES SEGUINTE -->
 <!-- NUNCA USE ESPACOS EM URL -->
 <a href="formularios.php?url=true&link=exemplo+hlink&empresa=Aldac+Web&parceiro=Israel" title="HyperLink Exemplo">URL - Link</a>