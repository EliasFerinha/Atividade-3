<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	
</head>
<body>
	<div class="container">
		<div class="row">
			<di class="col-mod-8 offset-mod-2">
				<h3>Cadastro De Produto</h3>
				<form action="cadastroProdutoQuestao7.php" method="post">
					<label> Nome do Produto </label>
					<input type="text" class="form-control" name="nomeProduto" placeholder="Nome"></input><br>

					<label> Quantidade </label>
					<input type="text" class="form-control" name="quantidadeProduto" placeholder="Quantidade"></input><br>

					<label> Preço </label>
					<input type="text" class="form-control" name="precoProduto" placeholder="Preço"></input><br>

					<button type="submit" class="btn btn-outline-warning btn-lg">Cadastrar</button>
				</form>
			</di>
		</div>

	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>