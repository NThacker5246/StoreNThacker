<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log in to Server</title>
	<style type="text/css">
		html, body {
			width: 100%;
			height: 100%;
		}

		.cont {
			width: 100% !important;
			height: 100% !important;
			display: flex !important;
			margin: 0px !important;
			padding: 0px !important;
			justify-content: center !important;
			align-content: center !important;
			align-items: center !important;
			background: url(./win.png);
			background-size: 100% auto;
		}

		.loginForm {
			justify-content: center !important;
			align-content: center !important;
			align-items: center !important;
			display: flex;
			background-color: white !important;
			border: 1px solid black;
			border-radius: 10px;
			width: 245px;
			height: 150px;
			padding: 10px;

		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
	<div class="cont">
		<form action="login.php" method="POST" class="loginForm">
			<div>
				<!--
				<input type="text" name="username" placeholder="username">
				-->
				<select name="username">
					<?php
						$current = file_get_contents("../users/usrtable.json");
						$users1 = json_decode($current);
						$users2 = $users1->users;
						for ($i=0; $i < count($users2); $i++) { 
							$profile = json_decode(file_get_contents("../users/" . $users2[$i]->username . ".json"));
							$img = $profile->picture;
							echo "<option value=\"" . $users2[$i]->username . "\">" . "<img src=\"" . $img . "\"><br>" .  $users2[$i]->username . "</option>";
						}
					?>
				</select>
				<br>
				<input type="password" name="pwd">
				<br>
				<button type="submit" class="btn btn-primary">Log on</button>
			</div>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>