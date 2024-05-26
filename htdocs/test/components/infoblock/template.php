<?php
	function make_infoblock($template)
	{
		$temp = file_get_contents($template);
		$template1 = json_decode($temp);
		$db = $template1->data->database;
		$data1 =  (array) (ReadData("$db"));
		for ($i=0; $i < count($data1);) { 
			$i++;
			$way_data = "../db/data/$db" . strval($i) . ".json";
			$data = file_get_contents($way_data);
			$dat = json_decode($data);
			echo "<div style=\"border: 2px solid black; border-radius: 2px; margin: 0px;\" style=\"margin-left: 0px; padding-right: 0px; padding-top: 0px; padding-bottom: 0px;\">";
			echo "<h1 id=\"title\">" . $dat->name . "</h1>";
			echo "<p id=\"prewiev\">" . $dat->preview . "</p>";
			echo "<p id=\"preview_picture\">" . "<img src=\"" . $dat->preview_picture . "\" >" . "</p>";
			echo "
				<form action=\"show.php\" method=\"GET\">
					<input type=\"hidden\" placeholder=\"Detail\" value=" . $dat->id . " name=\"$db\"style=\"margin: 0px;\">
					<button type=\"submit\" style=\"margin: 0px;\" class=\"btn btn-info\" aria-pressed=\"true\" style=\"border: 2px solid black; border-radius: 10px;\">Detail</button>
				</form>
			";
			echo "<br>";
			echo "</div>";	
		}
	}
?>