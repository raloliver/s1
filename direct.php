<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-transition.js"></script>
<script src="js/bootstrap-modal.min.js"></script>
<style type="text/css">
	.over {height: auto !important; margin: 0 !important;}
	.edit {width: 90%;}
</style>
<?php 
	$dir_midia	= 'uploads/';
	// variavel para informar qual diretorio eu desejo abrir
	$dir_open	= ($_GET['midia'] != '' ? $_GET['midia'] : $dir_midia);	
	// variavel para informar que é um diretorio
	$dir_info	= dir($dir_open);
	// variavel para voltar diretorio
	$dir_ant	= strrpos(substr($dir_open, 0, -1), '/');
	$dir_back	= substr($dir_open, 0, $dir_ant+1	);
	// antes e depois do loop devem ser inclusos os itens que não terão repetição

	// condição para renomear aquivos ou diretórios
	if (isset($_POST['dirsendnew'])) {
		// coleta nome do arquivo ou diretorio antigo
		$arq_name = $_POST['dirold'];
		$arq_ren = $_POST['dirren'];

		// validar arquivo ou pasta
		// deve ser diretório e existir
		if (is_dir($arq_name) && file_exists($arq_name)) {
			rename($arq_name, $dir_open.$arq_ren);

		// se for diferente do arquivo e o mesmo existir
		}elseif (!is_dir($arq_name) && file_exists($arq_name)) {
			$arq_new	= strrpos($arq_name,'.');
			// coletando a extensão do arquivo
			$arq_ext	= substr($arq_name,$arq_new);
			// definir nome do arquivo
			$arq_rename	= $arq_ren.$arq_ext;
			// renomear arquivo
			rename($arq_name,$dir_open.$arq_rename);
			
		}
	}

	// condição para deletar diretórios e/ou arquivos
	if (!empty($_GET['del'])) {
		$del    = $_GET['del'];
		// verificar se o mesmo existe e se é arquivo ou diretorio
		if (is_dir($del) && file_exists($del)) {
			// função nativa para excluir pastas
			if (!@rmdir($del)) {  // rmdir não permite excluir a pasta com arquivos dentro
				echo '<div class="container">
						<div class="row">
							<div class="span12">
								<div class="alert alert-error">
								<button type="button" class="close" data-dismiss="alert">×</button>
								<strong>Atenção!</strong> Pasta contém arquivos. Favor excluir sub-diretórios.
								</div>
							</div>
						</div>
					</div>';
			}else{
				header('Location: direct.php?midia='.$dir_open);
			}
		}elseif (!is_dir($del) && file_exists($del)) {
			if (unlink($del)) { // apos deletar arquivo, continuar no mesmo diretorio
				header('Location: direct.php?midia='.$dir_open);
			}else{
				echo '<div class="container">
						<div class="row">
							<div class="span12">
								<div class="alert alert-error">
								<button type="button" class="close" data-dismiss="alert">×</button>
								<strong>Erro ao excluir arquivo!</strong>
								</div>
							</div>
						</div>
					</div>';
			}
			
		}
	}

	// função para criação de novos diretórios
	if (isset($_POST['dirsend'])) :
		$dir_new	= $_POST['pasta'];
		// é preciso verificar se existe ou não essa pasta
		if (!file_exists($dir_open.$dir_new)) {
			// essa é a função nativa para criação de diretório, logo após a virgula, o nível de permissão 
			mkdir($dir_open.$dir_new, 0755);
		}else{
			echo '<div class="container">
					<div class="row">
						<div class="span12">
							<div class="alert">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Atenção!</strong> Pasta existente. Por favor tente outro nome!
							</div>
						</div>
					</div>
				</div>';
		}
	endif;

	if (isset($_POST['arqsend'])) :
		$arq_name	= $_FILES ['arqnew'];
		// identificar a extensão do arquivo, mesmo que o nome do arquivo possua pontos
		$arq_new	= strrpos($arq_name['name'],'.');
		// coletando a extensão do arquivo
		$arq_ext	= substr($arq_name['name'],$arq_new);
		// definir nome do arquivo
		$arq_rename	= md5(time()).$arq_ext;
		// mover arquivos para determinada pasta
		move_uploaded_file($arq_name['tmp_name'], $dir_open.'/'.$arq_rename);
	endif;

if (empty($_GET['edit'])) {
	echo '
		<div class="container">
			<div class="row">
				<div class="span12">
						<form name="enviar" action="" method="post" enctype="multipart/form-data">
							<!-- criar novos diretorios -->
							<fieldset class="span5">
								<legend>Gerenciar Diretórios</legend>
								<label>Nova Pasta</label>
								<input class="over" type="text" name="pasta" placeholder="Digite o nome da pasta...">
								<input class="btn btn-success" type="submit" name="dirsend" value="Criar">
							</fieldset>
							<fieldset class="span5">
								<legend>Gerenciar Arquivos</legend>
								<label>Novo Arquivo</label>
								<input type="file" name="arqnew">
								<input class="btn btn-success pull-right" type="submit" name="arqsend" value="Enviar">
							</fieldset>
						</form>
				</div>
			</div>
		</div>
		<br>
		<br>
		 ';
}else{
 echo '
	<div class="container">
			<div class="row">
				<div class="span12">
						<form name="update" action="" method="post">
							<!-- criar novos diretorios -->
							<fieldset class="span12">
								<legend>Renomear Arquivo</legend>
								<label>Nome Atual do arquivo: <strong>'.$_GET['edit'].'</strong></label>
								<!-- renomear o valor antigo e incluir o novo -->
								<!-- o campo deve ser do tipo hidden apenas para coletar o conteúdo e não mostra -->
								<input class="over edit" type="hidden" name="dirold" value="'.$_GET['edit'].'">
								<label>Insira o <strong>Novo Nome</strong></label>
								<input class="over" type="text" name="dirren" value="">
								<input class="btn btn-primary" type="submit" name="dirsendnew" value="Renomear">
							</fieldset>
						</form>
				</div>
			</div>
		</div>
		<br>
		<br>
';
}

// é necessário executar novamente a leitura dos diretórios para atualização de inclusão dos novos
$dir_info	= dir($dir_open);

	echo '<div class="container">';
	echo '<div class="row">';
	echo '<div class="span12">';
	echo '<table class="table table-bordered table-hover">';
	while ($midia = $dir_info -> read()) :
		
		// condição para não exibir navegação em diretorios anteriores
		if ($midia != '.' && $midia != '..'):
			// identificar arquivos e/ou diretorios
			if (is_dir($dir_open.$midia)) {
				echo '<tr>';
				echo '<td>'.$midia.'</td>';
				echo '<td class="span1"><a class="btn btn-info" href="direct.php?midia='.$dir_open.$midia.'/"><i class="icon-folder-open icon-white"></i></a></td>';
				echo '<td class="span1"><a class="btn btn-warning" href="direct.php?edit='.$dir_open.$midia.'&midia='.$dir_open.'"><i class="icon-edit icon-white"></i></a></td>';
				echo '<td class="span1"><a class="btn btn-danger" href="direct.php?del='.$dir_open.$midia.'&midia='.$dir_open.'"><i class="icon-remove icon-white"></i></a></td>';				
				echo '</tr>';
			}else{
				echo '<tr>';
				echo '<td>'.$midia.'</td>';
				echo '<td class="span1"><a class="btn btn-info" href="'.$dir_open.$midia.'"><i class="icon-eye-open icon-white"></i></a></td>';
				echo '<td class="span1"><a class="btn btn-warning" href="direct.php?edit='.$dir_open.$midia.'&midia='.$dir_open.'"><i class="icon-edit icon-white"></i></a></td>';
				echo '<td class="span1"><a class="btn btn-danger" href="direct.php?del='.$dir_open.$midia.'&midia='.$dir_open.'"><i class="icon-remove icon-white"></i></a></td>';				
				echo '</tr>';
			}
		endif;

	endwhile;
	echo '</table>';
	if ($dir_open != $dir_midia) {
		echo '<ul class="pager">
						<li class="previous">
						<a href="direct.php?midia='.$dir_back.'">&larr; Anterior</a>
						</li>
						<!-- <li class="next">
						<a href="#">Próximo &rarr;</a>
						</li> -->
					</ul>';
		}
	echo '</div>';
	echo '</div>';
	echo '</div>';


	// fechar diretorio apos abertura
	$dir_info->close();

	// DEBUG
	// echo '<hr>';
	// echo 'Abrir '.$dir_open;
 ?>

