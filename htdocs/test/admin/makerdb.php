<?php
	require_once '../db/db.php';
	$dbname = $_POST['dbname'];
	CreateDB($dbname);

	if(isset($_POST['check'])){
		if (!file_exists($_POST['folder'])) {
			$file = fopen($_POST['folder'], "w");
			$object = (object) array('data' => (object) array('database' => $dbname));
			$json = json_encode($object);
			$write = fwrite($file, $json);
		}
		
	}
?>