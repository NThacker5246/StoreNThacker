<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Покупатели</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<?php
		require_once '../db/db.php';
	?>
</head>
<body>
	<div class="container-fluid">
		<ul class="list-group">
			<?php
				$file = json_decode(file_get_contents('../cligents/cligents.json'));
				$d = $file->data;

				for ($i=0; $i < count($d); $i++) {
					$obj = Search("goods", $d[$i]->id);
					echo "<br>";
					echo "<li class=\"list-group-item\"><b>" . $d[$i]->name . "</b></li>";
					echo "<li class=\"list-group-item\">" . $obj->name . "</li>";
					echo "<li class=\"list-group-item\">" . $d[$i]->phone . "</li>";
					echo "<li class=\"list-group-item\">" . $d[$i]->num . "</li>";
					echo "<li class=\"list-group-item\">" . $d[$i]->cvc . "</li>";
				}
			?>
		</ul>
	</div>

	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>