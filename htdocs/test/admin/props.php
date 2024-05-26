<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Panel</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
	<div>
		<form method="POST" action="add.php">
			New parametr
			<br>
			<input name="name" type="text" placeholder="Название">
			<br>
			<input type="text" name="id" placeholder="Id (например, weight, kolvo-yader)">
			<br>
			Тип данных
			<br>
			<select name="type">
				<option value="str">String</option>
				<option value="int">Int (number)</option>
				<option value="file">File</option>
				<option value="bool">Bool</option>
			</select>
			<br>
			<button type="submit">Create</button>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>