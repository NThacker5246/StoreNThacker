<?php
	if (file_exists("../db/db.php")) {
		require_once '../db/db.php';
	} else {
		require_once 'db/db.php';
	}
	
	function make_catalog($template)
	{
		$temp = file_get_contents($template);
		$template1 = json_decode($temp);
		$db = $template1->data->database;
		$data1 = ReadData("$db");
		for ($i=0; $i < count((array) $data1);) { 
			$i++;
			$way_data = "../db/data/$db" . strval($i) . ".json";
			$data = file_get_contents($way_data);
			$dat = json_decode($data);
			
				/*echo "<h1 class=\"title\">" . $dat->name . "</h1>";
				echo "<p class=\"prewiev\">" . $dat->preview . "</p>";
				echo "<p class=\"preview_picture\">" . "<img src=\"" . $dat->preview_picture . "\" >" . "</p>";
				echo "<p class=\"detail\">" . $dat->detail . "</p>";
				echo "<p class=\"detail_picture\">" . "<img src=\"" . $dat->detail_picture . "\" >" . "</p>";*/
			echo "
				<div class=\"col-md-3 item\">
					<form method=\"GET\" action=\"show.php\">
						<h2 class=\"title\"><a href=\"\"> " . $dat->name . " </a></h2>
						<a href=\"\"><img src=" . $dat->preview_picture . " class=\"preview_picture\" width\"24%\"></a>
						<p class=\"preview\">" . $dat->preview . "</p>
						<p class=\"price\"style=\"margin-bottom: 0px;\">" . $dat->price . " <i class=\"fa fa-rub\" aria-hidden=\"true\"></i></p>
						<input type=\"hidden\" placeholder=\"Detail\" value=" . $dat->id . " name=\"tovar\"style=\"margin: 0px;\">
						<button type=\"submit\" style=\"margin: 0px;\" class=\"btn btn-info\" aria-pressed=\"true\" style=\"border: 2px solid black; border-radius: 10px;\">Detail</button>
					</form>
				</div>
			";	
		}
	}
?>