<?php
	$inscritos = file("inscricaoQuestao10.txt");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Incrição UTD</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<di class="col-md-8 offset-md-2">
				<hr>
				<h3>Lista de Usuários Cadastrados</h3>
				<table class="table" border="2">
					<thead>
						<th>Aluno</th>
						<th>Data de Nasc.</th>
						<th>Idade</th>
						<th>Endereço</th>
						<th>Profissão</th>
						<th>Escolaridade</th>
						<th>Curso</th>
					</thead>

					<tbody>
						<?php
							foreach ($inscritos as $inscrito){
								$cadaastrado = explode(" / ", $inscrito);
						?>
							<tr>
								<td> <?=$cadaastrado [0];?> </td>
								<td> <?=$cadaastrado [1];?> </td>
								<td> <?=$cadaastrado [2];?> </td>
								<td> <?=$cadaastrado [3];?> </td>
								<td> <?=$cadaastrado [4];?> </td>
								<td> <?=$cadaastrado [5];?> </td>
								<td> <?=$cadaastrado [6];?> </td>
							</tr>

						<?php } ?>

					</tbody>
				</table>
				<a href="cadastroQuestao10.php" class="btn btn-outline-success"> Escrever Outro </a>
			</di>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>