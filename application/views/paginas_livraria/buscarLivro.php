<!DOCTYPE html>
<html>
<head>
	<title>Buscar Livro</title>
</head>
<body>
	<table>
		<tr></tr>
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

		<?php foreach($dadosLivros as $row): ?>
		<tr>
			<td> <?php echo $row->cat_id ?> </td>
			<td> <?php echo $row->liv_titulo ?> </td>
			<td> <?php echo $row->liv_status ?> </td>
			<td> <?php echo $row->liv_num_pagina ?> </td>
			<td> <?php echo $row->liv_num_edicao ?> </td>
			<td> <?php echo $row->liv_autor ?> </td>
			<td> <?php echo $row->liv_editora ?> </td>
			<td> <?php echo $row->liv_descricao ?> </td>
			<input type="hidden" name="liv_id" id="liv_id" value=" <?php echo $row->liv_id ?> ">

			<td><button id="visualizarContato"><a href="visualizarLivro/<?= $row->liv_id; ?>">Visualizar</a></button></td>
			<td><button id="editarContato"><a href="editarLivros/<?= $row->liv_id; ?>">Editar</a></button></td>
			<td><button id="excluirContato"><a href="excluirLivros/<?= $row->liv_id; ?>">Excluir</a></button></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>