<!DOCTYPE html>
<html>
<head>
	<title>Editar Livro</title>
</head>
<body>
	<h3>Editar Livro </h3>
	<table border="1">
		<tr>
			<td><h4>Categoria</h4></td>
			<td><h4>Titulo</h4></td>
			<td><h4>Status</h4></td>
			<td><h4>Num.Páginas</h4></td>
			<td><h4>Num.Edicao</h4></td>
			<td><h4>Autor</h4></td>
			<td><h4>Editora</h4></td>
			<td><h4>Descricao</h4></td>
		</tr>

		<?php foreach($livSelect as $row): ?>
		<tr>
			<td> <?php echo $row->cat_id ?> </td>
			<td> <?php echo $row->liv_titulo ?> </td>
			<td> <?php echo $row->liv_status ?> </td>
			<td> <?php echo $row->liv_num_pagina ?> </td>
			<td> <?php echo $row->liv_num_edicao ?> </td>
			<td> <?php echo $row->liv_autor ?> </td>
			<td> <?php echo $row->liv_editora ?> </td>
			<td> <?php echo $row->liv_descricao ?> </td>
			<?php endforeach; ?>
		</tr>
	</table>
	<button><a href='<?=base_url("Livros/buscarLivro")?>'>Voltar</a></button><br><br><br>

		<form action='<?=base_url("Livros/salvarUpdateLiv/$row->liv_id")?>' method="POST">

			Titulo:
			<input type="text" name="liv_titulo" id="liv_titulo" value="<?php echo $row->liv_titulo ?>"><br><br>

			Autor:
			<input type="text" name="liv_autor" id="liv_autor" value="<?php echo $row->liv_autor ?>"><br><br>


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
			<input type="text" name="liv_num_pagina" id="liv_num_pagina" value="<?php echo $row->liv_num_pagina ?>"><br><br>

			Num. de Edição:
			<input type="text" name="liv_num_edi" id="liv_num_edi" value="<?php echo $row->liv_num_edicao ?>"><br><br>

			Editora:
			<input type="text" name="liv_editora" id="liv_editora" value="<?php echo $row->liv_editora ?>"><br><br>

			Descrição:<br>
			<textarea name="liv_descricao" id="liv_descricao" rows="4" cols="50">
				<?php echo $row->liv_descricao ?>
			</textarea><br><br>

			<input type="submit" name="btnSalvar" id="btnSalvar" value="Salvar">	
		</form>
</body>
</html>