<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Livro</title>
</head>
<body>
	<div id="container">
		<form action="cadastrarNovoLivro" method="POST">

			Titulo:
			<input type="text" name="liv_titulo" id="liv_titulo" placeholder="Ex: João e Maria "><br><br>

			Autor:
			<input type="text" name="liv_autor" id="liv_autor" placeholder="Ex: Desconhecido"><br><br>


			Categoria:
			<select name="cat_id" id="cat_id"> 
			<?php foreach($nomeCategoria as $row){ 
				 echo "<option value=".$row->cat_id.">".$row->cat_nome."</option>";
			} ?>
			</select><br><br>

			Status:
			<select name="liv_status" id="liv_status">
				<option value="Disponivel">Disponivel</option>
				<option value="Emprestado">Emprestado</option>
				<option value="Manutenção">Manutenção</option>
			</select><br><br>

			Num. de Paginas:
			<input type="text" name="liv_num_pag" id="liv_num_pag" placeholder=""><br><br>

			Num. de Edição:
			<input type="text" name="liv_num_edi" id="liv_num_edi"><br><br>

			Editora:
			<input type="text" name="liv_editora" id="liv_editora"><br><br>

			Descrição:<br>
			<textarea name="liv_descricao" id="liv_descricao" rows="4" cols="50">
			</textarea><br><br>

			<input type="submit" name="btnCadastrar" value="Cadastrar">
		</form>
	</div>
</body>
</html>