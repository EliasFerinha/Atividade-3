<?php
  
  $participantetxt=file("participantesQuestao8.txt");
  $participantecsv = fopen('participantesQuestao8.csv', 'a+');
  foreach ($participantetxt as $participante) {
    $item=explode("-",str_replace("\n","",$participante));
    fputcsv($participantecsv,$item);             
  }
  fclose($participantecsv);
  
  // Abrindo o csv  
  $participantescsv = fopen("participantesQuestao8.csv","r");
 //print_r(fgetcsv($clientescsv));
 
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
				<h3>Lista de Inscritos</h3>
				<table class="table" border="2">
					<thead>
						<th>Nome Do Participante</th>
						<th>Cidade</th>
						<th>Idade</th>
					</thead>

					<tbody>
						<?php
	                      $row = 0;
		                    while (($item = fgetcsv($participantescsv, 0, ",")) !== FALSE) {
		                        if ($row++ == 0) {
		                            //continue;
		                     }
		                       ?>
			        	<tr>
			               <td><?php echo $item[0]; ?></td>
			               <td><?php echo $item[1]; ?></td>
			               <td><?php echo $item[2]; ?></td>
			            </tr>   
		                <?php } ?> 

					</tbody>
				</table>
				<a href="listaQuestao8.php" class="btn btn-outline-success"> Nova Inscrição </a>
			</di>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>