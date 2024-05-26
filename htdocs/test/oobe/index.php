<!DOCTYPE html>
<html style="width: 100%; height: 100%;">
<head>
	<meta charset="utf-8">
	<title>Out of Box Experience</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<style type="text/css">
		.block{
			width: 50px;
			margin: unset;
		}
	</style>
</head>
<body style="width: 100%; height: 100%;">
	<div class="d-flex" style="background: darkblue; justify-content: center; align-items: center; width: 100% !important; height: 100%; margin: 0px !important; padding: 0px; align-content: center;">
		<div style="background-color: white; width: 35%; height: 60%;" class="card">
			<div class="card-header" style="padding: 0px;">
				<h5 class="card-title" style="float: left; margin-top: 0px;">Setup</h5>
				<button type="button" style="background-image: url(/oobe/aero1.png) !important; width: 35px; height: 14.5px; border: unset; border-radius: 2px; float: right;"></button>
			</div>
			<div class="card-body">
				<p class="card-text">Install advanced video driver <input type="checkbox" name="video" id="video"><br> P.S.: In adminstartor's page video driver sets video settings like your screen resolution and system display scaller (normally I developed for 1920x1080 and up with scaller 100%</p>
				<form>
					<input type="text" name="name" id="name" placeholder="Name"><br>
					<input type="text" name="orgn" id="orgn" placeholder="Organization"><br>
					<input type="text" name="nick" id="nick" placeholder="Nickname (Username)"><br>
					<input type="text" id="block1" class="block">-<input type="text" id="block2" class="block">-<input type="text" id="block3" class="block">-<input type="text" id="block4" class="block">-<input type="text" id="block5" class="block"><br>
					<a href="#" id="send" class="btn btn-primary">Next > </a>
				</form>
				<p id="bliss"></p>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<script type="text/javascript" src="oobe.js"></script>
</body>
</html>