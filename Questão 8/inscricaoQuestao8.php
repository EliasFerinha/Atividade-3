<?php
	$info = $_POST; //recebe os dados
	$info = implode(" - ", $info); //criação de array
	$ficha = fopen("participantesQuestao8.txt", "a+"); //arquivo txt
	fwrite($ficha, $info."\n"); //escrevendo dados no arquivo
	fclose($ficha); //fechando arquivo
	header("location: fichaQuestao8.php"); //redirecionar para a tabela com a listagem

?>

