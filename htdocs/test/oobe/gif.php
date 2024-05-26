<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style type="text/css">
			html, body {
				width: 100%;
				height: 100%;
				margin: 0px;
			}
			.oobeGif {
				transition: background-color 2s ease, color 2s ease;
				width: 100%;
				height: 100%;
				display: flex;
				justify-content: center;
				align-items: center;
				align-content: center;
				background-color: black; 
				color: white;
			}

			.oobeGif1 {
				background-color: #0078FF !important;
				color: black !important;
			}
		</style>
	</head>
	<body>
		<div class="oobeGif" id="oobeGif">
			<div style="display: block;">
				<div style="font-size: 50px; font-family: Segoe UI; font-style: normal; display: block;">Please wait, while setup preparing desktop for you!</div><br><br>
				<div style="font-size: 25px; font-family: Segoe UI; font-style: normal; display: block;">Keep you PC plugged on!</div>
			</div>
		</div>
		<script type="text/javascript">
			setInterval(function() {document.getElementById('oobeGif').classList.toggle("oobeGif1");}, 2000)
			setTimeout(function() {location.href = "./../admin/index.php"}, 20000)
		</script>
	</body>
</html>
