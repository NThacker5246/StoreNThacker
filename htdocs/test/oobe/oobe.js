document.getElementById('send').onclick = function(e) {
	e.preventDefault();

	var video = encodeURIComponent(document.getElementById("video").checked);
	var name = encodeURIComponent(document.getElementById("name").value);
	var orgn = encodeURIComponent(document.getElementById("orgn").value);
	var nick = encodeURIComponent(document.getElementById("nick").value);

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
			$('#bliss').append(otvet);
		}
	}

	xhr.send();

	var xhr = new XMLHttpRequest();
	try {
		xhr.open('GET', '/oobe/setup.php?' + 'video=' + video + "&name=" + name + "&orgn=" + orgn + "&nick=" + nick);
	} catch {
		xhr.open('GET', '../oobe/setup.php?' + 'video=' + video + "&name=" + name + "&orgn=" + orgn + "&nick=" + nick);
	}

	xhr.onreadystatechange = function() {
		if (xhr.readyState === 4 && xhr.status === 200) {
			console.log(xhr.responseText);
			otvet = $("<p>" + xhr.responseText + "</p>");
			console.log(otvet);
			$('#bliss').append(otvet);
			location.href = "gif.php";
		}
	}

	xhr.send(0);
}