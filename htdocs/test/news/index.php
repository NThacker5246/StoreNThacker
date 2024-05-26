<?php
	require_once '../head.php';
	require_once '../footer.php';
	require_once '../db/db.php';
	require_once '../bar.php';
	ShowHeader();
?>

<div id="content" class="row d-flex" style="margin: 0px; padding: 0px;">
	<div class="col-md-9" style="margin-left: 0px; padding-right: 0px; padding-top: 0px; padding-bottom: 0px; padding-left: 0px; float: left;">
		<?php
		$data1 = ReadData("news");
		for ($i=0; $i < count($data1);) { 
			$i++;
			$way_data = "../db/data/news" . strval($i) . ".json";
			$data = file_get_contents($way_data);
			$dat = json_decode($data);
			echo "<div style=\"border: 2px solid black; border-radius: 2px;\">";
			echo "<h1 id=\"title\">" . $dat->name . "</h1>";
			echo "<p id=\"preview_picture\">" . "<img src=\"" . $dat->preview_picture . "\" >" . "</p>";
			echo "<p id=\"prewiev\">" . $dat->preview . "</p>";
			echo "
				<form action=\"show.php\" method=\"GET\">
					<input type=\"hidden\" placeholder=\"Detail\" value=" . $dat->id . " name=\"news\"style=\"margin: 0px;\">
					<button type=\"submit\" style=\"margin: 0px;\">Detail</button>
				</form>
			";
			echo "<br>";
			echo "</div>";	
		}
		?>
	</div>
	<?php
		SBar();
	?>
</div>

<?php
	ShowFooter();
?>