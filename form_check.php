<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
//EXEMPLOS DE RADIO BUTTON E CHECK BOX
if (isset($_POST['enviar'])) {
	$radio = $_POST['opcao_sn'];
	if (empty($radio)) {
		echo 'Sim ou Não?';
	}else{
		echo $radio;
	}
	echo '<hr />';

	$check = $_POST['opcao_add'];
	
	if (!empty($check)) {
		if (count($check) <= 2) {
			$check = implode(', ', $check);
			echo $check;
		}else{
			echo 'Selecione apenas dois adicionais!';
		}
	}else{
		echo 'Selecione os dois adicionais!';
	}
}
 ?>
 <hr>
 <form name="form" action="" method="post">
 	<span>Vai um café aí?</span><br>
 	<label><input type="radio" name="opcao_sn" value="S"> Sim</label> <!-- é ideal que o input esteja dentro do label pois ao selecionar o mesmo, o valor também é selecionado -->
  	<label><input type="radio" name="opcao_sn" value="N"> Não</label> <!-- se o name for diferente, você consegue selecionar mais de um -->
 	<br>
 	<br>

 	<span>Escolha dois adicionais.</span><br>
 	<label><input type="checkbox" name="opcao_add[]" value="leite"> Leite</label>
 	<label><input type="checkbox" name="opcao_add[]" value="acucar"> Açucar</label>
 	<label><input type="checkbox" name="opcao_add[]" value="nescau"> Nescau</label>
 	<label><input type="checkbox" name="opcao_add[]" value="creme"> Creme</label>
  	<br>
 	<br>
 	<input type="submit" value="Enviar" name="enviar">
 </form>

