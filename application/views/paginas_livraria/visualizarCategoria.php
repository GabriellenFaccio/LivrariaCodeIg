<!DOCTYPE html>
<html>
<head>
	<title>Visualizar Categoria</title>
</head>
<body>
<h3>Visualizar Categoria </h3>
		<form action="buscarCategoria" method="POST">
			<?php foreach($catSelect as $row): ?>
				Id : 		   <?php echo $row->cat_id;?><br><br>
				Nome : 		   <?php echo $row->cat_nome;?><br><br>
				Status : 	   <?php echo $row->cat_status;?><br><br>
				Data Criacao : <?php echo $row->cat_data_criacao;?><br><br>
				Data Modifi. : <?php echo $row->cat_data_modificacao;?><br><br>
				Descricao :    <?php echo $row->cat_descricao;?><br><br>
			<?php endforeach; ?>
			<button><a href="<?=base_url('Categorias/buscarCategoria')?>">Voltar</a></button>
		</form>
</body>
</html>