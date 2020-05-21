<!DOCTYPE html>
<html>
<head>
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

		.livros{
			background-color: white;
			border-radius: 30px;
			width: 100px;
			height: 100px;
			padding: 40px;
			margin: 10px;
			display: inline-block;
			position: relative;
		}

		.livros button{
			position: center;
			width: 100px;
			display: inline-block;
		}

		td{
			padding-left: 15px;
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
		<div id="livrosInfo">
			Principais Livros
			<div id="livrosTop">
			<?php
				foreach ($dadosLivCat as $row) {
					echo '<div class="livros">';
					echo 'Livro :  '.$row->liv_titulo;
					echo '<button><a href="Livros/visualizarLivro/'.$row->liv_id.'">Visualizar</a></button>';
					echo '</div>';
				}
			?>
			</div>
		</div>

		<div id="categoriasInfo">
			<table>
				<tr>
					<td>Categorias</td>
					<td>Livros</td>
					<td>Livros Disponíveis</td>
					<td>Livros Emprestados</td>
					<td>Livros Manutenção </td>
				</tr>
					<?php
					$i = $livD = $livE = $livM = 0;
						foreach ($dadosCat as $value) {
							echo "<tr>";
							echo "<td>".$value->cat_nome."</td>";
							foreach ($dadosLivCat as $row) {
								if ($row->cat_id == $value->cat_id) {
									$i++;
									echo "<td>".$i."</td>";

									if ($row->liv_status == "Disponivel") {
										$livD++;
										echo "<td>".$livD."</td>";
									}else{
										echo "<td> 0 </td>";
									}

									if ($row->liv_status == "Emprestado") {
										$livE++;
										echo "<td>".$livE."</td>";
									}else{
										echo "<td> 0 </td>";
									}

									if ($row->liv_status == "Manutenção") {
										$livM++;
										echo "<td>".$livM."</td>";
									}else{
										echo "<td> 0 </td>";
									}


								}
						    }
							$i = $livD = $livE = $livM = 0;
							echo "</tr>";
						}
						
					?>
				</tr>
			</table>
		</div>

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