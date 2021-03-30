<?php
	session_start();
	session_destroy();
	header("location: indexQuestao9.php?msg=session_ending");
?>