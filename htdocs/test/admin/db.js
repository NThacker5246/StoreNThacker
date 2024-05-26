var kek = document.getElementById('kek');
var select = document.getElementById('select');
var folder = document.getElementById("folder");

select.setAttribute('disabled', '');
folder.setAttribute('disabled', '');

kek.addEventListener('click', function() {
	if (kek.checked == true) {
		select.removeAttribute('disabled');
		folder.removeAttribute('disabled');
	} else {
		select.setAttribute('disabled', '');
		folder.setAttribute('disabled', '');
	}
})

select.addEventListener('mouseup', function() {
	if (select.value == 'catalog') {
		folder.setAttribute('value', '../templates/catalog/');
	}

	if (select.value == 'infoblock') {
		folder.setAttribute('value', '../templates/infoblock/');
	}
	if (select.value == 'none') {
		folder.setAttribute('value', '../templates/');
	}
})
