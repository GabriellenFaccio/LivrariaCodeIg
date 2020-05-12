<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Livro</title>
</head>
<body>
	<div id="container">
		<form action="cadastrarNovoLivro" method="POST">
			Titulo:
			<input type="text" name="liv_titulo" id="liv_titulo" placeholder="Ex: José F. F."><br><br>

			Autor:
			<input type="text" name="liv_autor" id="liv_autor" placeholder="Ex: Desconhecido"><br><br>

			Categoria:
			<select name="liv_categoria" id="liv_categoria">
				<option>Categoria 1</option>
				<option>Animacao</option>
			</select><br><br>

			Status:
			<select name="liv_status" id="liv_status">
				<option>Disponivel</option>
				<option>Emprestado</option>
				<option>Manutenção</option>
			</select><br><br>

			Num. de Paginas:
			<input type="text" name="liv_num_pag" id="liv_num_pag" placeholder=""><br><br>

			Num. de Edição:
			<input type="text" name="num_edi"><br><br>

			Editora:
			<input type="text" name="editora"><br><br>

			Descrição:
			<input type="text" name="descricao"><br><br>


			<input type="submit" name="btnCadastrar" value="Cadastrar">
		</form>
	</div>
</body>
</html>