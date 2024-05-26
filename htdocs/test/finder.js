url = document.location.href;
url1 = url.split("/");

if (url1[3] == "admin") {
	document.querySelector("#dropdownMenuButton").onclick = function(e) {
		e.preventDefault();
		document.querySelector("#finder > div.dropdown > ul").classList.toggle("show");
	}
	document.querySelector("#dropdownMenuButton1").onclick = function(e) {
		e.preventDefault();
		document.querySelector("#nf > div.dropdown > ul").classList.toggle("show");
	}
	document.querySelector("#dropdownMenuButton2").onclick = function(e) {
		e.preventDefault();
		document.querySelector("#nf1 > div.dropdown > ul").classList.toggle("show");
	}
}

var option = document.getElementById('option');



option.addEventListener('click', function() {
	if (option.value == "cmd") {
		$("#Terminal").modal("show");
		$("#fileman").modal("hide");
		option1.value = "cmd";
	} else if (option.value == "explorer") {
		$("#Terminal").modal("hide");
		$("#fileman").modal("show");
		option2.value = "explorer";
		console.log("Explorer");
	} else {
		$("#fileman").modal("hide");
		$("#Terminal").modal("hide");
		option1.value = "finder";
	}
});

var option1 = document.getElementById('option1');
option1.addEventListener('click', function() {
	if (option1.value == "find") {
		$("#Terminal").modal("hide");
		option.value = "find";
		option1.value = "find";
		option2.value = "find";
	} else if (option1.value == "explorer") {
		$("#Terminal").modal("hide");
		$("#fileman").modal("show");
		option.value = "explorer";
		option2.value = "explorer";
		option1.value = "explorer";
	}
});

var option2 = document.getElementById('option2');
option2.addEventListener('click', function() {
	if (option2.value == "find") {
		$("#Terminal").modal("hide");
		$("#fileman").modal("hide");
		option.value = "find";
		option1.value = "find";
		option2.value = "find";
	} else if (option2.value == "cmd") {
		$("#Terminal").modal("show");
		$("#fileman").modal("hide");
		option.value = "cmd";
		option1.value = "cmd";
		option2.value = "cmd";
	}
});

document.getElementById('cls5').addEventListener("click", function() {
	$("#Terminal").modal("hide");
});

const elemModa2 = document.getElementById('Terminal');
// активируем элемент в качестве модального окна с параметрами по умолчанию
const setupmodal2 = new bootstrap.Modal(elemModa2, {
	keyboard: true,
	show: true
});

$('#dialogt').draggable({
    handle: ".modal-header"
});

//explorer

document.getElementById('cls').addEventListener("click", function() {
	$("#fileman").modal("hide");
});

const elemModal1 = document.getElementById('fileman');
// активируем элемент в качестве модального окна с параметрами по умолчанию
const setupmodal1 = new bootstrap.Modal(elemModal1, {
	keyboard: true,
	show: true
});

$('#dialogtf').draggable({
    handle: ".modal-header"
});

document.getElementById("winver").onclick = function(e) {
	if (url1[3] == "admin") {
		document.querySelector("#finder > div.dropdown > ul").classList.toggle("show");
		document.querySelector("#nf > div.dropdown > ul").classList.toggle("show");
		document.querySelector("#nf1 > div.dropdown > ul").classList.toggle("show");
	}
	$("#version").modal("show");
};

document.getElementById("winver1").onclick = function(e) {
	if (url1[3] == "admin") {
		document.querySelector("#finder > div.dropdown > ul").classList.toggle("show");
		document.querySelector("#nf > div.dropdown > ul").classList.toggle("show");
		document.querySelector("#nf1 > div.dropdown > ul").classList.toggle("show");	
	}
	$("#version").modal("show");
};

document.getElementById("winver2").onclick = function(e) {
	if (url1[3] == "admin") {
		document.querySelector("#finder > div.dropdown > ul").classList.toggle("show");
		document.querySelector("#nf > div.dropdown > ul").classList.toggle("show");
		document.querySelector("#nf1 > div.dropdown > ul").classList.toggle("show");
	}
	$("#version").modal("show");
};

$("#AboutWindowsNT").draggable({
	handle: ".modal-header"
});