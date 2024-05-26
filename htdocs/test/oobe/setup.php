<?php
	$video = $_GET["video"];
	if ($video == "true") {
		$file_D = json_decode(file_get_contents("../admin/system.json"));
		$file_D->video = true;
		$text = json_encode($file_D);
		$file = fopen("../admin/system.json", "w");
		$w = fwrite($file, $text);
		fclose($file);
	}

	$nick = $_GET["nick"];
	$name = $_GET["name"];
	require_once '../users/usermanage.php';
	AddUser($name, $nick, "", "Administrator", false);
	$file_D = json_decode(file_get_contents("../admin/system.json"));
	$file_D->user = $name;
	$text = json_encode($file_D);
	$file = fopen("../admin/system.json", "w");
	$w = fwrite($file, $text);
	fclose($file);


?>