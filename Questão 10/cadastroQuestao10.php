<!DOCTYPE html>
<html>
<head>
	<title>Cadastro UTD</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	
</head>
<body>
	<div class="container">
		<div class="row">
			<di class="col-mod-8 offset-mod-2">
				<hr>
				<h3>Cadastro Da UTD Em Curso</h3>
				<form action="cadastroUsuarioQuestao10.php" method="GET">
					<label> Nome Completo </label>
					<input type="text" class="form-control" name="nomeUsuario" placeholder="Usuário"></input><br>

					<label> Data De nascimento </label>
					<input type="int" class="form-control" name="dataUsuario" placeholder="Data De Nascimento"></input><br>

					<label> Idade </label>
					<input type="number" class="form-control" name="idadeUsuario" placeholder="Idade"></input><br>

					<label> Endereço </label>
					<input type="text" class="form-control" name="endereçoUsuario" placeholder="Endereço"></input><br>

					<label> Profissão </label>
					<input type="text" class="form-control" name="profissaoUsuario" placeholder="Profissão"></input><br>

					<label> Escolaridade: </label><br>
					<input type="radio" name="grauUsuario" value="Não Informado" checked> Não Informado <br>		
					<input type="radio" name="grauUsuario" value="Ensino Médio "> Fnsino Médio <br>
					<input type="radio" name="grauUsuario" value="Ensino Superior"> Ensino Superior<br>
					<input type="radio" name="grauUsuario" value="Pós Graduado"> Pós Graduado <br><br>

					<label> Curso: </label> <br>
					<select name="cursoUsuario">
		                <option value="Ideciso">Escolha</option>
		                <option value="Php Web">PHP Web</option>
		                <option value="2">Banco De Mysql </option>
		                <option value="Banco De Mysql">JavaScrat</option>
		                <option value="Armazenamento Em Nubem">Armazenamento Em Nubem </option>
		            </select><br><br>

					<button type="submit" class="btn btn-warning btn-lg">Cadastrar</button>
				</form>
			</di>
		</div>

	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>