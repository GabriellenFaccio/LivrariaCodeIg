<!DOCTYPE html>
<html>
<head>
	<title>Visualizar Livro</title>
</head>
<body>
	<?php
		foreach ($livroVis as $row) {
			echo 'Livro :  '.$row->liv_titulo;
		}
	?>
</body>
</html>