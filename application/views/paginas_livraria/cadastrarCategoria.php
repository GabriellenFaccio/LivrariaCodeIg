<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Categoria</title>
	<style type="text/css">
		input{ padding-right: 10px;}
	</style>
</head>
<body>
 	<form action="cadastrarNovaCategoria" method="POST">
 		<h3>Cadastro de Categorias</h3>
 		Nome :
 		<input type="text" name="cat_nome" id="cat_nome" placeholder="Ex: Suspense, Romande, ..."><br><br>

 		Status:
 		<select name="cat_status" id="cat_status">
 			<option value="1">Ativada</option>
 			<option value="0">Desativada</option>
 		</select>
 		<br><br>

 		Descrição:<br>
 		<textarea name="cat_descricao" id="cat_descricao" rows="4" cols="30"></textarea>
 		<br><br>

 		<input type="submit" name="btnCadastraCat" id="btnCadastraCat" value="Inserir">
 	</form>
</body>
</html>