<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-transition.js"></script>
<script src="js/bootstrap-modal.min.js"></script>
		<style type="text/css">

		</style>

<?php 
	// INCORPORAR ARQUIVOS EXTERNOS
	include ('nav.php');

	echo '<br><br>';
	// INCORPORAR FUNÇÕES
	include ('function.php');

	hello();
	// @ SERVE PARA IGNORAR A CONSULTA DO ARQUIVO EXTERNO, E PARA TAL USAMOS INCLUDE, POREM O REQUIRE REQUISITA ARQUIVOS ESSENCIAIS AO SISTEMA

	echo '<br><br>';
	include_once ('function.php'); // O _ONCE SERVE PARA VERIFICAR SE O ARQUIVO JA FOI INCLUSO NO SISTEMA
	hello();
?>
<br><br>
<p>Depende da função? <strong>require_once</strong></p>
<p>Independe da função? <strong>include_once</strong></p>
<p>É apenas uma string? <strong>include</strong></p>
