<?php
	$servName = $_GET['servName'];
	$group = $_GET['group'];
	$ip = $_GET['ip'];

	$fd = json_decode(file_get_contents("system.json"));
	$fd->ip = $ip;
	$fd->servName = $servName;
	$fd->group = $group;

	$f1 = json_encode($fd);
	$file = fopen("system.json", "w");
	$write = fwrite($file, $f1);
	fclose($file);
	echo "Saved!";

?>