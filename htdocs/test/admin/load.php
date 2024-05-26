<?php
	$way = $_GET['way'];

	$data = file_get_contents($way);
	echo "$data"; 
?>