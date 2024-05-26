<?php
	$params_json = file_get_contents("../index.json");
	$params_file = json_decode($params_json);
	$params = $params_file->index;
	//var_dump($params);
	$array = [];
	$arr = (array) $params;
	foreach ($arr as $key => $value) {
		$ar = (array) $value;
		foreach ($ar as $key1 => $value1) {
			$ar1 = (array) $value1;
			if ($key == "banner") {
				array_push($array, $key . "_" . $key1);
			} else {
				foreach ($ar1 as $key2 => $value2) {
					$ar2 = (array) $value2;
					if ($key1 == "bluebanner" || $key1 == "graybanner") {
						array_push($array, $key . "_" . $key1 . "_" . $key2);
					} else {
						foreach ($ar2 as $key3 => $value3) {
							array_push($array, $key . "_" . $key1 . "_" . $key2 . "_" . $key3);	
						}
					}
				}
			}
		}
	}
	//var_dump($_POST);
	for ($i=0; $i < count($array); $i++) { 
		$this_r = $_POST[$array[$i]];
		$keys = explode("_", $array[$i]);
		if (count($keys) == 2) {
			echo "$this_r";
			$k0 = $keys[0];
			$k1 = $keys[1];
			$params_file->index->$k0->$k1 = $this_r;
		} else if (count($keys) == 3) {
			$k0 = $keys[0];
			$k1 = $keys[1];
			$k2 = $keys[2];
			$params_file->index->$k0->$k1->$k2 = $this_r;
		} else if (count($keys) == 4) {
			$k0 = $keys[0];
			$k1 = $keys[1];
			$k2 = $keys[2];
			$k3 = $keys[3];
			$params_file->index->$k0->$k1->$k2->$k3 = $this_r;
		}
		echo "<br>";
	}

	$js = json_encode($params_file);
	$f = fopen("../index.json", "w");
	$w = fwrite($f, $js);
	$f1 = fopen("../iindex.json", "w");
	$w1 = fwrite($f1, $js);

	var_dump($w);
	var_dump($w1);
?>