<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Categoria</title>
	<style type="text/css">
		input{
			padding-right: 10px;
		}
	</style>
</head>
<body>
 	<form action="cadastrarNovaCategoria" method="POST">
 		<h3>Cadastro de Categorias</h3>
 		Nome :
 		<input type="text" name="cat_nome" id="cat_nome" placeholder="Ex: Suspense, Romande, ..."><br><br>

 		Status:
 		<select name="cat_status" id="cat_status">
 			<option>Ativada</option>
 			<option>Desativada</option>
 		</select>
 		<br><br>

 		Data de Criacao:
 		<input type="datetime-local" name="cat_data_criacao" id="cat_data_criacao" placeholder="AAAA/MM/DD  HH:MM:SS">
 		<br><br>

 		Data de Modificação:
 		<input type="datetime-local" name="cat_data_modificacao" id="cat_data_modificacao" placeholder="AAAA/MM/DD  HH:MM:SS">
 		<br><br>

 		<input type="submit" name="btnCadastraCat" id="btnCadastraCat" value="Inserir">
 	</form>
</body>
</html>