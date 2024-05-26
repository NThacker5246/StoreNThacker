var responseDiv = $('#otvet');
var responseDiv1 = $('#otvet1');

document.forms.address.onsubmit = function(e) {
	if (e != null) {
		e.preventDefault();
	}

	var userInput = document.forms.address.addressString.value;
	userInput = encodeURIComponent(userInput);

	var xhr = new XMLHttpRequest();
	try{
		xhr.open('GET', '/admin/explorer.php?' + 'addressString=' + userInput);
	} catch {
		xhr.open('GET', '../admin/explorer.php?' + 'addressString=' + userInput);
	}

	xhr.onreadystatechange = function() {
		if (xhr.readyState === 4 && xhr.status === 200) {
			console.log(xhr.responseText)
			$('#otvet').html(xhr.responseText);
			$('#otvet1').html(xhr.responseText);
		}
	}

	xhr.send();

}