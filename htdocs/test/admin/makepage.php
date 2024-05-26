<!DOCTYPE html>
<html style="height: 100%;">
<head>
	<meta charset="utf-8">
	<title>Make a page</title>
	<link href="bootstrap.css" rel="stylesheet" type="text/css">
	<?php
		$allcompjson = file_get_contents("../components/all.json");
		$allcomp = json_decode($allcompjson)
	?>
</head>
<body style="height: 100%;">
	<div class="container-fluid d-flex py-3" style="height: 100%; width: 100%; justify-content: center; align-content: center; align-items: center;">
		<div class="py-3" style="justify-content: center; width: 50%; border: 5px solid black; border-radius: 5px;">
			<div class="text-center"><p style="font-size: 25px; font-weight: bold;">Page adding wizard</p></div>
			<div style="font-size: 18px;">
				<div>
					<p>To add you have to tell us about this page</p>
					<form method="POST" action="makerpage.php">
						Name of page (directory)
						<input type="text" name="name">
						<br>
						Add to up menu?
						<input type="checkbox" name="menu" class="checkbox" value="menu" id="menu">
						<br>
						Name of menu select
						<input type="text" name="nameof" id="nameof">
						<br>
						Other:
						<br>
						Is that has any infoblocks 
						<input type="checkbox" name="infoblocks" class="checkbox" value="infoblocks" id="infoblocks">
						<br>
						<!--
						Select database
						<select name="database" id="dbname">
							<option value="Testing">Testing</option>
						</select>
						<br>
						-->
						Optional components
						<input type="checkbox" name="optcom" id="optcom">
						<br>
						<select name="optcomp" id="optcomp">
							<?php
								for ($i=0; $i < count($allcomp->array1); $i++) { 
									echo "<option value=\"" . $allcomp->array1[$i] . "\">" . $allcomp->array1[$i] . "</option>";
								}
							?>
						</select>
						<br>
						Way to template
						<input type="text" name="way" value="../templates/" id="dbname">
						<br>
						<button type="submit" class="btn btn-primary">Next></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script type="text/javascript" src="set.js"></script>
</body>
</html>