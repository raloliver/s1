<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

$user_data = array (
	'name' => 'Israel Oliveira',
	'state' => 'Casado',
	'age' => '27 Anos.'
);

echo 'Olá, tudo bem? Me chamo '.$user_data['name'].' sou '.$user_data['state'].' e tenho '.$user_data['curso'];

echo '<pre>';
print_r($user_data);
echo '</pre>';


?>


<?php
define(SERVIDOR,'localhost');
define(USUARIO,'admaster');

echo 'Conecte-se ao'.SERVIDOR.' com o usuário '.USUARIO;

?>

<?php
$var= 'Olá Constantes.';

define(OLA, 'Olá Constantes.');

echo OLA
?>

<?php
$form['name'] = 'Israel Oliveira';
$form['mail'] = 'contato@raloliver.com';
//concatenação
echo 'O email de '.$form['name'].' é '.$form['mail'];

//única linha
echo "O email de $form[name] é $form[mail]";
//normal
echo 'O email de ';
echo $form['name'];
echo ' é ';
echo "$form[mail]";

echo '<pre>';
	print_r($form);
echo '</pre>';

?>


<?php

$ola = 'Hello World.';
echo "$ola";

?>

<?php
echo 'Olá Mundo';

if ('1' == '1') {
	echo ' - Correto!';
}elseif('1' != '1') {
	echo ' - Não!';
}else{
	echo 'error!';
}
?>

<?php
/*
{} laço de repatição
() expressão de condição
[] seletor de valor

echo 'valor';
print 'valor';
print_r();
*/
?>