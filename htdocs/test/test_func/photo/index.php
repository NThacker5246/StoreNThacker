<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Testing</title>
</head>
<body>
	<div>
		<input type="file" id="files" name="file" /> Read bytes: 
		<span class="readBytesButtons">
			<button data-startbyte="0" data-endbyte="4">1-5</button>
			<button data-startbyte="5" data-endbyte="14">6-15</button>
			<button data-startbyte="6" data-endbyte="7">7-8</button>
			<button>entire file</button>
		</span>
		<div id="byte_range"></div>
		<div id="byte_content"></div>
		<script type="text/javascript">
			var button = document.getElementById('btn');
			/*
			button.onclick = function(e) {
				e.preventDefault();
				var input = document.getElementById('file');
				console.log(input);
			}
			*/
			function readBlob(opt_startByte, opt_stopByte) {

				var files = document.getElementById('files').files;
				if (!files.length) {
					alert('Please select a file!');
					return;
				}
				var file = files[0];
				var start = parseInt(opt_startByte) || 0;
				var stop = parseInt(opt_stopByte) || file.size - 1;

				var reader = new FileReader();

				// If we use onloadend, we need to check the readyState.
				reader.onloadend = function(evt) {
					if (evt.target.readyState == FileReader.DONE) { // DONE == 2
						document.getElementById('byte_content').textContent = _.reduce(evt.target.result, 
							function(sum, byte) {
								return sum + ' 0x' + String(byte).charCodeAt(0).toString(16);
							}, '');
					document.getElementById('byte_range').textContent = 
						['Read bytes: ', start + 1, ' - ', stop + 1,
						 ' of ', file.size, ' byte file'].join('');
					}
				};

				var blob;
				if (file.slice) {
					blob = file.slice(start, stop + 1);
				}else if (file.webkitSlice) {
					blob = file.webkitSlice(start, stop + 1);
				} else if (file.mozSlice) {
					blob = file.mozSlice(start, stop + 1);
				}
				console.log('reader: ', reader);
				reader.readAsBinaryString(blob);
				}
				
				document.querySelector('.readBytesButtons').addEventListener('click', function(evt) {
				if (evt.target.tagName.toLowerCase() == 'button') {
					var startByte = evt.target.getAttribute('data-startbyte');
					var endByte = evt.target.getAttribute('data-endbyte');
					readBlob(startByte, endByte);
				}
				}, false);
		</script>
	</div>
</body>
</html>