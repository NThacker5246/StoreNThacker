<?php
	require_once '../users/usermanage.php';
	$name = $_POST["name"];
	$nickname = $_POST["nickname"];
	$password = $_POST["password"];
	$rights = $_POST["rights"];
	$req = $_POST["req_change_pwd"];
	AddUser($name, $nickname, $password, $rights, $req);


?>