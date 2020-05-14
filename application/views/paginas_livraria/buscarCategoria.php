<!DOCTYPE html>
<html>
<head>
	<title>Buscar Categoria</title>
</head>
<body>
	<table>
		<tr></tr>
		<tr>
			<td><h4>Nome</h4></td>
			<td><h4>Status</h4></td>
			<td><h4>Descricao</h4></td>
		</tr>

		<?php foreach($dadosCategoria as $row): ?>
		<tr>
			<td> <?php echo $row->cat_nome ?> </td>
			<td> <?php echo $row->cat_status ?> </td>
			<td> <?php echo $row->cat_descricao ?> </td>
			<input type="hidden" name="cat_id" id="cat_id" value=" <?php echo $row->cat_id ?> ">


			<td><button id="visualizarContato"><a href="visualizarCategoria/<?= $row->cat_id; ?>">Visualizar</a></button></td>
			<td><button id="editarContato"><a href="editarCategoria/<?= $row->cat_id; ?>">Editar</a></button></td>
			<td><button id="excluirContato"><a href="desejaExcluirCat/<?= $row->cat_id; ?>">Excluir</a></button></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>