<?php
	$ardWay = $_GET["addressString"];
	setcookie("expSave", $ardWay, time() + 1231453515, "/");
	if (!empty($ardWay)) {
		$files = scandir("$ardWay");
		echo "<br>";
		echo "<ul class=\"list-group\">";
		foreach ($files as $file) {
			if (is_dir($ardWay . "/" . $file)) {
				echo "<li class=\"list-group-item\" onclick=\"document.getElementById('wayAd').value += '/" . $file . "'; document.getElementById('way').value += '/" . $file . "'; document.forms.address.onsubmit(null);\" style=\"margin: 0px !important; padding: 0px; width: 250px !important;\"><button class=\"btn\" style=\"margin: 0px; padding: 0px;\">" . $file . "</button></li>";
			} else {
				echo "<li class=\"list-group-item\" onclick=\"document.getElementById('sav').href = '" . $ardWay . "/" . $file . "';\" style=\"margin: 0px !important; padding: 0px; width: 250px !important;\"><button class=\"btn\" style=\"margin: 0px; padding: 0px;\">" . $file . "</button></li>";
			}
		    
		}
		echo "</ul>";

	}
?>