<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Panel</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
	<hr>
	edit news
	<form action="editnew.php" method="POST">
		<input type="text" name="id" placeholder="Current id (ЧПУ)">
		<br>
		<input type="text" name="name" placeholder="Title">
		<br>
		<input type="text" name="preview" placeholder="Prewiew Text">
		<br>
		<input type="text" name="preview_picture" placeholder="Prewiew Picture">
		<br>
		<input type="text" name="detail" placeholder="Detail text">
		<br>
		<input type="text" name="detail_picture" placeholder="Detail Picture">
		<br>
		<button type="submit">edit news</button>
	</form>
	<br>
	<hr>
	edit Tovar
	<form action="editgood.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="id" placeholder="Current id (ЧПУ)">
		<br>
		<input type="text" name="name" placeholder="Title">
		<br>
		<input type="text" name="preview" placeholder="Prewiew Text">
		<br>
		<input type="text" name="preview_picture" placeholder="Prewiew Picture">
		<br>
		<input type="text" name="detail" placeholder="Detail text">
		<br>
		<input type="text" name="detail_picture" placeholder="Detail Picture">
		<br>
		<input type="text" name="price" placeholder="Price">
		<br>
		<?php
			$json = file_get_contents("../tovary/props.json");
			$obj = json_decode($json);
			for ($i=0; $i < count($obj->data); $i++) {
			    $d = $obj->data[$i];
			    if ($obj->data[$i]->type == "file") {
			    	echo "<input type=\"file\" name=\"$d->id\" placeholder=\"$d->name\">";
			    	echo "<br>";
			    } else {
					echo "<input type=\"text\" name=\"$d->id\" placeholder=\"$d->name\">";
					echo "<br>";
				}
			}
		?>
		<br>
		<button type="submit">edit Tovar</button>
	</form>
	<br>
	<hr>
	edit Uslugu
	<form action="editservice.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="id" placeholder="Current id (ЧПУ)">
		<br>
		<input type="text" name="name" placeholder="Title">
		<br>
		<input type="text" name="preview" placeholder="Prewiew Text">
		<br>
		<input type="text" name="preview_picture" placeholder="Prewiew Picture">
		<br>
		<input type="text" name="detail" placeholder="Detail text">
		<br>
		<input type="text" name="detail_picture" placeholder="Detail Picture">
		<br>
		<input type="file" name="pricelist" placeholder="Pricelist">	
		<br>
		<input type="text" name="price" placeholder="Price">
		<br>
		<button type="submit">edit Uslugu</button>
	</form>
	<br>
	<hr>
	edit Stati
	<form action="editarcticle.php" method="POST">
		<input type="text" name="id" placeholder="Current id (ЧПУ)">
		<br>
		<input type="text" name="name" placeholder="Title">
		<br>
		<input type="text" name="preview" placeholder="Prewiew Text">
		<br>
		<input type="text" name="preview_picture" placeholder="Prewiew Picture">
		<br>
		<input type="text" name="detail" placeholder="Detail text">
		<br>
		<input type="text" name="detail_picture" placeholder="Detail Picture">
		<br>
		<input type="test" name="video" placeholder="Video link (YouTube)">
		<br>
		<button type="submit">edit Stati</button>
	</form>
	<br>
	<hr>
	<hr>
	edit Other
	<?php
		$way_data = "../db/data/table.json";
		$data2 = file_get_contents($way_data);
		$dat = json_decode($data2);
		if ($dat == null) {
			$way_data = "db/data/table.json";
			$data2 = file_get_contents($way_data);
			$dat = json_decode($data2);
		}
		$array = (array) $dat->database;
		$keys = [];
		$i = 0;
		foreach ($array as $key => $value) {
			$keys[$i] = $key;
			$i++;
		}
		//var_dump($keys);
		echo "<br>";
		for ($i=3; $i < count($keys); $i++) { 
			if ($keys[$i] != "news" && $keys[$i] != "goods" && $keys[$i] != "service" && $keys[$i] != "arcticle") {
				echo($keys[$i]);
				echo "<form action=\"editother.php\" method=\"POST\" enctype=\"multipart/form-data\">
						<input type=\"hidden\" name=\"dbname\" value=\"$keys[$i]\">
						<input type=\"text\" name=\"id\" placeholder=\"Element id (ЧПУ)\">
						<br>
						<input type=\"text\" name=\"name\" placeholder=\"Title\">
						<br>
						<input type=\"text\" name=\"preview\" placeholder=\"Prewiew Text\">
						<br>
						<input type=\"text\" name=\"preview_picture\" placeholder=\"Prewiew Picture\">
						<br>
						<input type=\"text\" name=\"detail\" placeholder=\"Detail text\">
						<br>
						<input type=\"text\" name=\"detail_picture\" placeholder=\"Detail Picture\">
						<br>
				";
				$json = file_get_contents("../tovary/props.json");
				$obj = json_decode($json);
				for ($j=0; $j < count($obj->data); $j++) {
				    $d = $obj->data[$j];
				    if ($obj->data[$j]->type == "file") {
				    	echo "<input type=\"file\" name=\"$d->id\" placeholder=\"$d->name\">";
				    	echo "<br>";
				    } else {
						echo "<input type=\"text\" name=\"$d->id\" placeholder=\"$d->name\">";
						echo "<br>";
					}
				}
		
				echo "	
						<br>
						<button type=\"submit\">Send Tovar</button>
					</form>
					<hr>
				";
			}
			
			
		}
	?>
</body>
</html>