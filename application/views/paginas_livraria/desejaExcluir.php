<!DOCTYPE html>
<html>
<head>
	<title>Deseja Excluir</title>
</head>
<body>
	<form action='excluirCategoria/$row->cat_id' method="POST">
		
			
		Deseja realmente Excluir ?<br><br>

		** Selecione uma nova categoria para que os livros se adequem.<br><br>

		Categoria:
		<select name="newCategoria" id="newCategoria"> 
			<?php foreach($categorias as $row){ 
				// arrumar o model para ele devolver um unica categoria
				 echo "<option value=".$row->cat_id.">".$row->cat_nome."</option>";
				 
			} ?>
		</select><br><br>
		<input type="hidden" name="catAntiga" id="catAntiga" value="<?php echo $row->cat_id;?>">

		
		<input type="submit" name="btnSalvar" id="btnSalvar" value="Salvar">
		<button><a href='<?=base_url("Categorias/excluirCategoria/$row->cat_id")?>'>Teste</a></button>

		<button><a href='<?=base_url("Categorias/buscarCategoria")?>'>Voltar</a></button>
	</form>
</body>
</html>