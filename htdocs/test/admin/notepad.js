var responseDiv = document.getElementById('mousepad');

textarea = document.getElementById('txt');
textarea.onkeydown = function(e) {
	if(e.keyCode == 13){
		textarea.value[-1] = "";
		textarea.value += "/n";
	}
}

document.forms.notepad.onsubmit = function(e) {
	e.preventDefault();

	var userInput = document.forms.notepad.text.value;
	userInput = encodeURIComponent(userInput);
	var name = document.forms.notepad.name.value;
	name = encodeURIComponent(name);

	var xhr = new XMLHttpRequest();
	try{
		xhr.open('GET', '/admin/notepad.php?' + 'text=' + userInput + '&name=' + name);
	} catch {
		xhr.open('GET', '../admin/notepad.php?' + 'text=' + userInput + '&name=' + name);
	}

	xhr.onreadystatechange = function() {
		if (xhr.readyState === 4 && xhr.status === 200) {
			console.log(xhr.responseText)
			responseDiv.innerHTML = xhr.responseText;
		}
	}

	xhr.send();

}

var button = document.getElementById("loadFile");
button.onclick = function(e) {
	e.preventDefault();

	var loadWay = document.getElementById("load").value;
	loadWay = encodeURIComponent(loadWay);

	var xhr = new XMLHttpRequest();

	try {
		xhr.open('GET', '/admin/load.php?' + 'way=' + loadWay);
	} catch {
		xhr.open('GET', '../admin/load.php?' + 'way=' + loadWay);
	}

	xhr.onreadystatechange = function() {
		if (xhr.readyState === 4 && xhr.status === 200) {
			console.log(xhr.responseText);
			document.getElementById('txt').value = xhr.responseText;
		}
	}

	xhr.send();
}
