<!DOCTYPE html>
<html>
<head>
	<title>Deseja Excluir</title>
</head>
<body>
	<form action='<?=base_url("Categorias/excluirCategoria/$idCategoria")?>' method="POST">
		
		Deseja realmente Excluir?<br><br>

		** você terá que transfirir os livros dessa categoria para outra.<br><br>

		Categoria:
		<select name="newCategoria" id="newCategoria">
			<?php foreach($allCatMenosUma as $row){
				echo "<option value= \"".$row->cat_id."\">".$row->cat_nome."</option>";
			}?>
		</select><br><br><br>

		<input type="submit" name="btnConfirmar" id="btnConfirmar" value="Confirmar">
		<button><a href='<?=base_url("Categorias/buscarCategoria")?>'>Voltar</a></button>
		
	</form>
</body>
</html>