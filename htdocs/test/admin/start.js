var prg = $(`
	<ul id="prglist" class="list-group" class="d-inline-block">
		<li id="cn" class="list-group-item">Content</li>
	</ul>
`);
var start =  $("#StartBlock");
start.append(prg);
var cntlist = $(`<ul id="cntlist" class="list-group" class="d-inline-block"></ul>`);
prg.append(cntlist);

var citymanage = $(`<li class="list-group-item" id="citymanage">CityManagment</li>`);
prg.append(citymanage);

var citylist = $(`<ul class="list-group" id="listcit"></ul>`);
prg.append(citylist);

var homecontent = $(`<li class="list-group-item" id="homecontent">HomeContent</li>`);
prg.append(homecontent);

var listhome = $(`<ul class="list-group" id="listhome"></ul>`);
prg.append(listhome);

for (let i = 0; i < progrmas.content.length; i++) {
	var index = progrmas.content[i];
	var item = $("<li class=\"list-group-item\" id=\"" + index.id + "\"><a href=\"" + index.href + "\">" + index.name + "</a></li>");
	cntlist.append(item);
	item.hide();
}

for (let i = 0; i < progrmas.citymanagment.length; i++) {
	var index = progrmas.citymanagment[i];
	console.log(i);
	console.log(index.modals);
	var item = $("<li class=\"list-group-item\" id=\"" + index.id + "\"><button type=\"button\" class=\"btn btn-link\" style=\"padding: 0px;\">" + index.name + "</button></li>");
	citylist.append(item);
	item.on("click", function() {
		console.log(i);
		$(progrmas.citymanagment[i].modals).modal("show");
	});
	item.hide();
}

for (let i = 0; i < progrmas.homecontent.length; i++) {
	var index = progrmas.homecontent[i];
	console.log(index);
	var item = $("<li class=\"list-group-item\" id=\"" + index.id + "\"><button type=\"button\" class=\"btn btn-link\" style=\"padding: 0px;\">" + index.name + "</button></li>");
	listhome.append(item);
	item.on("click", function() {
		$(index.modals).modal("show");
		$(".gaget").hide();
	});
	item.hide();
}
/*
for (var i = 0; i < progrmas.citymanagment.length; i++) {
	var index = progrmas.citymanagment[i];
	document.querySelector("#" + index.id).onclick = function() {
		$("#" + index.modals).modal("show");
	};
	console.log(index);
}

for (var i = 0; i < progrmas.homecontent.length; i++) {
	var index = progrmas.homecontent[i];
	$("#" + index.id).on("click", function() {
		$("#" + index.modals).modal("show");
	});
}
*/
$("#StartItem").hide();
$("#prglist").hide();
$("#cntlist").hide();
$("#menu").hide();
$("#user").hide();
$("#StartBlock").hide();
$("#cs").hide();
citylist.hide();
listhome.hide();

$("#StartBtn").on("click", function() {
	$("#StartItem").toggle();
	$("#menu").toggle();
	$("#user").toggle();
	$("#StartBlock").toggle();
	document.getElementById('start').classList.toggle("shown");
});

$("#programs").on("click", function() { //mouseover to classic
	$("#prglist").toggle();
	$("#cntlist").hide();
	for (var i = 0; i < progrmas.content.length; i++) {
		var index = progrmas.content[i];
		//console.log(index);
		var item = $("#" + index.id);
		item.hide();
		console.log(item);
	}
});

$("#cn").on("click", function() { //mouseover to classic
	$("#cs").toggle();
	$("#cntlist").toggle();
	for (var i = 0; i < progrmas.content.length; i++) {
		var index = progrmas.content[i];
		//console.log(index);
		var item = $("#" + index.id);
		item.toggle();
		console.log(item);
	}
});

$("#citymanage").on("click", function() { //mouseover to classic
	//$("#cs").toggle();
	citylist.toggle();
	//$("#listcit").toggle();
	for (var i = 0; i < progrmas.citymanagment.length; i++) {
		var index = progrmas.citymanagment[i];
		//console.log(index);
		var item = $("#" + index.id);
		item.toggle();
		console.log(item);
	}
});

$("#homecontent").on("click", function() { //mouseover to classic
	//$("#cs").toggle();
	listhome.toggle();
	//$("#listcit").toggle();
	for (var i = 0; i < progrmas.homecontent.length; i++) {
		var index = progrmas.homecontent[i];
		//console.log(index);
		var item = $("#" + index.id);
		item.toggle();
		console.log(item);
	}
});

$("#contrpanel").on("click", function() {
	$("#control").modal("show");
});

$("#cls").on("click", function() {
	$("#control").modal("hide");
});

$("#close").on("click", function() {
	$("#control").modal("hide");
	$(".gaget").show();
});

$("#term").on("click", function() {
	$("#Terminal").modal("show");
});


$("#shutdown").on("click", function() {
	$("#shut_down").modal("show");
});

/*
$("#cls2").on("click", function() {
	$("#shut_down").modal("hide");
});

$("#cls3").on("click", function() {
	$("#shut_down").modal("hide");
});


$("#cls5").on("click", function() {
	$("#Terminal").modal("hide");
});

$("#cls6").on("click", function() {
	$("#adpaint").modal("hide");
});

$("#cls7").on("click", function() {
	$("#adpaint").modal("hide");
});
*/

closer = document.getElementsByClassName('close');

for (var i = 0; i < closer.length; i++) {
	closer[i].onclick = function(e) {
	/*
	e.srcElement.parentNode.parentNode.parentNode.parentNode.classList.remove("show");
    e.srcElement.parentNode.parentNode.parentNode.parentNode.setAttribute('aria-hidden', true);
    e.srcElement.parentNode.parentNode.parentNode.parentNode.removeAttribute('aria-modal');
    e.srcElement.parentNode.parentNode.parentNode.parentNode.removeAttribute('role');
	document.body.classList.remove("modal-open");
	//this._resetAdjustments()
	//this._scrollBar.reset()
	//$("html")[0].trigger("click");
	polotno = document.querySelector('.modal-backdrop');
	document.body.removeChild(polotno);
	document.body.removeAttribute("data-bs-padding-right");
	*/
		var mod = e.srcElement.parentNode.parentNode.parentNode.parentNode.id;
		if (mod == "notelog" || mod == "homelog") {
			mod = e.srcElement.parentNode.parentNode.parentNode.parentNode.parentNode.id;
		}
		console.log(mod);
		$("#" + mod).modal("hide");
		
	}
}

/*
$('#Terminal')[2].modal({ keyboard: true,
	show: true
});
// Jquery draggable
$('#dialog').draggable({
    handle: ".modal-header"
});
*/

const elemModal = document.querySelector('#Terminal');
// активируем элемент в качестве модального окна с параметрами по умолчанию
const setupmodal = new bootstrap.Modal(elemModal, {
	keyboard: true,
	show: true
});

const conmod = document.querySelector('#control');
// активируем элемент в качестве модального окна с параметрами по умолчанию
const com1 = new bootstrap.Modal(conmod, {
	keyboard: true,
	show: true
});

const explorer = document.querySelector('#fileman');
// активируем элемент в качестве модального окна с параметрами по умолчанию
const co1 = new bootstrap.Modal(explorer, {
	keyboard: true,
	show: true
});

// Jquery draggable
$('#dialog').draggable({
    handle: ".modal-header"
});


$('#contrl').draggable({
    handle: ".modal-header"
});

$('#cshow').draggable({
    handle: ".modal-header"
});

const notepad1 = document.querySelector("#notelog");
const pad = new bootstrap.Modal(notepad1, {
	keyboard: true,
	show: true
});

$("#notelog").draggable(); //{	handle: "modal-header"}