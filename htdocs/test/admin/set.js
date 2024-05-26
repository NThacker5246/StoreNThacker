//onload

var nameofmenu = document.getElementById('nameof');
var checkbox = document.getElementById('menu');

var dbname = document.getElementById('dbname');
var checkbox2 = document.getElementById('infoblocks');


var components = document.getElementById('optcomp');
var checkbox3 = document.getElementById('optcom');

nameofmenu.setAttribute('disabled', '');
dbname.setAttribute('disabled', '');
components.setAttribute('disabled', '');

//name of menu enable/disable

checkbox.addEventListener('click', function(){
    if (checkbox.checked) {
        nameofmenu.removeAttribute('disabled');
    } else {
        nameofmenu.setAttribute('disabled', '');
    }
});
console.log(nameofmenu);

//infoblock enable/disable

checkbox2.addEventListener('click', function(){
    if (checkbox2.checked) {
        dbname.removeAttribute('disabled');
    } else {
        dbname.setAttribute('disabled', '');
    }
});

//components enable/disable

checkbox3.addEventListener('click', function(){
    if (checkbox3.checked) {
        components.removeAttribute('disabled');
    } else {
        components.setAttribute('disabled', '');
    }
});
