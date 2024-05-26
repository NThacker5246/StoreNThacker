<?php
	require_once '../head.php';
	require_once '../footer.php';
	require_once '../db/db.php';
	require_once '../components/includer.php';
	ShowHeader("<link rel=\"stylesheet\" type=\"text/css\" href=\"Tstyle.css\">");
?>

<div class="content row" style="margin-left: 0px; padding-right: 0px; padding-top: 0px; padding-bottom: 0px;">
	<?php
	/*
	$data1 = ReadData("goods");
	for ($i=0; $i < count((array) $data1);) { 
		$i++;
		$way_data = "../db/data/goods" . strval($i) . ".json";
		$data = file_get_contents($way_data);
		$dat = json_decode($data);
		
			/*echo "<h1 class=\"title\">" . $dat->name . "</h1>";
			echo "<p class=\"prewiev\">" . $dat->preview . "</p>";
			echo "<p class=\"preview_picture\">" . "<img src=\"" . $dat->preview_picture . "\" >" . "</p>";
			echo "<p class=\"detail\">" . $dat->detail . "</p>";
			echo "<p class=\"detail_picture\">" . "<img src=\"" . $dat->detail_picture . "\" >" . "</p>";
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
	*/
	IncludeComponent("catalog", "../templates/catalog/this.json")

	
	?>
</div>

<?php
	ShowFooter();
?>