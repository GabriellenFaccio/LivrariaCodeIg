<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Livro</title>
</head>
<body>
	<div id="container">
		<form action="cadastrarNovoLivro" method="POST">
			Titulo:
			<input type="text" name="titulo"><br><br>

			Autor:
			<input type="text" name="autor"><br><br>

			Categoria:
			<select name="categoria">
				<option>Categoria 1</option>
				<option>Categoria 2</option>
			</select><br><br>

			Status:
			<select name="status">
				<option>Disponivel</option>
				<option>Emprestado</option>
				<option>Manutenção</option>
			</select><br><br>

			Data de Emprestimo:
			<input type="text" name="data_emp"><br><br>

			Num. de Paginas:
			<input type="text" name="num_pag"><br><br>

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