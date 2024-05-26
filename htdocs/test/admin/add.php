<?php
	$name = $_POST["name"];
	$id = $_POST["id"];
	$type = $_POST["type"];

	$array = array('id' => $id, 'name' => $name, 'type' => $type));
	$obj = (object) $array;
	$way = "../tovary/props.json";
	var_dump($obj);

	$dataset = file_get_contents('../tovary/props.json');

	if (!empty($dataset)) {
		$set = json_decode($dataset);
		$set->data[count($set->data)] = $obj;
		$stmt = json_encode($set);
		echo $stmt;
		$f = fopen($way, "w");
		$wr = fwrite($f, $stmt);


	} else {
		$arr = (object) (array('data' => $obj));
		//var_dump($arr);
		//echo "<br>";
		//echo $arr->data->$id["id"];
		$df = json_encode($arr);
		$f = fopen($way, "w");
		$wr = fwrite($f, $df);
	}
	
?>