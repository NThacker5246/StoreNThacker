function clamp(a, b) {
	return Math.min(Math.max(a, 0), b);
}

function setCookie(cname, cvalue, exdays=10) {
	const d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	let expires = "expires="+ d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}


class Color {
	constructor(red, green, blue) {
		this.red = red;
		this.green = green;
		this.blue = blue;

		this.getHex = function() {
			var Tred = clamp(this.red, 255);
			var Tgreen = clamp(this.green, 255);
			var Tblue = clamp(this.blue, 255);
			Tred = Tred.toString(16);
			Tgreen = Tgreen.toString(16);
			Tblue = Tblue.toString(16);
			if (Tred.length == 1) {
				Tred = "0" + Tred;
			}

			if (Tgreen.length == 1) {
				Tgreen = "0" + Tgreen;
			}

			if (Tblue.length == 1) {
				Tblue = "0" + Tblue;
			}

			var string = "#" + Tred + Tgreen + Tblue;
			return string;
		}
	}
}

function intToHsv(int) {
	var h = (int & 1023) / 1023; // 10bit
	var s = ((int >> 10) & 1023) / 1023; // 10bit
	var v = ((int >> 20) & 4095) / 4095; // 12bit
	return {
		h: Math.round(h * 360),
		s: Math.round(s * 100),
		v: Math.round(v * 100)
	};
}

function hsvToRgb(hsv) {
	let h, s, v, r, g, b, i, f, p, q, t;
	h = hsv.h / 360;
	s = hsv.s / 100;
	v = hsv.v / 100;
	i = Math.floor(h * 6);
	f = h * 6 - i;
	p = v * (1 - s);
	q = v * (1 - f * s);
	t = v * (1 - (1 - f) * s);
	switch (i % 6) {
	default:
		break;
	case 0:
		r = v;
		g = t;
		b = p;
		break;
	case 1:
		r = q;
		g = v;
		b = p;
		break;
	case 2:
		r = p;
		g = v;
		b = t;
		break;
	case 3:
		r = p;
		g = q;
		b = v;
		break;
	case 4:
		r = t;
		g = p;
		b = v;
		break;
	case 5:
		r = v;
		g = p;
		b = q;
		break;
	}
	return {
		r: Math.round(r * 255),
		g: Math.round(g * 255),
		b: Math.round(b * 255)
	};
}

function rgbToHex(rgb) {
	return (
		"#" +
		((1 << 24) + (rgb.r << 16) + (rgb.g << 8) + rgb.b).toString(16).slice(1)
	);
}