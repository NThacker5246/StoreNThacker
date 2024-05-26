<?php
	require_once '../db/db.php';
	$id = $_GET["Basket"];
	if (!empty($_COOKIE["basket"])) {
		$data = json_decode($_COOKIE["basket"]);
		$data->arr[count($data->arr)] = $id;
		$json = json_encode($data);
		setcookie("basket", $json, time()+2592000, "/");
		echo $json;
		header("Location: ../personal/basket.php");
		//header("Location: ../personal/basket.php");
	} else {
		$arr = array('arr' => array(0 => $id,),);
		$obj = (object) $arr;
		$js = json_encode($obj);
		setcookie("basket", $js, time()+2592000, "/");
		echo "test";		
		header("Location: ../personal/basket.php");
	}
?>