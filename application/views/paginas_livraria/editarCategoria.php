<!DOCTYPE html>
<html>
<head>
	<title>Editar Categoria</title>
</head>
<body>
	<h3>Visualizar o contato </h3>
	<table> 
		<tr>
			<td>
				<form action="buscarCategoria" method="POST">
					<?php foreach($catSelect as $row): ?>
						Id : 		   <?php echo $row->cat_id;?><br><br>
						Nome : 		   <?php echo $row->cat_nome;?><br><br>
						Status : 	   <?php echo $row->cat_status;?><br><br>
						Data Criacao : <?php echo $row->cat_data_criacao;?><br><br>
						Data Modifi. : <?php echo $row->cat_data_modificacao;?><br><br>
						Descricao :    <?php echo $row->cat_descricao;?><br><br>
					<?php endforeach; ?>
					<button><a href='<?=base_url("Categorias/buscarCategoria")?>'>Voltar</a></button>
				</form>
			</td>
			<td>
				<form action='<?=base_url("Categorias/salvarUpdateCat/$row->cat_id")?>' method="POST">
					<?php foreach($catSelect as $row): ?>
						Id : 		   <?php echo $row->cat_id;?><br><br>

						Nome :
						<input type="text" name="cat_nome" id="cat_nome" value="<?php echo $row->cat_nome;?>"><br><br>

						Status :
						<select name="cat_status" id="cat_status">
							<option value="1">Ativar</option>
							<option value="1">Desativar</option>
						</select><br><br>

						Descricao :    
						<textarea name="cat_descricao" id="cat_descricao"><?php echo $row->cat_descricao;?></textarea><br><br>
					<?php endforeach; ?>
					<input type="submit" name="btnSalvar" id="btnSalvar" value="Salvar">
				</form>
			</td>
			
		</tr>
	</table>
</body>
</html>