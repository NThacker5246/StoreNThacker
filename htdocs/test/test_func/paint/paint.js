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
*/

var x = 0;
var y = 0;

document.getElementById("canvas").onmouseover = function(e) {
	window.x = e.offsetX;
	window.y = e.offsetY;

	var canvas = document.getElementById("canvas");
	var ctx = canvas.getContext("2d");
	ctx.fillRect(e.offsetX, e.offsetY, 1, 1);
	console.log(x);
	console.log(y);
}
