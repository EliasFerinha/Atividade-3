<?php
	$info = $_POST; //recebe os dados
	$info = implode(" / ", $info); //criação de array
	$ficha = fopen("produtosQuestao7.txt", "a+"); //arquivo txt
	fwrite($ficha, $info."\n"); //escrevendo dados no arquivo
	fclose($ficha); //fechando arquivo
	header("location: listaProdutoQuestao7.php"); //redirecionar para a tabela com a listagem

?>
