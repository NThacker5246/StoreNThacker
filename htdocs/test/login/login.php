<?php
	require_once '../users/usermanage.php';
	$login = $_POST["username"];
	$pwd = $_POST["pwd"];
	$try = Login($login, $pwd);
	if ($try) {
		setcookie("user", $login, time() + 21600, "/");
		header("Location: ../admin");
	} else {
		echo "Relogin";
		echo $try;
		//header("Location: index.php");
	}
?>