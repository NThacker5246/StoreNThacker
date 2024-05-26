<?php
	require_once '../db/db.php';
	$name = $_POST["name"];
	$id = $_POST["id"];
	$preview = $_POST["preview"];
	$preview_picture = $_POST["preview_picture"];
	$detail = $_POST["detail"];
	$detail_picture = $_POST["detail_picture"];

	$array = array('name' => $name, 'id' => $id,'preview' => $preview, 'preview_picture' => $preview_picture, 'detail' => $detail, 'detail_picture' => $detail_picture);
	try {
		DataEdit('news', $array, 'news', $id);
		echo 'It\'s works';
	} catch (Exception $e) {
		die("System halted! By " . strval($e));
	}


?>