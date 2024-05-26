var responseDiv = $('#response');
var responseDiv1 = $('#response1');

document.forms.cmdexe.onsubmit = function(e) {
	e.preventDefault();

	var userInput = document.forms.cmdexe.command.value;
	userInput = encodeURIComponent(userInput);

	var xhr = new XMLHttpRequest();
	try{
		xhr.open('GET', '/admin/terminal.php?' + 'command=' + userInput);
	} catch {
		xhr.open('GET', '../admin/terminal.php?' + 'command=' + userInput);
	}

	xhr.onreadystatechange = function() {
		if (xhr.readyState === 4 && xhr.status === 200) {
			console.log(xhr.responseText);
			otvet = $("<p>" + xhr.responseText + "</p>");
			$('#response').append(otvet);
			$('#response1').append(otvet);
			//responseDiv.appendChild(document.createTextNode("\n" + xhr.responseText));
			//responseDiv1.appendChild(document.createTextNode("\n" + xhr.responseText));
		}
	}

	xhr.send();

}
