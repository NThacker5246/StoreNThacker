<?php
	require_once '../test_func/crypto/crypto.php';	

	$block1 = $_GET["block1"];
	$block2 = $_GET["block2"];
	$block3 = $_GET["block3"];
	$block4 = $_GET["block4"];
	$block5 = $_GET["block5"];

	$key = $block1 . "-" . $block2 . "-" . $block3 . "-" . $block4 . "-" . $block5 . "-";

	function generate_key($version, $timestamp, $developer='NThacker', $encryption_key='GPT')
	{
		$ver = des_encrypt($version, $encryption_key);
		$time = des_encrypt($timestamp, $encryption_key);
		$dev = des_encrypt($developer, $encryption_key);
		$enc = des_encrypt($encryption_key, $encryption_key);

		$v1 = new Bit($ver);
		$t1 = new Bit($time);
		$d1 = new Bit($dev);
		$e1 = new Bit($enc);

		$v = $v1->GetHex();
		$t = $t1->GetHex();
		$d = $d1->GetHex();
		$e = $e1->GetHex();

		$keydate = "$v-$t-$d-$e";
		$hashdata = md5($keydate);
		$hashHEX = (utf8_decode($hashdata));
		$key = '';
		for ($i=0; $i < floor(count(count_chars($hashHEX)) / 25); $i++) { 

			$key .= $hashHEX[$i] . $hashHEX[$i+1] . $hashHEX[$i+2] . $hashHEX[$i+3] . $hashHEX[$i+4] . "-";
		}
		return $key;
	}

	$keys = generate_key("2535f", "29-2023", "NThacker", "GPT");
	$key1 = explode("-", $keys);
	$key2 = "";
	$key3 = "";
	for ($i=0; $i < count($key1); $i++) { 
		if ($i < 5) {
			$key2 .= $key1[$i];
			$key2 .= "-";
		} else {
			$key3 .= $key1[$i];
			$key3 .= "-";
		}
	}

	if ($key2 == $key || $key3 == $key) {
		echo "Activated";
		$json = json_decode(file_get_contents("system.json"));
		$json->activated = true;

		$data = json_encode($json);
		$file = fopen("system.json", "w");
		$w = fwrite($file, $data);
		fclose($file);
	} else {
		echo "Incorrect key; Try again. :\\";
	}


?>