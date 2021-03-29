<?php
	$produtos = file("produtosQuestao7.txt");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<di class="col-md-8 offset-md-2">
				<hr>
				<h3>Lista de Produtos Cadastrados</h3>
				<table class="table">
					<thead>
						<th>Nome Do Produto</th>
						<th>Quantidade</th>
						<th>Preço</th>
					</thead>

					<tbody>
						<?php
							foreach ($produtos as $produto){
								$listas = explode("/", $produto);
						?>
							<tr>
								<td> <?=$listas [0];?> </td>
								<td> <?=$listas [1];?> </td>
								<td> <?=$listas [2];?> </td>
							</tr>

						<?php } ?>

					</tbody>
				</table>
				<a href="cadastroQuestao7.php" class="btn btn-danger"> Novo Cadastro </a>
			</di>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>