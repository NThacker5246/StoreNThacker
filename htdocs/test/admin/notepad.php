<?php
	$text = $_GET['text'];
	$name = $_GET['name'];

	$string = explode('/n', $text);
	$endstring = "";
	for ($i=0; $i < count($string); $i++) { 
		$endstring += $string;
		$endstring += "\n";
	}

	$file = fopen($name, "w");
	$test = fwrite($file, $text);
	fclose($file);
?>