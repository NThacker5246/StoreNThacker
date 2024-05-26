<?php
	require_once '../db/db.php';
	$name = $_POST["name"];
	$id = $_POST["id"];
	$preview = $_POST["preview"];
	$preview_picture = $_POST["preview_picture"];
	$detail = $_POST["detail"];
	$detail_picture = $_POST["detail_picture"];
	$price = $_POST["price"];

	var_dump($_FILES);
	$file = $_FILES['pricelist'];
	$file_name = $file['name'];
	$file_tmp = $file['tmp_name'];
	$file_size = $file['size'];
	$file_error = $file['error'];
	if($file_error == 0){
    	$destination = '../db/data/files/' . $file_name;
    	move_uploaded_file($file_tmp, $destination);
    	echo 'Файл успешно загружен на сервер.';
    }

	$array = array('name' => $name, 'id' => $id, 'preview' => $preview, 'preview_picture' => $preview_picture, 'detail' => $detail, 'detail_picture' => $detail_picture, 'price' => $price, 'pricelist' => $destination);
	try {
		DataInsert('service', $array, 'service');
		echo 'It\'s works';
	} catch (Exception $e) {
		die("System halted! By " . strval($e));
	}


?>