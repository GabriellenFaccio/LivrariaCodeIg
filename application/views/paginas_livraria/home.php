<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Home</title>
	<style type="text/css">
		button{
			padding-top: 5px;
			padding-bottom: 5px;
			width: 200px;
			text-decoration: none;
			display: inline-block;
			background-color:  #DA81F5;
            border-left: 2px solid #F6CEEC;
            border-right: 2px solid #F6CEEC;
            border-top: 2px solid #DA81F5;
            border-bottom: 2px solid #DA81F5;
			border-radius: 10px;
			position: relative;
		}
		button:hover{background-color: pink;}

		#container{
			width: 100%;
			height: 100%;
			padding-left: 150px;
			padding-right: 150px;
		}

		#livrosInfo{
			background-color: #A9F5E1;
			width: 75%;
			height: 300px;
			margin-bottom: 10px;
			display: inline-block;
		}

		#categoriasInfo{
			background-color: #8181F7;
			width: 60%;
			height: 300px;
			display: inline-block;
		}

		#painelOpcoes{
			background-color: #DA81F5;
			width: 15%;
			height: 300px;
			display: inline-block;
			position: absolute;
		}

		#cabecalho{
			background-color: #DA81F5;
			padding: 4px;
			margin: -9px;
			width: 1350px;
			height: 30px;
		}

		a:link{text-decoration:none;} 
	</style>
</head>
<body>
	<div id="cabecalho"> Logo </div>

	<hr>

	<div id="container">
		<div id="livrosInfo">Livros</div>

		<div id="categoriasInfo">Categorias</div>

		<div id="painelOpcoes">
		**Painel Opções**<br>
			<button id="cadastrarLivro"><a href="Livros/novoLivro">Cadastrar Livro</a></button><br>
			<button id="cadastrarCategoria"><a href="Categorias/novaCategoria">Cadastrar Categoria</a></button><br>

			<button id="BuscarLivro"><a href="Livros/buscarLivro">Buscar Livro</a></button><br>
			<button id="BuscarCategoria"><a href="Categorias/buscarCategoria">Buscar Categoria</a></button><br>
		</div>
	</div>
</body>
</html>