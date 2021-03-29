<?php
	$info = $_GET; //recebe os dados
	$info = implode(" / ", $info); //criação de array
	$ficha = fopen("atletasQuestao6.txt", "a+"); //arquivo txt
	fwrite($ficha, $info."\n"); //escrevendo dados no arquivo
	fclose($ficha); //fechando arquivo
	header("location: fichaAtletasQuestao6.php"); //redirecionar para a tabela com a listagem

?>

