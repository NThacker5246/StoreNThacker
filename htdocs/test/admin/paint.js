/*
const home = {
	mouseX: 396,
	mouseY: 121,
}

const elem = document.querySelector('#canvas'); // выбираем элемент, на котором будем отслеживать движение мыши
var context = elem.getContext('2d');
elem.addEventListener('mousemove', function (event) {
  // добавляем обработчик события "mousemove"
	const x = event.clientX; // получаем координату X мыши
	const y = event.clientY; // получаем координату Y мыши
	//console.log(context);
	//var cx = (x / 1.735985533453888) - (home.mouseX / 1.735985533453888);
	//var cy = (y / 1.952983725135624) - (home.mouseY / 1.952983725135624);

	context.strokeStyle = "#ff0	";
	context.fillStyle = "#ff0";
	context.beginPath();
	context.arc(x,y,5,0,Math.PI*2,true);
	context.closePath();
	context.stroke();
	context.fill();
	console.log(`Координаты центра шарика: x=${Math.floor(x)}, y=${Math.floor(y)}`);
	console.log(`Координаты мыши: x=${x}, y=${y}`); // выводим координаты мыши в консоль
});

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
		currY = e.clientY - canvas.offsetTop;

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
			currY = e.clientY - canvas.offsetTop;
			draw();
		}
	}
}
*/