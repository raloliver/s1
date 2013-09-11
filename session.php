<?php 
// INICIAR CACHE
	ob_start();
// SESSAO NATIVA AO SISTEMAS
	session_start();
// ECHO NO META APENAS PARA NAO SUBIR O DESCER ELE TODA HORA ;)
	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
// COMO LIMPAR A SESSAO
	# unset($_SESSION['user']);

// POREM, PARA ELIMINAR TODA UMA SESSAO, SEM APAGAR UMA A UMA, O IDEAL E UTILIZAR INDICES
	# $_SESSION ['user']['name'] = 'Oliver';
// TRABALHANDO COM SESSAO DE CACHE
	# $_SESSION ['user']['email'] = 'email@dominio';
// PARA EDITAR UMA SESSAO, BASTA APENAS REESCREVE-LA

if (isset($_POST['formsend'])) {
	// UTILIZAMOS FUNCOES NATIVAS DO PHP PARA COLETAR ID, HORA E TEMPO DE SESSAO
	$session['id'] 		= session_id();
	// AQUI DETEMINAMOS O MOMENTO EXATO DE ENTRADA DO USER
	$session['on'] 		= time();
	// O TEMPO E BASEADO EM SEGUNDOS: 60*60 = 1 HORA
	$session['end'] 	= time() + 30;
	// COLETAR IP DO USER
	$session['ip'] 		= $_SERVER['REMOTE_ADDR'];
	$session['name'] 	= $_POST['name'];

	// AGORA E NECESSARIO ARMAZENAR O ARRAY DENTRO DA SESSAO USER
	$_SESSION['user'] = $session;

	// PARA DESATIVAR A ATUALIZACAO DA SESSAO, E NECESSARIO REDIRECIONAR O USER
	// NESTE CASO REDIRECIONAMOS PARA MESMA PAGINA, POREM EM OUTROS É INTERESSANTE REDIRECIONAR PARA O BACKEND
	header('Location: '.$_SERVER['PHP_SELF']);
}
	// EFETUAR LOGOFF: LIMPEZA DE SESSAO MANUAL
	if (!empty($_GET['acao']) && $_GET['acao'] == 'sair') {
		unset($_SESSION['user']);
		header('Location: '.$_SERVER['PHP_SELF']);
	}

	// EXEMPLO DE CONDICAO PARA USER LOGADOS
	// OCULTAR BOTAO PARA INICIO DA SESSAO
	if (empty($_SESSION['user'])) {
		echo '
			<form name="session" action="" method="post">
				<label>User:</label>
				<input type="text" name="name">
				<input type="submit" value="Start" name="formsend">
			</form>
		';
	}else{
	// FUNCAO PARA EXIBIR TEMPO LOGADO DO USUARIO

		$sestime_log = $_SESSION['user']['on'];
		$sestime_now = time();
		$sestime_on  = $sestime_now - $sestime_log;
		$sestime_end = $_SESSION['user']['end'] - $sestime_now;

		// DEBUG
		// .round APROXIMAR PARA CIMA
		# echo 'Oi '.$_SESSION['user']['name'].' você está aqui há '.round($sestime_on/60).' minutos.';
		echo 'Oi '.$_SESSION['user']['name'].' você está aqui há '.$sestime_on.' segundos. Your IP is: '.$_SESSION['user']['ip'].'<br><br>';

		// DETERMINAR TEMPO RESTANTE DE SESSAO		

		// DESLOGAR O USER APOS TEMPO DETERMINADO
		if ($sestime_end <= 0) {
			unset($_SESSION['user']);
			// E NECESSARIO O HEADER LOCATION PARA NAO RECARREGAR A PAGINA
			# header('Location: '.$_SERVER['PHP_SELF']);
			// OU ATRAVES DE UM RELOAD
			header('Refresh: 5;url='.$_SERVER['PHP_SELF']);
			echo 'Sessão Expirada... a bomba vai explodir em 5 segundos. CORRA!';
		}else{
			// RENOVAR A SESSAO A CADA INTERACAO DO USER
			$_SESSION['user']['end'] = time() + 30;
			echo 'Você vai cair fora daqui em: '.$sestime_end;
			echo '<br><br>';
			echo '<a href="session.php?acao=sair">Sair</a>';
		}

	}


// DEBUG
	echo '<hr><pre>'; 
// DEBUGAR QUALQUER SESSÃO ATIVA
	print_r($_SESSION);
	echo '</pre>'; 

// FINALIZAR CACHE
	ob_end_flush();
?>
