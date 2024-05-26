<!DOCTYPE html>
<html style="height: 100%;">
<head>
	<meta charset="utf-8">
	<title>Make a database</title>
	<link href="bootstrap.css" rel="stylesheet" type="text/css">
	<?php
		$allcompjson = file_get_contents("../components/all.json");
		$allcomp = json_decode($allcompjson)
	?>
</head>
<body style="height: 100%;">
	<div class="container-fluid d-flex py-3" style="height: 100%; width: 100%; justify-content: center; align-content: center; align-items: center;">
		<div class="py-3" style="justify-content: center; width: 50%; border: 5px solid black; border-radius: 5px;">
			<div class="text-center"><p style="font-size: 25px; font-weight: bold;">Database adding wizard</p><hr></div>
			<div style="font-size: 18px;">
				<form method="POST" action="makerdb.php">
					Enter name
					<input type="text" name="dbname" placeholder="Database name"><br>
					Need add component template?
					<input type="checkbox" name="check" id="kek"><br>
					Select component
					<select name="typeofcomponent" id="select"><br>
						<option value="none">None</option>
						<option value="infoblock">Infoblock</option>
						<option value="catalog">Catalog</option>
					</select><br>
					Folder
					<input type="text" name="folder" value="../templates/" id="folder"><br>
					<button type="submit">Create database</button>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script type="text/javascript" src="db.js"></script>
</body>
</html>