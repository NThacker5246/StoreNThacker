<?php
	require_once '../db/db.php';
	require_once '../head.php';
	require_once '../footer.php';
	ShowHeader("<link rel=\"stylesheet\" type=\"text/css\" href=\"../tovary/Tstyle.css\">");
	if (!empty($_COOKIE["basket"])) {
		$id = json_decode($_COOKIE["basket"]);
		//var_dump($id);
		for ($g=0; $g < count($id->arr); $g++) { 
			$data = Search("goods", $id->arr[$g]);
			echo "
				<div class=\"item col-md-3\">
					<form method=\"GET\" action=\"../tovary/show.php\">
						<h2 class=\"title\"><a href=\"\"> " . $data->name . " </a></h2>
						<a href=\"\"><img src=" . $data->preview_picture . " class=\"preview_picture\"></a>
						<p class=\"preview\">" . $data->preview . "</p>
						<p class=\"price\">" . $data->price . " <i class=\"fa fa-rub\" aria-hidden=\"true\"></i></p>
						<input type=\"hidden\" placeholder=\"Detail\" value=" . $data->id . " name=\"tovar\">
						<button type=\"submit\" class=\"btn btn-info\" aria-pressed=\"true\" style=\"border: 2px solid black; border-radius: 10px; margin-bottom: 5px;\">Просмотреть</button>
					</form>
				</div>
			";
		}
		
	} else {
		echo "Корзина пуста, давайте её наполним <a href=\"/tovary\">товарами</a>";
	}
	ShowFooter("");
?>