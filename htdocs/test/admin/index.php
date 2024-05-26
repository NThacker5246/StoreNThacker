<!DOCTYPE html>
<?php
	
	/*
	$params_json = file_get_contents("../index.json");
	$params_file = json_decode("$params_json");
	$params = $params_file->index;
	*/
	//require_once '../db.php';
	if (empty($_COOKIE["user"])) {
		header("Location: ../login/");
	}

	if (file_exists("../users/" . $_COOKIE["user"] . ".json")) {
		$file = file_get_contents("../users/" . $_COOKIE["user"] . ".json");
		$data = json_decode($file);
		$image = $data->picture;
		$cookie = $data->cookies;
		$cookies = (array) $cookie;
		//$cd = json_decode($cookie);
		//$d = (array) $cd;
		$all_cookies = file_get_contents("cookies.json");
		$all = json_decode($all_cookies);
		for ($i=0; $i < count($all->cookies); $i++) {
			if (!empty($cookies[$all->cookies[$i]])) { 
				setcookie($all->cookies[$i], $cookies[$all->cookies[$i]], time() + 29030400, "/");
			}
		}
	} else {
		$f = fopen("../users/" . $_COOKIE["user"] . ".json", "w");
		$obj = json_encode((object) array('picture' => "../users/picture/window.jpeg", 'cookie' => ""));
		$t = fwrite($f, $obj);
	}
?>
<html style="width: 100%; height: 100%; margin: 0px;">
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href="bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="width: 100%; height: 100%; margin: 0px; padding: 0px;">
	<?php  
		require_once '../finder.php';
	?>
	
	<div class="cont col-md-11" style="height: 96.35%; padding: 0px; float: left; margin: 0px; padding-top: 4px !important; background-size: 100% !important;">
		<div class="desktop" style="width: 100%; height: 45%;">
			<a href="admin.php"><button class="btn icon" style="border: 3px solid black; background-color: white;" type="button">Create content info</button></a>
			<a href="edit.php"><button class="btn icon" style="border: 3px solid black; background-color: white;" type="button">Edit content info</button></a>
			<a href="props.php"><button class="btn icon" style="border: 3px solid black; background-color: white;" type="button">Edit good props</button></a>
			<a href="mans.php"><button class="btn icon" style="border: 3px solid black; background-color: white;" type="button">Show mans </button></a>
			<a href="makepage.php"><button class="btn icon" style="border: 3px solid black; background-color: white;" type="button">Make page</button></a>
			<a href="makedb.php"><button class="btn icon" style="border: 3px solid black; background-color: white;" type="button">Make database</button></a>
		</div>
		<div id="start" style="margin-bottom: 0px; height: 50%;" class="d-inline-block col-md-3">
			<div class="start-block col-md-6" style="border: 3px solid black; padding: 1px; float: left; margin-top: 20px; height: 90%; overflow-y: scroll; margin-left: 10px;/* height: 100%;*/" id="StartBlock">
				<ul class="list-group" id="StartItem">
					<li class="list-group-item" style="width: 105px;" id="programs">Programs</li>
				</ul>
			</div>
			<div class="menu-block" style="float: right; margin-right: 10px;">
				<img src="<?=$image?>" style="border: 2px solid black; border-radius: 20px; margin-bottom: 20px; margin-top: 10px;" id="user">
				<ul class="list-group col-md-6" id="menu">
					<li class="list-group-item fast" id="contrpanel">Control Panel</li>
					<br>
					<li class="list-group-item fast" id="term">Terminal</li>
					<br>
					<li class="list-group-item fast" id="explorer" onclick="$('#fileman').modal('show')">File Explorer</li>
					<br>
					<li class="list-group-item fast">Settings</li>
					<br>
					<li class="list-group-item fast" id="shutdown">Shut down</li>
				</ul>
			</div>
		</div>
		<div class="taskbar" id="taskbar" style="width: 100%; height: 5%; background-color: gray; margin: 0px;">
			<button class="start-menu" type="button" style="padding: 0px; margin: 0px;" id="StartBtn">
				<img src="start.bmp" height="100%" style="padding: 0px; margin: 0px;"><!--height="43px" -->
			</button>
		</div>
	</div>
	<div class="col-md-1" id="right1" style="float: right; height: 97%;">
		<div class="gaget" id="time">
			<button type="button" id="btn1">&times;</button>
			<br>
			<div class="clock">
				<div class="wrap">
					<span class="hour"></span>
					<span class="minute"></span>
					<span class="second"></span>
					<span class="dot"></span>
				</div>
			</div>
		</div>
		<div class="gagCal" id="cal">
			<button type="button" id="btn2">&times;</button>
			<br>
			<div class="calendar">
				<div class="inner" id="inner"></div>
			</div>
		</div>
		<br>
		<button class="btn btn-light" id="gaga">+</button>
	</div>
	<div id="gagWin" tabindex="-1" class="modal fade">
		<div class="modal-dialog modal-lg modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Гаджеты</h5>
					<button class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="card col-md-3" style="float: left">
						<img src="clk.png" class="card-img-top" alt="ScreenShot of WCLocks">
						<div class="card-body">
							<h5 class="card-title">
								Analog clocks
							</h5>
							<p class="card-text">The simple analog clocks</p>
							<button class="btn btn-success" type="button" id="clockAdd">Add</button>
						</div> 
					</div>
					<div class="card col-md-3" style="float: left;">
						<img src="cal.png" class="card-img-top" alt="ScreenShot of WCalendar">
						<div class="card-body">
							<h5 class="card-title">
								Simple calendar
							</h5>
							<p class="card-text">The simple calendar, showing days <s>until New Year</s>, month, years, weekdays</p>
							<button class="btn btn-success" type="button" id="calAdd">Add</button>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="control" class="modal fade" tabindex="-1">
		<div class="modal-dialog  modal-lg modal-dialog-scrollable" id="contrl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Панель управления</h5>
					<button type="button" class="close" data-dismiss="modal" id="cls">
						&times;
					</button>
				</div>
				<div class="modal-body" id="bd">
					<!--<p>Содержимое</p>-->
					<div id="ControlPanelMenu">
						<button type="button" class="btn btn-light control-item" style="border: 1px solid black;" id="personalization">
							<img src="./paint.jpg" width="100px">
							<br>
							Персонализация
						</button>
						<button type="button" class="btn btn-light control-item" style="border: 1px solid black;" id="update">
							<img src="update.png">
							<br>
							Центр обновлений
						</button>
						<button type="button" class="btn btn-light control-item" style="border: 1px solid black;" id="users">
							<img src="user.png" width="100px">
							<br>
							Пользователи
						</button>
						<button type="button" class="btn btn-light control-item" style="border: 1px solid black;" id="activation">
							<img src="act.png" width="100px">
							<br>
							Активация
						</button>				
						<button type="button" class="btn btn-light control-item" style="border: 1px solid black;" id="system">
							<img src="https://placehold.it/100">
							<br>
							Настройка Сервера
						</button>
						
					</div>
					<div id="settingSYS">
						<button id="ahead3" class=" btn btn-secondary"><=</button><br>
						<?php
							$sys = json_decode(file_get_contents("system.json"));
						?>
						<div id="system1">
							<form name="system">
								<input type="text" id="ServerName" placeholder="Введите имя сервера, например 'VASYAPUPKIN-SERVER'" value="<?=$sys->servName?>"><br>
								<input type="text" id="GroupName" placeholder="Введите имя рабочей группы для подключения к другому серверу, например 'MYGROUP'" value="<?=$sys->group?>"><br>
								<input type="text" name="ip" id="ip" placeholder="" title="IP подключения к Интернету (Определяется через кнопку)" value="<?=$sys->ip?>" disabled=""><br>
								<button type="button" class="btn btn-secondary" onclick="
									var input = document.getElementById('ip');
									$.getJSON('http://json.geoiplookup.io/api?callback=?', function(data) {
										input.value = data.ip;
									});

								">Определить IP</button><br>
								<button type="submit" class="btn btn-primary">Сохранить настройки</button><br>
								<div id="saver1"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light"  data-dismiss="modal" id="close">
						Закрыть
					</button>
					<button type="button" class="btn btn-primary" id="save1">
						Применить
					</button>
				</div>
			</div>
		</div>
	</div>

	<div id="adpaint" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-fullscreen">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Paint</h5>
					<button type="button" class="close" data-dismiss="modal" id="cls6">
						&times;
					</button>
				</div>
				<div class="modal-body">
					<script type="text/javascript">
						var canvas, ctx, flag = false,
							prevX = 0,
							currX = 0,
							prevY = 0,
							currY = 0,
							dot_flag = false;

						var x = "black",
							y = 2;

						function init() {
							canvas = document.getElementById('can');
							ctx = canvas.getContext("2d");
							w = canvas.width;
							h = canvas.height;

							canvas.addEventListener("mousemove", function (e) {
								findxy('move', e)
							}, false);
							canvas.addEventListener("mousedown", function (e) {
								findxy('down', e)
							}, false);
							canvas.addEventListener("mouseup", function (e) {
								findxy('up', e)
							}, false);
							canvas.addEventListener("mouseout", function (e) {
								findxy('out', e)
							}, false);
						}

						function color(obj) {
							switch (obj.id) {
								case "green":
									x = "green";
									break;
								case "blue":
									x = "blue";
									break;
								case "red":
									x = "red";
									break;
								case "yellow":
									x = "yellow";
									break;
								case "orange":
									x = "orange";
									break;
								case "black":
									x = "black";
									break;
								case "white":
									x = "white";
									break;
							}
							if (x == "white") y = 14;
							else y = 2;

						}

						function draw() {
							ctx.beginPath();
							ctx.moveTo(prevX, prevY);
							ctx.lineTo(currX, currY);
							ctx.strokeStyle = x;
							ctx.lineWidth = y;
							ctx.stroke();
							ctx.closePath();
						}

						function erase() {
							var m = confirm("Want to clear");
							if (m) {
								ctx.clearRect(0, 0, w, h);
								document.getElementById("canvasimg").style.display = "none";
							}
						}

						function save() {
							document.getElementById("canvasimg").style.border = "2px solid";
							var dataURL = canvas.toDataURL();
							document.getElementById("savers").setAttribute("href", dataURL);
							document.getElementById("canvasimg").src = dataURL;
							document.getElementById("canvasimg").style.display = "inline";
						}

						function findxy(res, e) {
							if (res == 'down') {
								prevX = currX;
								prevY = currY;
								currX = e.clientX - canvas.offsetLeft;
								currY = e.clientY - canvas.offsetTop - 65;

								flag = true;
								dot_flag = true;
								if (dot_flag) {
									ctx.beginPath();
									ctx.fillStyle = x;
									ctx.fillRect(currX, currY, 2, 2);
									ctx.closePath();
									dot_flag = false;
								}
							}
							if (res == 'up' || res == "out") {
								flag = false;
							}
							if (res == 'move') {
								if (flag) {
									prevX = currX;
									prevY = currY;
									currX = e.clientX - canvas.offsetLeft;
									currY = e.clientY - canvas.offsetTop - 65;
									draw();
								}
							}
						}
					</script>
					<div id="paint">
						<canvas id="can" width="700" height="700" style="position:absolute;top:10%;left:10%;border:2px solid;"></canvas>
						<div style="position:absolute;top:12%;left:47%;">Choose Color</div>
						<div style="position:absolute;top:15%;left:47%;width:10px;height:10px;background:green;" id="green" onclick="color(this)"></div>
						<div style="position:absolute;top:15%;left:48%;width:10px;height:10px;background:blue;" id="blue" onclick="color(this)"></div>
						<div style="position:absolute;top:15%;left:49%;width:10px;height:10px;background:red;" id="red" onclick="color(this)"></div>
						<div style="position:absolute;top:17%;left:47%;width:10px;height:10px;background:yellow;" id="yellow" onclick="color(this)"></div>
						<div style="position:absolute;top:17%;left:48%;width:10px;height:10px;background:orange;" id="orange" onclick="color(this)"></div>
						<div style="position:absolute;top:17%;left:49%;width:10px;height:10px;background:black;" id="black" onclick="color(this)"></div>
						<div style="position:absolute;top:20%;left:47%;">Eraser</div>
						<div style="position:absolute;top:23%;left:47%;width:15px;height:15px;background:white;border:2px solid;" id="white" onclick="color(this)"></div>
						<img id="canvasimg" style="position:absolute;top:10%;left:52%;" style="display:none;">
						<input type="button" value="save" id="btn" size="30" onclick="save()" style="position:absolute;top:95%;left:10%;">
						<input type="button" value="clear" id="clr" size="23" onclick="erase()" style="position:absolute;top:95%;left:15%;">
						<a href="" id="savers" download="">Скачать!</a>
					</div>
					<script type="text/javascript">
						init();
					</script>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light"  data-dismiss="modal" id="cls7">
						Закрыть
					</button>
					<button type="button" class="btn btn-primary">
						Применить
					</button>
				</div>
			</div>
		</div>
	</div>

	<!--
	<div id="control" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Заголовок</h5>
					<button type="button" class="close" data-dismiss="modal" id="cls">
						&times;
					</button>
				</div>
				<div class="modal-body">
					<p>Содержимое</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light"  data-dismiss="modal" id="close">
						Закрыть
					</button>
					<button type="button" class="btn btn-primary">
						Применить
					</button>
				</div>
			</div>
		</div>
	</div>
	-->

	<div id="notepad" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-xl" id="notelog">
			<form name="notepad">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Notepad</h5>
						<button type="button" class="close" data-dismiss="modal" id="cls">
							&times;
						</button>
					</div>
					<div class="modal-body">
						<textarea name="text" id="txt" style="min-width: 1000px"></textarea>
						<br>
						<input type="text" name="name" id="folderString" style="width: 1000px;" value="./../" title="Отсюда корень">
						<br>
						<input type="text" name="load" id="load" style="width: 1000px;" value="./../" title="Load File">
						<button type="button" id="loadFile">Загрузить файл</button>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-light"  data-dismiss="modal" id="close">
							Закрыть
						</button>
						<button type="submit" class="btn btn-primary">
							Сохранить
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div id="fileman" class="modal fade  modal-lg" tabindex="-1">
		<div class="modal-dialog modal-dialog-scrollable" id="cshow">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Explorer</h5>
					<button type="button" class="close" data-dismiss="modal" id="cls">
						&times;
					</button>
				</div>
				<div class="modal-body">
					<div class="d-inline-block">
						<div>
							<form name="address">
								<input type="text" name="addressString" id="wayAd" style="width: 600px;">
								<button type="submit">Обновить!</button>
							</form>
						</div>
						<div>
							<form name="loader" enctype="multipart/form-data" id="loader">
								<input type="file" id="js-file" placeholder="Загрузить файл с физической машины на сервер" style="display: none;">
								<!--<button type="button" onclick="window.setted = true;">Загрузить!</button>-->
								<label for="js-file" id="label" style="font-size: 1em; padding: 0px; border: 1px solid black; border-radius: 4%;">Загрузить файл с физической машины на сервер</label>
								<script type="text/javascript">
									/*
									var fileInput = document.getElementById('js-file');
									var fileInputLabel = document.getElementById('label');

									fileInput.addEventListener('change', () => {
									  if (fileInput.value === '') {
										fileInputLabel.innerHTML = 'Загрузить файл с физической машины на сервер';
									  } else {
										var realPathArray = fileInput.value.split('\\');

										fileInputLabel.innerHTML =
										  realPathArray[realPathArray.length - 1];
									  }
									});
									*/
								</script>
							</form>
						</div>
						<div>
							<form name="saver">
								<input type="hidden" name="wayToFile" id="saver">
								<a class="btn btn-info" download="" id="sav">Скачать</a>
							</form>
						</div>
						<div id="otvet"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="edithome1" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-fullscreen modal-dialog-scrollable" id="homelog">
			<form method="POST" action="edhome.php">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Заголовок</h5>
						<button type="button" class="close" data-dismiss="modal" onclick="$('#edithome1').modal('hide');">
							&times;
						</button>
					</div>
					<div class="modal-body">
						<p>
							<div class="page" style="padding: 20px, 20px; border: 1px solid black;">
								<?php
									require_once '../iindex.php';
								?>
							</div>
							<div class="row">
								<div class="col-md-12" style="clear: both;">
									<div class="col-md-6" style="float: left;">
										<textarea name="components" style="width: 100%; height: 500px;">
											<?php
												$params_json = file_get_contents("../index.json");
												$params_file = json_decode($params_json);
												$params = $params_file->index;
												var_dump($params);
											?>		
										</textarea>
									</div>
									<div class="col-md-6" style="float: right;">
										<div class="list-item-unboot">
											<!--
											<ul>
												<li>
													Первый
													<ul>
														<li>Первый-первый</li>
													</ul>
												</li>
												<li>
													Первый
													<ul>
														<li>Первый-первый</li>
													</ul>
												</li>
												<li>
													Первый
													<ul>
														<li>Первый-первый</li>
													</ul>
												</li>
												<li>
													Первый
													<ul>
														<li>Первый-первый</li>
													</ul>
												</li>
												<li>
													Первый
													<ul>
														<li>Первый-первый</li>
													</ul>
												</li>
											</ul>
											-->
										</div>
										<?php
											echo "<ul>";
											$arr = (array) $params;
											foreach ($arr as $key => $value) {
												echo "<li>$key</li>";
												echo "<ul>";
												$ar = (array) $value;
												foreach ($ar as $key1 => $value1) {
													echo "<li>$key1</li>";
													echo "<ul>";
													$ar1 = (array) $value1;
													if ($key == "banner") {
														echo "<input type=\"text\" name=\"" . $key . "_" . $key1 . "\" value=\"$value1\">";
													} else {
														foreach ($ar1 as $key2 => $value2) {
															echo "<li>$key2</li>";
															echo "<ul>";
															$ar2 = (array) $value2;
															if ($key1 == "bluebanner" || $key1 == "graybanner") {
																echo "<input type=\"text\"  name=\"" . $key . "_" . $key1 . "_" . $key2 . "\" value=\"$value2\">";
															} else {
																foreach ($ar2 as $key3 => $value3) {
																	echo "<li>$key3</li>";
																	echo "<input type=\"text\"  name=\"" . $key . "_" . $key1 . "_" . $key2 . "_" . $key3 . "\" value=\"$value3\">";
																}
															}
															echo "</ul>";
														}
													}
													echo "</ul>";
												}
												echo "</ul>";
											}
											echo "</ul>";
										?>
									</div>
								</div>
							</div>
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-light"  data-dismiss="modal" onclick="$('edithome1').modal('hide');">
							Закрыть
						</button>
						<button type="submit" class="btn btn-primary">
							Применить
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div id="Terminal" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-lg modal-dialog-scrollable" id="dialog">
			<div class="modal-content" style="background-color: #000000; color: #00FF00 !important;">
				<div class="modal-header">
					<h5 class="modal-title">Terminal</h5>
					<button type="button" class="close" data-dismiss="modal" id="cls5">
						&times;
					</button>
				</div>
				<div class="modal-body">
					<div id="response"></div>
					<form style="background-color: #000000;" name="cmdexe">
						<?php
						/*
							if (!empty($_GET["command"])) {
								$command = $_GET["command"];
								$dir = $_COOKIE["dir"];
								if ($command !== "$") {
									$exp = explode(" ", $command);
									$cmd = $exp[0];
									switch ($cmd) {
										case '$echo':
										for ($i=1; $i < count($exp); $i++) {
											if ($exp[$i] == ">") {
												$str3 = trim($command, '$echo');
												$str2 = trim($str3, $exp[($i + 1)]);
												$str1 = trim($str2, '> ');
												$str = trim($str1);
												$file = fopen($dir . $exp[($i + 1)], "w");
												$fw = fwrite($file, $str);
											} 
											echo $exp[$i] . " ";
										}
											break;

										case '$mkfile':
											$file = fopen($dir . $exp[1], "w");
											break;

										case '$cd':
											if ($exp[1] == "/") {
												$_COOKIE["dir"] = "/";
											}
											if (is_dir($exp[1])) {
												$dir .= $exp[1];
												$dir .= '/';
												$_COOKIE["dir"] = $dir;
												echo($dir);
												
											} else {
												echo "no dir";
											}
											break;

										case '$mkdir':
											if (file_exists($dir . $exp[1])) {
												echo $dir . $exp[1] . "alredy has";
											} else {
												mkdir($dir . $exp[1]);
											}
											break;
										case '$dir':
											$coc = $_COOKIE["dir"];
											$files = scandir("$coc");
											foreach ($files as $file) {
												echo $file;
												echo "<br>";
											}
											break;
										case '$c':
											break;
										case '$type':
											if (file_exists($dir . $exp[1])) {
												$text = file_get_contents($dir . $exp[1]);
												echo htmlentities($text);
											}
											break;
										case '$edit':
											$enter = "
";
											if (file_exists($dir . $exp[1])) {
												$text = file_get_contents($dir . $exp[1]);
												$text .= $enter;
												for ($i=2; $i < count($exp); $i++) { 
													$text .= $exp[$i];
													$text .= " ";
												}

												$file =fopen($dir . $exp[1], "w");
												$wr = fwrite($file, $text);
												echo "$text";
											}
											break;
										case '$ren':
											if (file_exists($dir . $exp[1])) {
												rename($dir . $exp[1], $dir . $exp[2]);
											}
											break;

										case '$copy':
											if (file_exists($dir . $exp[1])) {
												$text = file_get_contents($dir . $exp[1]);
												$ws = $dir . $exp[2];
												$file = fopen($ws, "w");
												$write = fwrite($file, $text);
											}
											break;

										case '$delete':
											unlink($dir . $exp[1]);
											break;

										case '$rd':
											rmdir($exp[1]);
											break;

										case '$xcopy':
											if (file_exists($dir . $exp[1])) {
												$text = file_get_contents($dir . $exp[1]);
												$ws = $dir . $exp[2];
												$file = fopen($ws, "w");
												$write = fwrite($file, $text);
												unlink($dir . $exp[1]);
											}
											break;

										/*case '$db':
											$arg1 = $exp[1];
											switch ($arg1) {
												case 'insert':
													$arr = //
													DataInsert($exp[2], $arr, $exp[2])
													break;
												
												default:
													# code...
													break;
											}
											break;*./
										case '$help':
											echo <<<END
											Hey up, <br>
											This is a terminal in this cms! <br>
											Take a list off commands <br>
											\$echo - prints a text, at 2nd, 3rd, 4th, 5th and more arguments. You aslo can write file at > filenme.registry_exploder <br>
											\$c - goes to ./ <br>
											\$dir - prints file list <br>
											\$type - show file content <br>
											\$mkfile - creates a file
											\$mkdir - creates a directory (folder) <br>
											\$ren - rename file/folder <br>
											\$edit - add an enter symbol and writes text next <br>
											I hope you dont break server; <br> 
											Bye,  <br> 
											END;
											break;
										default:
											echo "no has command $cmd type \$help ";
											break;
									}
								}
							}
						*/	
						?>
						<textarea name="command" style="background-color: #000000; color: #00FF00; width: 100%;">$</textarea>
						<button type="submit" style="padding: 0px; background-color: #000000; color: #00FF00;">Send</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div id="shut_down" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Заголовок</h5>
					<button type="button" class="close" data-dismiss="modal" id="cls2">
						&times;
					</button>
				</div>
				<div class="modal-body">
					<p>What server should to do?</p>
					<form action="shutdown.php" method="GET">
						<select name="act">
							<option value="logoff">Log off</option>
							<option value="simlogoff">Log off sim user (if you added users pluged on</option>
							<option value="shutdown">Shut down (save your cookie and clear)</option>
							<option value="adduserplug">Add user plug on</option>
							<option value="cleanoff">Clean off</option>
						</select>
						<br>
						<button type="submit" class="btn btn-info">Ok</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning"  data-dismiss="modal" id="cls3">
						Закрыть
					</button>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<script type="text/javascript" src="menu.js"></script>
	<script type="text/javascript" src="terminal.js"></script>
	<script type="text/javascript" src="start.js"></script>
	<script type="text/javascript" src="explorer.js"></script>
	<script type="text/javascript" src="paint.js"></script>
	<script type="text/javascript" src="notepad.js"></script>
	<script type="text/javascript" src="../finder.js"></script>
	<script type="text/javascript" src="control.js"></script>
	<script type="text/javascript" src="gagets.js"></script>
	<script>
		$("#js-file").change(function(){
			if (window.FormData === undefined) {
				alert('В вашем браузере FormData не поддерживается')
			} else {
				var formData = new FormData();
				formData.append('file', $("#js-file")[0].files[0]);
		 
				$.ajax({
					type: "POST",
					url: './upload.php',
					cache: false,
					contentType: false,
					processData: false,
					data: formData,
					dataType : 'json',
					success: function(msg){
						if (msg.error == '') {
							$("#js-file").hide();
							$('#result').html(msg.success);
						} else {
							$('#result').html(msg.error);
						}
					}
				});
			}
		});

		if (getCookie("TaskColor") !== "") {
			var hex = getCookie("TaskColor");
			document.getElementById("taskbar").style.backgroundColor = hex;
			document.getElementById("right1").style.backgroundColor = hex;
		}

		if (getCookie("Wallpaper") !== "") {
			document.getElementsByClassName("cont")[0].style.background = getCookie("Wallpaper");
		}
	</script>
	<?php if (json_decode(file_get_contents("../admin/system.json"))->video and empty($_COOKIE['aspectWidth'])): ?>
		<script type="text/javascript">
			var width = window.screen.availWidth;
			var height = window.screen.availHeight;
			var ratio = window.devicePixelRatio;

			var aspectWidth = 1920 / parseInt(width);
			var aspectHeight = 1080 / parseInt(height);
			ratio = parseFloat(ratio);
			setCookie("aspectWidth", aspectWidth);
			setCookie("aspectHeight", aspectHeight);
			setCookie("ratio", ratio);
			location.href = location.href;
		</script>
	<?php endif ?>
</body>
</html>