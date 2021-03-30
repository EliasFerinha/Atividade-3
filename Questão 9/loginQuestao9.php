<?php
if (!isset($_POST['username'])) {
	header("location: indexQuestao9.php?msg=access_denied");
}

# recendo os dados do formulario
$dados = $_POST;

# emmail
if ($dados['username'] != "fera@gmail.com"){
	header("location: indexQuestao9.php?msg=email_not_found");
} elseif ($dados['password'] != "1234"){
	header("location: indexQuestao9.php?msg=password_error");
}else{

	# aqui começa a sessão;
	$user['name'] = "Elias";
	$user['email'] = "fera@gmail.com";
	$user['cpf'] = "01010101010";
	$user['perfil'] = "admin";

	#abrir a sessão
	session_start();
	$_SESSION['teste'] = $user;

	header("location: indexQuestao9.php");
}



?>