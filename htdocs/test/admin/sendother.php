<?php
	$way_data = "../db/data/table.json";
	$data2 = file_get_contents($way_data);
	$dat = json_decode($data2);
	if ($dat == null) {
		$way_data = "db/data/table.json";
		$data2 = file_get_contents($way_data);
		$dat = json_decode($data2);
	}
	$array = (array) $dat->database;
	$keys = [];
	$i = 0;
	foreach ($array as $key => $value) {
		$keys[$i] = $key;
		$i++;
	}

	require_once '../db/db.php';
	$name = $_POST["name"];
	$id = $_POST["id"];
	$preview = $_POST["preview"];
	$preview_picture = $_POST["preview_picture"];
	$detail = $_POST["detail"];
	$detail_picture = $_POST["detail_picture"];
	$json = file_get_contents("../tovary/props.json");
	$obj = json_decode($json);
	$props = [];
	for ($i=0; $i < count($obj->data); $i++) {
	    $d = (object) $obj->data[$i];
	    var_dump($d);
		if ($obj->data[$i]->type == "file") {
			$file = $_FILES["$d->id"];
			$file_name = $file['name'];
			$file_tmp = $file['tmp_name'];
			$file_size = $file['size'];
			$file_error = $file['error'];
			if($file_error == 0){
		    	$destination = '../db/data/files/' . $file_name;
		    	move_uploaded_file($file_tmp, $destination);
		    	$props["$d->id"] = $destination;
		    }
		} else {
			$props["$d->id"] = $_POST["$d->id"];
		}
	}


	$array = array('name' => $name, 'id' => $id, 'preview' => $preview, 'preview_picture' => $preview_picture, 'detail' => $detail, 'detail_picture' => $detail_picture, 'props' => $props);
	$CurDB = $_POST['dbname'];
	for ($i=0; $i < count($keys); $i++) { 
		if ($CurDB == $keys[$i]) {
			DataInsert($CurDB, $array, $CurDB);
		}
	}

?>