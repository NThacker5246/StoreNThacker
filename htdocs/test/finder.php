<?php if (!empty($_COOKIE['user'])): ?>
<div id="finder" style="width: 100%; height: 29px; background-color: gray;" class="d-inline-flex py-3d">
	<div class="dropdown" style="height: 29px; background-color: gray; padding: 0px; color: #000000;">
		<button type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" style="margin: 0px; padding-top: 0px; margin-bottom: 0px; background-color: gray;">
			<i class="icon fa solid major fa-windows" aria-hidden="true" style="color: #0066FF;"></i>
		</button>
		<ul class="dropdown-menu">
			<li>
				<a target="_blank" class="dropdown-item" href="/admin/admin.php">Create content info</a>
			</li>
			<li>
				<a target="_blank" class="dropdown-item" href="/admin/edit.php">Edit content info</a>
			</li>
			<li>
				<a target="_blank" class="dropdown-item" href="/admin/props.php">Edit good props</a>
			</li>
			<li>
				<a target="_blank" class="dropdown-item" href="/admin/mans.php">Show mans</a>
			</li>
			<li>
				<a target="_blank" class="dropdown-item" href="/admin/makepage.php">Make page</a>
			</li>
			<li>
				<a target="_blank" class="dropdown-item" href="/admin/makedb.php">Make database</a>
			</li>
			<li>
				<a target="_blank" class="dropdown-item" href="/admin/">Go to Admin</a>
			</li>
			<li>
				<button class="dropdown-item" id="winver">About</button>
			</li>
		</ul>
	</div>
	
	<div style="margin-left: 10px; margin-right: 10px;">
		<select id="option">
			<option value="find">Finder</option>
			<option value="cmd">Terminal</option>
			<option value="explorer">Explorer</option>
		</select>
		
	</div>
	<div id="Terminal" class="modal fade" tabindex="-1" style="overflow-y: hidden;">
		<div id="nf" style="width: 100%; height: 29px; background-color: gray;" class="d-inline-flex py-3d">
			<div class="dropdown" style="height: 29px; background-color: gray; padding: 0px; color: #000000;">
				<button type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" style="margin: 0px; padding-top: 0px; margin-bottom: 0px; background-color: gray;">
					<i class="icon fa solid major fa-windows" aria-hidden="true" style="color: #0066FF;"></i>
				</button>
				<ul class="dropdown-menu">
					<li>
						<a target="_blank" class="dropdown-item" href="/admin/admin.php">Create content info</a>
					</li>
					<li>
						<a target="_blank" class="dropdown-item" href="/admin/edit.php">Edit content info</a>
					</li>
					<li>
						<a target="_blank" class="dropdown-item" href="/admin/props.php">Edit good props</a>
					</li>
					<li>
						<a target="_blank" class="dropdown-item" href="/admin/mans.php">Show mans</a>
					</li>
					<li>
						<a target="_blank" class="dropdown-item" href="/admin/makepage.php">Make page</a>
					</li>
					<li>
						<a target="_blank" class="dropdown-item" href="/admin/makedb.php">Make database</a>
					</li>
					<li>
						<a target="_blank" class="dropdown-item" href="/admin/">Go to Admin</a>
					</li>
					<li>
						<button class="dropdown-item" id="winver1">About</button>
					</li>
				</ul>
			</div>
			
			<div style="margin-left: 10px; margin-right: 10px;">
				<select id="option1">
					<option value="cmd">Terminal</option>
					<option value="explorer">Explorer</option>
					<option value="find">Finder</option>
				</select>
				
			</div>
		</div>
		<div class="modal-dialog modal-lg modal-dialog-scrollable" id="dialogt">
			<div class="modal-content" style="background-color: #000000; color: #00FF00 !important;">
				<div class="modal-header">
					<h5 class="modal-title">Terminal</h5>
					<button type="button" class="close" data-dismiss="modal" id="cls5">
						&times;
					</button>
				</div>
				<div class="modal-body">
					<div id="response1"></div>
					<form style="background-color: #000000;" name="cmdexe">
						<textarea name="command" style="background-color: #000000; color: #00FF00; width: 100%;">$</textarea>
						<button type="submit" style="padding: 0px; background-color: #000000; color: #00FF00;">Send</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="fileman" class="modal fade  modal-lg" tabindex="-1">
		<div id="nf1" style="width: 100%; height: 29px; background-color: gray;" class="d-inline-flex py-3d">
			<div class="dropdown" style="height: 29px; background-color: gray; padding: 0px; color: #000000;">
				<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" id="dropdownMenuButton2" style="margin: 0px; padding-top: 0px; margin-bottom: 0px; background-color: gray;">
					<i class="icon fa solid major fa-windows" aria-hidden="true" style="color: #0066FF;"></i>
				</button>
				<ul class="dropdown-menu">
					<li>
						<a target="_blank" class="dropdown-item" href="/admin/admin.php">Create content info</a>
					</li>
					<li>
						<a target="_blank" class="dropdown-item" href="/admin/edit.php">Edit content info</a>
					</li>
					<li>
						<a target="_blank" class="dropdown-item" href="/admin/props.php">Edit good props</a>
					</li>
					<li>
						<a target="_blank" class="dropdown-item" href="/admin/mans.php">Show mans</a>
					</li>
					<li>
						<a target="_blank" class="dropdown-item" href="/admin/makepage.php">Make page</a>
					</li>
					<li>
						<a target="_blank" class="dropdown-item" href="/admin/makedb.php">Make database</a>
					</li>
					<li>
						<a target="_blank" class="dropdown-item" href="/admin/">Go to Admin</a>
					</li>
					<li>
						<button class="dropdown-item" id="winver2">About</button>
					</li>
				</ul>
			</div>
			
			<div style="margin-left: 10px; margin-right: 10px;">
				<select id="option2">
					<option value="explorer">Explorer</option>
					<option value="cmd">Terminal</option>
					<option value="find">Finder</option>
				</select>
				
			</div>
		</div>
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
						<div id="otvet1"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="version" tabindex="-1">
		<div class="modal-dialog" id="AboutWindowsNT">
			<div class="modal-content">
				<div class="modal-header">
					<h5>
						Winver.exe
					</h5>
					<button class="close" type="button" data-dissmis="modal">
						&times;
					</button>
				</div>
				<?php
					$file = json_decode(file_get_contents("system.json"));
				?>
				<div id="contentWinver" class="modal-body">
					About program windows:
					<br>
					Version: <?=$file->version?>
					<br>
					Bulid: <?=$file->build?>
					<br>
					Developer: NThacker
					<br>
					<?php
						if ($file->activated == false) {
							echo "Not Activated";
						} else {
							echo "Activated";
						}
					?>
					<br><br>
					Registed to: <?=$file->user?>
					<br><br>
					Copyright: &copy; NThacker<br>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="funcs.js"></script>
<script type="text/javascript" src="/admin/funcs.js"></script>
<script type="text/javascript">
	if (getCookie("TaskColor") !== "") {
		var hex = getCookie("TaskColor");
		document.getElementById("finder").style.backgroundColor = hex;
		document.getElementById("nf").style.backgroundColor = hex;
		document.getElementById("nf1").style.backgroundColor = hex;
		document.getElementById("dropdownMenuButton").style.backgroundColor = hex;
		document.getElementById("dropdownMenuButton1").style.backgroundColor = hex;
		document.getElementById("dropdownMenuButton2").style.backgroundColor = hex;
	}
</script>
<?php endif ?>