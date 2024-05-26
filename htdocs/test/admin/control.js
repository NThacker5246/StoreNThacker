function sliderUpdated() {
	
	var r = parseInt(document.getElementById('r').value);
	var g = parseInt(document.getElementById('g').value);
	var b = parseInt(document.getElementById('b').value);
	var rgb1 = new Color(r, g, b);
	var hex = rgb1.getHex();

	//var rgb = hsvToRgb(hsv);
	//var hex = rgbToHex(rgb);
	/*
	hsvElem.textContent = `HSV: ${hsv.h}°, ${hsv.s}%, ${hsv.v}%`;
	rgbElem.textContent = `RGB: ${rgb.r}, ${rgb.g}, ${rgb.b}`;
	hexElem.textContent = `HEX: ${hex}`;
	*/
	document.getElementById("taskbar").style.backgroundColor = hex;
	document.getElementById("finder").style.backgroundColor = hex;
	document.getElementById("nf").style.backgroundColor = hex;
	document.getElementById("nf1").style.backgroundColor = hex;
	document.getElementById("dropdownMenuButton").style.backgroundColor = hex;
	document.getElementById("dropdownMenuButton1").style.backgroundColor = hex;
	document.getElementById("dropdownMenuButton2").style.backgroundColor = hex;
	document.getElementById("right1").style.backgroundColor = hex;
	console.log(hex);
}

document.getElementsByClassName("cont")[0].style.backgroundSize = "100%";

$("#personalization").on("click", function() {
	$("#ControlPanelMenu").toggle();
	if (document.getElementById("pers") == null) {
		var itemphp = $(`
			<div id="pers">
				<button id="ahead" class=" btn btn-secondary">\<\=</button>
				<div id="themes">
					<button type="button" id="current_theme">Текущая тема</button><br>
					<button type="button" id="standart_theme">Стандартная тема</button><br>
					<button type="button" id="new_theme">Новая тема</button><br>
				</div>
				<div id="taskbarCLR">
					<p>Цвет панели задач</p>
					Red <input id="r" type="range" min="0" max="255" step="1" width="255px"><br>
					Green <input id="g" type="range" min="0" max="255" step="1" width="255px"><br>
					Blue <input id="b" type="range" min="0" max="255" step="1" width="255px"><br>
					<p>Фото</p>
					<input id="adr" type="text" width="255px">
					<button id="add">Пременить фото</button>
				</div>
			</div>
		`);
		$("#bd").append(itemphp);
		document.getElementById("ahead").addEventListener("click", function(e) {
			$("#ControlPanelMenu").toggle();
			$("#pers").hide();
		});
		var containerElem = document.getElementById("container");
		var hsvElem = document.getElementById("hsv");
		var rgbElem = document.getElementById("rgb");
		var hexElem = document.getElementById("hex");

		$("#new_theme").on("click", function(e) {
			document.getElementsByClassName("cont")[0].style.background = 'url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-Yr3tv12D1JTMohpoLxWxcBgLXALCUwpesBOL4-v1hZpo6OcF0KN--wTDqSB_Yrj_cgQ&usqp=CAU")';
			document.getElementsByClassName("cont")[0].style.backgroundSize = "100%";
		});

		$("#current_theme").on("click", function(e) {
			document.getElementsByClassName("cont")[0].style.background = 'url("https://www.icegif.com/wp-content/uploads/2023/08/icegif-871.gif")';
			document.getElementsByClassName("cont")[0].style.backgroundSize = "100%";
		});

		$("#standart_theme").on("click", function(e) {
			document.getElementsByClassName("cont")[0].style.background = '#FFFFFF';
			document.getElementsByClassName("cont")[0].style.backgroundSize = "100%";
		});

		$("#add").on("click", function(e) {
			var val = document.getElementById('adr').value;
			document.getElementsByClassName("cont")[0].style.background = 'url("' + val + '")';
			document.getElementsByClassName("cont")[0].style.backgroundSize = "100%";
		});

		document.getElementById("save1").onclick = function(e) {
			if(document.getElementById("pers").style.display != "none"){
				setCookie("TaskColor", document.getElementById("taskbar").style.backgroundColor);
				setCookie("Wallpaper", document.getElementsByClassName("cont")[0].style.background);
			}
		}
		var r = document.getElementById('r');
		var g = document.getElementById('g');
		var b = document.getElementById('b');

		r.addEventListener("input", sliderUpdated);
		g.addEventListener("input", sliderUpdated);
		b.addEventListener("input", sliderUpdated);
		//containerElem.style.display = "flex";
	} else {
		$("#pers").show();
	}
	
});


$("#users").on("click", function() {
	$("#ControlPanelMenu").toggle();
	if (document.getElementById("useradd") == null) {
		var itemphp = $(`
			<div id="useradd">
				<button id="ahead1" class=" btn btn-secondary">\<\=</button>
				<form action="usr.php" method="POST">
					<input type="text" name="name" placeholder="name">
					<br>
					<input type="text" name="nickname" placeholder="nickname">
					<br>
					<input type="text" name="password" placeholder="password">
					<br>
					User rights
					<br>
					<select name="rights">
						<option value="administrator">Администратор *</option>
						<br>
						<option value="city_manager">Сити-менеджер *</option>
						<br>
						<option value="network_meneger">Нетворк-менеджер *</option>
						<br>
						<option value="user">Пользователь *</option>
						<br>
					</select>
					<br>
					<p>
						Администратор - имеет права редактировать страницу, изменять контент, владелец сервера.
						<br>
						Сити-менеджер - рекламщик.
						<br>
						Нетворк-менеджер - оператор сети.
						<br>
						Пользователь - имеет права администратора, за исключением изменеия ползователей, доступа к облачному хранилищу, изменения параметров сервера, доступа к терминалу и проводнику, может изменять боковую панель.
						<br>
					</p>
					<br>
					Обычно достаточно аккаунта администратора и нетворк- и сити- менеджера
					<br>
					Сменить пароль при следующем входе
					<br>
					<select name="req_change_pwd">
						<option value="true">Да</option><br>
						<option value="false">Нет</option><br>
					</select>
					<br>
					<button type="submit" class="btn btn-warning">Создать пользователя</button>
				</form>
			</div>
		`);
		$("#bd").append(itemphp);
		document.getElementById("ahead1").addEventListener("click", function(e) {
			$("#ControlPanelMenu").toggle();
			$("#useradd").hide();
		});
	} else {
		$("#useradd").show();
	}
});

$("#activation").on("click", function(e) {
	$("#ControlPanelMenu").toggle();
	if (document.getElementById("keycode") == null) {
		var keycode = $(`
			<div id="keycode">
				<button id="ahead2" class=" btn btn-secondary">\<\=</button><br>
				<form name="act">
					<input id="block1" style="width: 100px;">-<input id="block2" style="width: 100px;">-<input id="block3" style="width: 100px;">-<input id="block4" style="width: 100px;">-<input id="block5" style="width: 100px;">
					<br>
					<button id="sub" type="submit">Register Now</button>
					<div id="activated"></div>
				</form>
			</div>
		`);
		$("#bd").append(keycode);
		document.getElementById("ahead2").addEventListener("click", function(e) {
			$("#ControlPanelMenu").toggle();
			$("#keycode").hide();
		});

		document.forms.act.onsubmit = function(e) {
			e.preventDefault();

			block1 = encodeURIComponent(document.getElementById('block1').value);
			block2 = encodeURIComponent(document.getElementById('block2').value);
			block3 = encodeURIComponent(document.getElementById('block3').value);
			block4 = encodeURIComponent(document.getElementById('block4').value);
			block5 = encodeURIComponent(document.getElementById('block5').value);

			var xhr = new XMLHttpRequest();
			try{
				xhr.open('GET', '/admin/activate.php?' + 'block1=' + block1 + "&block2=" + block2 + "&block3=" + block3 + "&block4=" + block4 + "&block5=" + block5);
			} catch {
				xhr.open('GET', '../admin/activate.php?' + 'block1=' + block1 + "&block2=" + block2 + "&block3=" + block3 + "&block4=" + block4 + "&block5=" + block5);
			}

			xhr.onreadystatechange = function() {
				if (xhr.readyState === 4 && xhr.status === 200) {
					console.log(xhr.responseText);
					otvet = $("<p>" + xhr.responseText + "</p>");
					console.log(otvet);
					$('#activated').append(otvet);
				}
			}

			xhr.send();

		}
	} else {
		$("#keycode").show();
	}
});
$("#settingSYS").hide();

document.getElementById("ahead3").addEventListener("click", function(e) {
	$("#ControlPanelMenu").toggle();
	$("#settingSYS").hide();
});
$("#system").on("click", function(e) {
	$("#ControlPanelMenu").toggle();
	$("#settingSYS").show();
});

document.forms.system.onsubmit = function(e) {
	e.preventDefault();

	var servName = encodeURIComponent(document.getElementById('ServerName').value);
	var group = encodeURIComponent(document.getElementById('GroupName').value);
	var ip = encodeURIComponent(document.getElementById('ip').value);


	var xhr = new XMLHttpRequest();
	try{
		xhr.open('GET', '/admin/sys.php?' + 'servName=' + servName + "&group=" + group + "&ip=" + ip);
	} catch {
		xhr.open('GET', '../admin/sys.php?' + 'servName=' + servName + "&group=" + group + "&ip=" + ip);
	}

	xhr.onreadystatechange = function() {
		if (xhr.readyState === 4 && xhr.status === 200) {
			console.log(xhr.responseText);
			otvet = $("<p>" + xhr.responseText + "</p>");
			console.log(otvet);
			$('#saver1').append(otvet);
		}
	}

	xhr.send();
}

$("#update").on("click", function(e) {
	
});