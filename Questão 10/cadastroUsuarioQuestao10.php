<?php
	$dado = $_GET; //recebe os dados
	$dado = implode(" / ", $dado); //criação de array
	$ficha = fopen("inscricaoQuestao10.txt", "a+"); //arquivo txt
	fwrite($ficha, $dado."\n"); //escrevendo dados no arquivo
	fclose($ficha); //fechando arquivo
	header("location: listaDeInscritosQuestao10.php"); //redirecionar para a tabela com a listagem

?>