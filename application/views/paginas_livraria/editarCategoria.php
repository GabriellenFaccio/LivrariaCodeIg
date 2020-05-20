<!DOCTYPE html>
<html>
<head>
	<title>Editar Categoria</title>
</head>
<body>
	<h3>Editar Categoria </h3>
	<table border="1">
		<tr>
			<td>Id</td>
			<td>Nome</td>
			<td>Status</td>
			<td>Data Criacao</td>
			<td>Data Modifi.</td>
			<td>Descricao</td>
		</tr>
		<tr>
			<?php foreach($catSelect as $row): ?>
				<td><?php echo $row->cat_id;?></td>
				<td><?php echo $row->cat_nome;?></td>
				<td><?php echo $row->cat_status;?></td>
				<td><?php echo $row->cat_data_criacao;?></td>
				<td><?php echo $row->cat_data_modificacao;?></td>
				<td><?php echo $row->cat_descricao;?></td>
			<?php endforeach; ?>
		</tr>
	</table>
	<button><a href='<?=base_url("Categorias/buscarCategoria")?>'>Voltar</a></button><br><br><br>

				<form action='<?=base_url("Categorias/salvarUpdateCat/$row->cat_id")?>' method="POST">

					<?php foreach($catSelect as $row): ?>
						Id : 		   <?php echo $row->cat_id;?><br><br>

						Nome :
						<input type="text" name="cat_nome" id="cat_nome" value="<?php echo $row->cat_nome;?>"><br><br>

						Status :
						<select name="cat_status" id="cat_status">
							<option value="1" <?=($row->cat_status == 1? 'selected="true"': "")?>>Ativar</option>
							<option value="0" <?=($row->cat_status == 0? 'selected="true"': "")?>>Desativar</option>
						</select><br><br>

						Descricao :    
						<textarea name="cat_descricao" id="cat_descricao"><?php echo $row->cat_descricao;?></textarea><br><br>
					<?php endforeach; ?>
					<input type="submit" name="btnSalvar" id="btnSalvar" value="Salvar">
				</form>
</body>
</html>