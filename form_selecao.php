<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
//EXEMPLOS DE LISTA E MULTI-LISTA DE SELECAO
//EXEMPLO DE SELECAO SIMPLES
if (isset($_POST['enviar'])) {
	$select_list = $_POST['select_list'];
	if(empty($select_list)) {
		echo 'Quer ou Não quer?';
	}else{
		echo $select_list;
	}
	echo '<hr />';

//EXEMPLO DE MULTI-SELECAO

	$multi_select = $_POST['multi_list'];
	//COM VALIDACAO
	if (!empty($multi_select)) { //! = NEGACAO, CASO NAO EXISTA NENHUM VALOR NAO EXECUTE
		$quant = count($multi_select); // CONTAR A SELECAO
		if ($quant > 2) {
			echo 'Selecione no máximo duas opções.';
		}else{
		$multi_select = implode(', ', $multi_select);
		echo $multi_select;
		}
	}else{
		echo 'Por favor, escolha os dois adicionais.';
	}

	//SEM VALIDACAO PARA VALOR VAZIO
	//$multi_select = implode(', ', $multi_select);
	//echo $multi_select;
	// DEBUG
	// echo '<pre>';
	// print_r ($multi_select);
	// echo '<pre>';  
}

 ?>
 <hr>
 <form name="form" action="" method="post">
 	<label>
  		<select name="select_list">
  			<option value="">Vai um café aí?</option> <!-- (disabled="disabled" selected="selected") essa mesma validação pode ser feita com PHP -->
  			<option value="S">Sim</option>
  			<option value="N">Não</option>
		</select>
 	</label>
 	<br>
 	<br>
 	<label>
  		<select name="multi_list[]" multiple="multiple" size="5"> <!-- [] para que o HTML interprete os valores como Arryay -->
  			<option value="" disabled="disabled">Escolha dois adicionais</option> <!-- (disabled="disabled" selected="selected") essa mesma validação pode ser feita com PHP -->
  			<option value="leite">Leite</option>
  			<option value="acucar">Açucar</option>
  			<option value="nescau">Nescau</option>
  			<option value="creme">Creme</option>
		</select>
 	</label>
 	<br>
 	<br>
 	<input type="submit" value="Enviar" name="enviar">
 </form>

