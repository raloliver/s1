<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
/* VER COMENTARIOS NAS LINHAS ABAIXO
? = {0,1} NENHUMA OU UMA OCORRENCIA
* = {O,} NENHUM OU INFINITAS OCORRENCIAS
+ = {1,} UMA OU NENHUMA OCORRENCIA
*/
$subject = 'Joao Ferreira'; //COMPARACAO DA EXPRESSAO REGULAR
if (preg_match('/^[a-z 0-9]{0,}$/i', $subject)) { //ACEITO APENAS PARAMETROS INCLUSOS DENTRO DE /^ $/ 
	echo 'Nome Correto<hr>';						//POR PADRAO O CASE SENSITIVE ESTA ATIVO, PARA DESATIVAR USO O i APOS A ULTIMA BARRA
}else{									//[] PARA VALIDACAO DE NUMEROS OU LETRAS, EX: '/^[0-9]$/i' '/^[a-z]$/i'
	echo 'Favor preencher nome completo<hr>';		//{} PARA VALIDACAO DE OCORRENCIA (INTERVALO), EX: {1,5},{1,0}
}										//PODE UTILIZAR ESPACOS PARA VALIDAR O MESMO

//VALIDACAO DE EMAIL [a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}

$mail = 'email@dominio.com';
if (preg_match('/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/', $mail)) { // A \ SERVE PARA SERPARAR OS CARACTERES DE PONTUACAO
	echo 'Email Aceito<hr>';
}else{
	echo 'Email inválido<hr>';
}

//VALIDACAO DE DATA [0-9]{2}\/[0-9]{2}\/[0-9]{4} dd/mm/yyyy

$data = '23/07/1998'; 
if (preg_match('/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/', $data)) { 
	echo 'Data Aceita<hr>';
}else{
	echo 'Data Incorreta<hr>';
}

//VALIDACAO DE TELEFONE \([0-9]{2}\) [0-9]{4}\-[0-9]{4} (00) 1234-5678

$tel = '(41) 7163-1000'; // A FORMA DE ESCRITA PODE SER UTILIZADO UM JS MASK INPUT
if (preg_match('/^\([0-9]{2}\) [0-9]{4}\-[0-9]{4}$/', $tel)) { 
	echo 'Telefone adicionado aos contatos<hr>';
}else{
	echo 'Favor informar telefone completo<hr>';
}

//VALIDACAO DE CEP [0-9]{2}\.[0-9]{3}\-[0-9]{3} 00.000-000

$cep = '44.500-123';
if (preg_match('/^[0-9]{2}\.[0-9]{3}\-[0-9]{3}$/', $cep)) { 
	echo 'CEP Correto<hr>';
}else{
	echo 'CEP Incorreto<hr>';
}

//VALIDACAO SIMPLES DE CPF [0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}

$cpf = '111.222.333-00';
if (preg_match('/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/', $cpf)) { 
	echo 'CPF Correto<hr>';
}else{
	echo 'CPF Incorreto<hr>';
}

//VALIDACAO DE LINK http(s)?:\/\/(www\.)?[a-z09_\.\-]*[a-z09_\.\-]+\.[a-z]{2,4}

$link = 'http://www.dominio.com';
if (preg_match('/^http(s)?:\/\/(www\.)?[a-z09_\.\-]*[a-z09_\.\-]+\.[a-z]{2,4}$/', $link)) { 
	echo 'Link Aceito<hr>';
}else{
	echo 'Formato de Link Incorreto<hr>';
}

// VALIDAR EMAIL ATRAVES DE FUNCAO

function mail_valid ($email) {
	if (preg_match('/[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/',$email)) {
		return TRUE;
	}else{
		return FALSE;
	}
}

if (!mail_valid('mail@dominio.com.br')) {
	echo 'Informe um email válido!!!';
}else{
	echo 'Email válido!!!';
}

?>