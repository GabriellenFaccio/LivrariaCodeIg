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
 			<option value="Ativada">Ativada</option>
 			<option value="Desativada">Desativada</option>
 		</select>
 		<br><br>

 		Descrição:
 		<input type="textarea" name="cat_descricao" id="cat_descricao" placeholder="Descricao">
 		<br><br>

 		<input type="submit" name="btnCadastraCat" id="btnCadastraCat" value="Inserir">
 	</form>
</body>
</html>