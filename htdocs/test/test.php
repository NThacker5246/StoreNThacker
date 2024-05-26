<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid" style="border: 1px solid black;">
		<div class="row" style="border: 1px solid blue;">
			<div class="col-md-1" style="border: 1px solid red;">1</div>
			<div class="col-md-2" style="border: 1px solid red;">2</div>
			<div class="col-md-6" style="border: 1px solid red;">6</div>
			<div class="col-md-3" style="border: 1px solid red;">3</div>
		</div>
		<div class="row" style="border: 1px solid blue;">
			<div class="col-md-2" style="border: 1px solid red;">2</div>
			<div class="col-md-3" style="border: 1px solid red;">3</div>
			<div class="col-md-6" style="border: 1px solid red;">6</div>
			<div class="col-md-1" style="border: 1px solid red;">1</div>
		</div>
		<div class="row" style="border: 1px solid blue;">
			<div class="col-md-12" style="border: 1px solid red;">12</div>
		</div>
	</div>
	<div class="buttons">
		<button type="button" class="btn btn-primary aria-pressed" role="button" aria-pressed="true" style="margin-top: 10px; border: 2px solid black; border-radius: 10px;">Test</button><br>
		<button type="button" class="btn btn-secondary aria-pressed" role="button" aria-pressed="true" style="margin-top: 10px; border: 2px solid black; border-radius: 10px;">Test</button><br>
		<button type="button" class="btn btn-success aria-pressed" role="button" aria-pressed="true" style="margin-top: 10px; border: 2px solid black; border-radius: 10px;">Test</button><br>
		<button type="button" class="btn btn-danger aria-pressed" role="button" aria-pressed="true" style="margin-top: 10px; border: 2px solid black; border-radius: 10px;">Test</button><br>
		<button type="button" class="btn btn-warning aria-pressed" role="button" aria-pressed="true" style="margin-top: 10px; border: 2px solid black; border-radius: 10px;">Test</button><br>
		<button type="button" class="btn btn-info aria-pressed" role="button" aria-pressed="true" style="margin-top: 10px; border: 2px solid black; border-radius: 10px;">Test</button><br>
		<button type="button" class="btn btn-light aria-pressed" role="button" aria-pressed="true" style="margin-top: 10px; border: 2px solid black; border-radius: 10px;">Test</button><br>
		<button type="button" class="btn btn-dark aria-pressed" role="button" aria-pressed="true" style="margin-top: 10px; border: 2px solid black; border-radius: 10px;">Test</button><br>
		<button type="button" class="btn aria-pressed" role="button" aria-pressed="true" style="margin-top: 10px; border: 2px solid black; border-radius: 10px;">Test</button><br>
	</div>
	<div class="cards">
		<div class="d-inline-block">
			<div class="card">
				<img src="https://placehold.it/200" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title">Заголовок</h5>
					<p class="card-text">Содержимое</p>
					<a href="#" class="btn btn-primary">Ссылка</a>
				</div>
			</div>
		</div>
		<div class="d-inline-block">
			<div class="card">
				<div class="card-header">Заголовок</div>
				<div class="card-body">Содержимое</div>
				<div class="card-footer">Подвал</div>
			</div>
		</div>
	</div>

	<div class="alert alert-success" role="alert">Hi</div>

	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<script type="text/javascript">
		window.alert("hi");
	</script>
</body>
</html>