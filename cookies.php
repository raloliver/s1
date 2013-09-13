<?php 
	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
// COOKIES ARMAZENA DADOS NO NAVEGADOR E NAO EM CACHE

// COMO CRIAR UM COOKIE (nome, valor, tempo, local(/~admin), dominio (sem www todo o site), bool, outros dispositivos além de http,)
#setcookie('name', 'Ral', time()+3600, '/', 'localhost',false,false); (FORMA COMPLETA)
#setcookie('name', 'Ral', time()+3600); (FORMA MAIS UTILIZADA)
// PARA EDITAR BASTA APENAS ALTERAR O INDICE

// METODO DE CADASTRO MULTIPLO

	$dados['name'] = 'Israel';
	$dados['email'] = 'mail@dominio.com';
	$dados['pass'] = md5('123');

// TRANSFORMADO EM ARRAY, PODEMOS APLICAR UM FOREACH

	// foreach ($dados as $key => $value) {
	// setcookie($key, base64_encode($value),time()+3600); // base64_encode PARA PASSAR VALORES CODIFICADOS
	// }


// PARA EXCLUIR O COOKIE E NECESSARIO ATACAR O MESMO NOVAMENTE

	foreach ($dados as $key => $value) {
		setcookie($key, '',time()-3600); // REMOVER VALOR E NEGATIVAR TEMPO
	}
// NAO E POSSIVEL SETAR COOKIE COM ARRAYS


// COMO IDENTIFICAR UM COOKIE? COM O BOM E VELHO IF

	if (empty($_COOKIE['name'])) {
		echo 'Por favor, efetue o login!';
	}else{ // AQUI AGENTE DEBUGA, MAS ANTES TEM E ESSENCIAL COMPARAR OS DADOS COM O BANCO DE DADOS E DEPOIS PASSAR OS DADOS DO COOKIE PARA A SESSAO
		if (!empty($_COOKIE['pass'])) {
			echo 'Oi '.base64_decode($_COOKIE['name']).' Este é o seu email '.base64_decode($_COOKIE['email']).' e sua senha '.base64_decode($_COOKIE['pass']).''; // E NECESSARIO DECODIFICAR AQUI ;)
		}
	}

// DEBUG
	echo '<hr><pre>'; 
// DEBUGAR QUALQUER COOKIE ATIVA
	print_r($_COOKIE);
	echo '</pre>'; 
?>