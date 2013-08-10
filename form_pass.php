<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
//EXEMPLOS DE CRIPTROGRAFIA DE SENHA
//DOIS METODOS ABAIXO 
if (isset($_POST['enviar'])) {
	$pass = $_POST['senha'];
	//METODO SEGURO
	$pass = md5($pass);
	//$pass = base64_encode(md5($pass));

	//METODO INSEGURO
	# $pass = base64_encode($pass); //O PROBLEMA DO BASE64 EH QUE ELE PODE SER DECODIFICADO ATRAVES DO base64_decode

	$clientpass = '123';

		

	if ($pass == md5($clientpass)) {
		echo 'Bem vindo';
	}else{
		echo 'Senha incorreta';
	}
		
		echo '<hr />';
}

 ?>
 <form name="form" action="" method="post">
 	<label>
 		<span>Senha:</span>
 		<input type="password" name="senha" value="">
 	</label>
 	<input type="submit" value="Enviar" name="enviar">
 </form>

