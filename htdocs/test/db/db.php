<?php
function DBupdate ($database='', $name='', $cmd='', $arr='')
{
	/*
	$way_data = "../db/data/table.json";
	$data = file_get_contents($way_data);
	$dat = json_decode($data);
	$ar = json_decode($arr);
	var_dump($dat);
	$dat->databases->$database->$name->data2 = $ar;
	var_dump($dat);
	$datafile = json_encode($dat);
	$file = fopen($way_data, "w");
	$test = fwrite($file, $datafile);
	*/

	$way_data = "../db/data/table.json";
	$data = file_get_contents($way_data);
	$dat = json_decode($data);
	if ($dat == null) {
		die("WMvare #######---");
	}
	$i1 = $dat->database->$database->data;
	$i = count($i1) + 1;
	echo strval($i);
	$dat->database->$database->data[$i] = $arr . $i . ".json";
	var_dump($dat);
	$datafile = json_encode($dat);
	$file = fopen($way_data, "w");
	$test = fwrite($file, $datafile);

}

function DataInsert($database='', $data='', $name='')
{
	$way_data = "../db/data/table.json";
	$data2 = file_get_contents($way_data);
	$dat = json_decode($data2);
	if ($dat == null) {
		die("WMvare #######---");
	}
	$i1 = $dat->database->$database->data;
	$i = count($i1);
	$way = "../db/data/$name" . strval($i) . ".json";
	$json = json_encode($data);
	$file_json = fopen($way, 'w');
	$tes = fwrite($file_json, $json);
	$db = $database;
	$d = $name;
	DBupdate($db, $db,  'w', $d);
}

function ReadData($database='')
{
	$way_data = "../db/data/table.json";
	$data = file_get_contents($way_data);
	$dat = json_decode($data);
	$dats = $dat->database->$database->data;
	return $dats;
}

function Search($database='', $pid='')
{
	$way_data = "../db/data/table.json";
	$data = file_get_contents($way_data);
	$dat = json_decode($data);
	$dats = $dat->database->$database->data;
	if (is_array($dats)) {
		$iter = count($dats);
		for ($w=0; $w < $iter;) {
			
			$wa = "../db/data/" . $dats[$w];
			$target_file = file_get_contents($wa);
			$da = json_decode($target_file);
			if ($da->id == $pid) {
				return $da;
			}
			$w++; 
		}
	} else {
		$datarr = (array) $dats;
		$iter = count($datarr);
		for ($w=0; $w < $iter;) {
			$w++; 
			$wa = "../db/data/" . $datarr[$w];
			$target_file = file_get_contents($wa);
			$da = json_decode($target_file);
			if ($da->id == $pid) {
				return $da;
			}
		}
	}
}

function DataEdit($database='', $data='', $name='', $cur_id='')
{
	$way_data = "../db/data/table.json";
	$data2 = file_get_contents($way_data);
	$dat = json_decode($data2);
	if ($dat == null) {
		die("WMvare #######---");
	}
	$i1 = $dat->database->$database->data;
	if (is_array($i1) == true) {
		echo "<br>";
		var_dump($i1);
		$i = count($i1);
		for ($j=0; $j < $i;) {
			$j++; 
			$way = "../db/data/$name" . strval($j) . ".json";
			$json = json_encode($data);
			$wa = "../db/data/" . $i1[$j];
			$target_file = file_get_contents($wa);
			$da = json_decode($target_file);
			if ($da->id == $cur_id) {
				$file = fopen($wa, "w");
				$f = fwrite($file, $json);
				return true;
			}
		}
		return false;
	} else {
		$i386 = (array) $i1;
		$i = count($i386) + 1;
		for ($j=0; $j < $i;) {
			$j++; 
			$way = "../db/data/$name" . strval($j) . ".json";
			$json = json_encode($data);
			$wa = "../db/data/" . $i386[$j];
			$target_file = file_get_contents($wa);
			$da = json_decode($target_file);
			if ($da->id == $cur_id) {
				$file = fopen($wa, "w");
				$f = fwrite($file, $json);
				return true;
			}
		}
	}
	
}

function CreateDB($name)
{
	$way_data = "../db/data/table.json";
	$data2 = file_get_contents($way_data);
	$dat = json_decode($data2);
	if ($dat == null) {
		die("WMvare #######---");
	}
	$dat->database->$name = (object) (array('data' => array()));
	$dt = json_encode($dat);
	print_r($dt);
	$fil = fopen($way_data, "w");
	$res = fwrite($fil, $dt);
}

function DB_exists($db_name)
{
	$way_data = "../db/data/table.json";
	$data2 = file_get_contents($way_data);
	$dat = json_decode($data2);
	if ($dat == null) {
		$way_data = "db/data/table.json";
		$data2 = file_get_contents($way_data);
		$dat = json_decode($data2);
	}
	//print_r($dat->database);
	$array = (array) $dat->database;
	$list = array_keys($array);
	for ($i=0; $i < count($list); $i++) { 
		if ($list[$i] == $db_name) {
			return true;
		}
	}
	return false;
}


?>