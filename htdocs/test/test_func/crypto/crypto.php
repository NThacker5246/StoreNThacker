<?php
class Bit {
	public $byte;

	function __construct($byte) {
		$this->byte = $byte;
	}

	function band($other) {
		$length = strlen($this->byte);
		$string = "";
		for ($i = 0; $i < $length; $i++) {
			if ($this->byte[$i] == "1" && $other->byte[$i] == "1") {
				$string .= "1";
			} else {
				$string .= "0";
			}
		}
		$this->byte = $string;
	}

	function bor($other) {
		$length = strlen($this->byte);
		$string = "";
		for ($i = 0; $i < $length; $i++) {
			if ($this->byte[$i] == "0" && $other->byte[$i] == "0") {
				$string .= "0";
			} else {
				$string .= "1";
			}
		}
		$this->byte = $string;
	}

	function bxor($other)
	{
		$length = strlen($this->byte);
		$string = "";
		for ($i=0; $i < $length; $i++) { 
			if ($this->byte[$i] == "0" && $other->byte[$i] == "0") {
				$string .= "0";
			} elseif ($this->byte[$i] == "1" && $other->byte[$i] == "1") {
				$string .= "0";
			} else {
				$string .= "1";
			}
		}
		$this->byte == $string;
	}

	function cycleMove($n) {
		for ($i=0; $i < $n; $i++) { 
			$string = $this->byte;
			$buffer = $string[0];
			$r = "";
			for ($j=1; $j < strlen($string); $j++) { 
				$r .= $string[$i];
			}
			$r .= $buffer;
			$this->byte = $r;
		}
	}
	function GetHex() {
		$keys = [
			"0000" => "0",
			"0001" => "1",
			"0010" => "2",
			"0011" => "3",
			"0100" => "4",
			"0101" => "5",
			"0110" => "6",
			"0111" => "7",
			"1000" => "8",
			"1001" => "9",
			"1010" => "A",
			"1011" => "B",
			"1100" => "C",
			"1101" => "D",
			"1110" => "E",
			"1111" => "F",
		];
		$hex = "";
		$long = strlen($this->byte) / 4;
		for ($i=0; $i < $long; $i++) { 
			$temp = "";
			foreach ($keys as $key => $value) {
				if ($key == ($this->byte[$i*4] . $this->byte[$i*4+1] . $this->byte[$i*4+2] . $this->byte[$i*4+3])) {
					$temp = $value;
				}
			}
			$hex .= $temp;
		}
		return $hex;
	}
}

$text = "Lets encrypt Hello world ban schiglovligenda kawasaki";
$binary = implode(' ', array_map(function($x) {
	return str_pad(decbin(ord($x)), 8, "0", STR_PAD_LEFT);
}, str_split($text)));

$array = explode(' ', $binary);
$byter = [];

function get8bit(&$array, &$done) {
	foreach ($array as $item) {
		if (strlen($item) < 8) {
			$item = str_pad($item, 8, "0", STR_PAD_LEFT);
		}
		$done[] = $item;
	}
}

get8bit($array, $byter);

/*
var_dump($byter);

function check($array)
{
	$asr = $array;
	if (count($asr) > 8 ) {
		$a = [];
		$b = [];

		for ($i=0; $i < count($asr); $i++) { 
			if ($i <= 7) {
				array_push($a, $asr[$i]);
			} else {
				array_push($b, $asr[$i]);
			}

			if (count($b) < 8) {
				$const = count($b);
				for ($j=0; $i < (8 - $const); $i++) { 
					array_push($b, "00000000");
				}
				return [$a, $b];
			} elseif (count($b) > 8) {
				return [$a, check($b)];
			} else {
				return [$a, $b];
			}
		}
	}
}

$blocksOf8Bytes = check($byter);

echo "<br><br>";

function getBlocks($blocks, $array){
	$asr = $array;
	$a = $blocks[0];
	$b = $blocks[1];
	array_push($asr, $a);
	$type = gettype($b);
	if ("$type" == "string"){
		array_push($asr, $b);
	}
	else { 
		return getBlocks($b, $asr);
	}
	return $asr;
}


$arr = [];
$arr = getBlocks($blocksOf8Bytes, $arr);

var_dump($arr)
*/

$blocks1 = [];
$long = count($byter);
for ($i=0; $i < $long / 8; $i++) {
	$array1 = []; 
	for ($j=0; $j < 8; $j++) { 
		if (!empty($byter[(($i*8)+$j)])) {
			array_push($array1, $byter[(($i*8)+$j)]);
		} else {
			array_push($array1, "00000000");
		}
	}
	array_push($blocks1, $array1);
}

# Зададим начальные параметры для DES
# Перестановочные таблицы для шифрования и дешифрования
$initial_permutation = [58, 50, 42, 34, 26, 18, 10, 2,
					   60, 52, 44, 36, 28, 20, 12, 4,
					   62, 54, 46, 38, 30, 22, 14, 6,
					   64, 56, 48, 40, 32, 24, 16, 8,
					   57, 49, 41, 33, 25, 17, 9, 1,
					   59, 51, 43, 35, 27, 19, 11, 3,
					   61, 53, 45, 37, 29, 21, 13, 5,
					   63, 55, 47, 39, 31, 23, 15, 7];

$final_permutation = [40, 8, 48, 16, 56, 24, 64, 32,
					 39, 7, 47, 15, 55, 23, 63, 31,
					 38, 6, 46, 14, 54, 22, 62, 30,
					 37, 5, 45, 13, 53, 21, 61, 29,
					 36, 4, 44, 12, 52, 20, 60, 28,
					 35, 3, 43, 11, 51, 19, 59, 27,
					 34, 2, 42, 10, 50, 18, 58, 26,
					 33, 1, 41, 9, 49, 17, 57, 25];

$RNtable = [32, 1, 2, 3, 4, 5,
		   4, 5, 6, 7, 8, 9,
		   8, 9, 10, 11, 12, 13,
		   12, 13, 14, 15, 16, 17,
		   16, 17, 18, 19, 20, 21,
		   20, 21, 22, 23, 24, 25,
		   24, 25, 26, 27, 28, 29,
		   28, 29, 30, 31, 32, 1];

$S1 = [
	[14, 4, 13, 1, 2, 15, 11, 8, 3, 10, 6, 12, 5, 9, 0, 7], 
	[0, 15, 7, 4, 14, 2, 13, 1, 10, 6, 12, 11, 9, 5, 3, 8], 
	[4, 1, 14, 8, 13, 6, 2, 11, 15, 12, 9, 7, 3, 10, 5, 0],
	[15, 12, 8, 2, 4, 9, 1, 7, 5, 11, 3, 14, 10, 0, 6, 13]
];

$S2 = [
	[15, 1, 8, 14, 6, 11, 3, 4, 9, 7, 2, 13, 12, 0, 5, 10],
	[3, 13, 4, 7, 15, 2, 8, 14, 12, 0, 1, 10, 6, 9, 11, 5],
	[0, 14, 7, 11, 10, 4, 13, 1, 5, 8, 12, 6, 9, 3, 2, 15],
	[13, 8, 10, 1, 3, 15, 4, 2, 11, 6, 7, 12, 0, 5, 14, 9]
];

$S3 = [
	[10, 0, 9, 14, 6, 3, 15, 5, 1, 13, 12, 7, 11, 4, 2, 8],
	[13, 7, 0, 9, 3, 4, 6, 10, 2, 8, 5, 14, 12, 11, 15, 1],
	[13, 6, 4, 9, 8, 15, 3, 0, 11, 1, 2, 12, 5, 10, 14, 7],
	[1, 10, 13, 0, 6, 9, 8, 7, 4, 15, 14, 3, 11, 5, 2, 12]
];

$S4 = [
	[7, 13, 14, 3, 0, 6, 9, 10, 1, 2, 8, 5, 11, 12, 4, 15],
	[13, 8, 11, 5, 6, 15, 0, 3, 4, 7, 2, 12, 1, 10, 14, 9],
	[10, 6, 9, 0, 12, 11, 7, 13, 15, 1, 3, 14, 5, 2, 8, 4],
	[3, 15, 0, 6, 10, 1, 13, 8, 9, 4, 5, 11, 12, 7, 2, 14]
];

$S5 = [
	[2, 12, 4, 1, 7, 10, 11, 6, 8, 5, 3, 15, 13, 0, 14, 9],
	[14, 11, 2, 12, 4, 7, 13, 1, 5, 0, 15, 10, 3, 9, 8, 6],
	[4, 2, 1, 11, 10, 13, 7, 8, 15, 9, 12, 5, 6, 3, 0, 14],
	[11, 8, 12, 7, 1, 14, 2, 13, 6, 15, 0, 9, 10, 4, 5, 3]
];

$S6 = [
	[12, 1, 10, 15, 9, 2, 6, 8, 0, 13, 3, 4, 14, 7, 5, 11],
	[10, 15, 4, 2, 7, 12, 9, 5, 6, 1, 13, 14, 0, 11, 3, 8],
	[9, 14, 15, 5, 2, 8, 12, 3, 7, 0, 4, 10, 1, 13, 11, 6],
	[4, 3, 2, 12, 9, 5, 15, 10, 11, 14, 1, 7, 6, 0, 8, 13]
];

$S7 = [
	[4, 11, 2, 14, 15, 0, 8, 13, 3, 12, 9, 7, 5, 10, 6, 1],
	[13, 0, 11, 7, 4, 9, 1, 10, 14, 3, 5, 12, 2, 15, 8, 6],
	[1, 4, 11, 13, 12, 3, 7, 14, 10, 15, 6, 8, 0, 5, 9, 2],
	[6, 11, 13, 8, 1, 4, 10, 7, 9, 5, 0, 15, 14, 2, 3, 12]
];

$S8 = [
	[13, 2, 8, 4, 6, 15, 11, 1, 10, 9, 3, 14, 5, 0, 12, 7],
	[1, 15, 13, 8, 10, 3, 7, 4, 12, 5, 6, 11, 0, 14, 9, 2],
	[7, 11, 4, 1, 9, 12, 14, 2, 0, 6, 10, 13, 15, 3, 5, 8],
	[2, 1, 14, 7, 4, 10, 8, 13, 15, 12, 9, 0, 3, 5, 6, 11]
];

$PR = [16, 7, 20, 21, 29, 12, 28, 17, 1, 15, 23, 26, 5, 18, 31, 10, 2, 8, 24, 14, 32, 27, 3, 9, 19, 13, 30, 6, 22, 11, 4, 25];

function permute($block, $table) {
	$result = "";
	foreach ($table as $index) {
		$result .= $block[$index - 1];
	}
	return $result;
}

function BinToDec($bin1) {
	$keys = [
		"0000" => 0,
		"0001" => 1,
		"0010" => 2,
		"0011" => 3,
		"0100" => 4,
		"0101" => 5,
		"0110" => 6,
		"0111" => 7,
		"1000" => 8,
		"1001" => 9,
		"1010" => 10,
		"1011" => 11,
		"1100" => 12,
		"1101" => 13,
		"1110" => 14,
		"1111" => 15,
	];

	foreach ($keys as $key => $value) {
		if ($key == $bin1) {
			return $value;
		}
	}
}

function DecToBin($dec1)
{
	$keys = [
		0 => "0000",
		1 => "0001",
		2 => "0010",
		3 => "0011",
		4 => "0100",
		5 => "0101",
		6 => "0110",
		7 => "0111",
		8 => "1000",
		9 => "1001",
		10 => "1010",
		11 => "1011",
		12 => "1100",
		13 => "1101",
		14 => "1110",
		15 => "1111",
	];

	foreach ($keys as $key => $value) {
		if ($key == $dec1) {
			return $value;
		}
	}
}

function des_round($blockL, $blockR, $key, $iter1){
	$R0 = permute($blockR, $GLOBALS['RNtable']);
	$RB0 = new Bit($R0);
	$KB = new Bit($key);
	$RB0->bxor($KB);
	$R0 = $RB0->byte;
	$l = strlen($R0);
	$blocks = [];
	for ($i=0; $i < ($l / 6); $i++) { 
		$strin1 = "";
		for ($j=0; $j < 6; $j++) { 
			$strin1 .= $R0[($i-1)*6+$j];
		}
		array_push($blocks, $strin1);
	}
		
	$R1 = "";
	foreach ($blocks as $item) {
		$s1 = $item[0];
		$s2 = $item[5];
		$col = "";
		for ($i=1; $i < 5; $i++) { 
			$col .= $item[$i];
		}
		$s = "00" . $s1 . $s2;
		$tr = BinToDec($s);
		$col1 = BinToDec($col);
		$it = $iter1 + 1;
		$num = 0;
		if ($it == 1 || $it == 9) {
			$num = $GLOBALS['S1'][$tr][$col1];
		} elseif ($it == 2 || $it == 10) {
			$num = $GLOBALS['S2'][$tr][$col1];
		} elseif ($it == 3 || $it == 11) {
			$num = $GLOBALS['S3'][$tr][$col1];
		} elseif ($it == 4 || $it == 12) {
			$num = $GLOBALS['S4'][$tr][$col1];
		} elseif ($it == 5 || $it == 13) {
			$num = $GLOBALS['S5'][$tr][$col1];
		} elseif ($it == 6 || $it == 14) {
			$num = $GLOBALS['S6'][$tr][$col1];
		} elseif ($it == 7 || $it == 15) {
			$num = $GLOBALS['S7'][$tr][$col1];
		} elseif ($it == 8 || $it == 18) {
			$num = $GLOBALS['S8'][$tr][$col1];
		} 
		$binaryNumberR1 = DecToBin($num);
		$R1 .= $binaryNumberR1;
	}
		

	$R1t = permute($R1, $GLOBALS['PR']);
	$R1f = new Bit($blockL);
	$R1g = new Bit($R1t);
	$R1f->bxor($R1g);
	$R1finaly = $R1f->byte;
	$L1 = $blockR;
	#print([L1, R1finaly])
	return [$L1, $R1finaly];
}


function feistel_function($block, $key) {
	$binary = implode(' ', array_map(function($x) {
		return str_pad(decbin(ord($x)), 8, "0", STR_PAD_LEFT);
	}, str_split($block)));
	$array_key = [];
	$b = explode(" ", $binary);
	get8bit($b, $array_key);
	for ($i=0; $i < 4; $i++) { 
		array_push($array_key, "00000000");
	}

	$ke1 = "";
	foreach ($array_key as $item) {
		$ke1 .= $item;
	}

	$leng = strlen($ke1);
	$LK = "";
	$RK = "";
	for ($i=0; $i < $leng; $i++) { 
		if ($i < 28) {
			$LK .= $ke1[$i];
		} else {
			$RK .= $ke1[$i];
		}
	}

	$LN = "";
	$RN = "";
	$leng = strlen($block);
	for ($i=0; $i < $leng; $i++) { 
		if ($i < 32) {
			$LN .= $block[$i];
		} else {
			$RN .= $block[$i];
		}
	}
	for ($i=0; $i < 16; $i++) { 
		$Knl = new Bit($LK);
		$Knr = new Bit($RK);
		if ($i == 0 || $i == 1 || $i == 8 || $i == 15) {
			$Knl->cycleMove(1);
			$Knr->cycleMove(1);
		} else {
			$Knl->cycleMove(2);
			$Knr->cycleMove(2);
		}
		$ke2 = $Knl->byte . $Knl->byte;
		$l = strlen($ke2);
		$ke3 = "";
		for ($j=0; $j < $l; $j++) { 
			if ($j < 48) {
				$ke3 .= $ke2[$j];
			}
		}
			
		$rl = des_round($LN, $RN, $ke3, $i);
		$LN = $rl[0];
		$RN = $rl[1];
	}
		
	$enc = $RN . $LN;
	#print(len(LN))      
	return $enc;
}


function des_encrypt_block($block, $key){
	$start = permute($block, $GLOBALS['initial_permutation']);
	$encrypted = feistel_function($start, $key);
	#print(len(encrypted))
	$end = permute($encrypted, $GLOBALS['final_permutation']);
	return $end;
}

function des_encrypt($message, $key) {
	$binary = implode(' ', array_map(function($x) {
		return str_pad(decbin(ord($x)), 8, "0", STR_PAD_LEFT);
	}, str_split($message)));

	$array = explode(" ", $binary);
	$byter = [];
	get8bit($array, $byter);
	
	$blocks1 = [];
	$long = count($byter);
	for ($i=0; $i < $long / 8; $i++) {
		$array1 = []; 
		for ($j=0; $j < 8; $j++) { 
			if (!empty($byter[(($i*8)+$j)])) {
				array_push($array1, $byter[(($i*8)+$j)]);
			} else {
				array_push($array1, "00000000");
			}
		}
		array_push($blocks1, $array1);
	}

	$encer = [];
	foreach ($blocks1 as $blk64) {
		$string = "";
		foreach ($blk64 as $item) {
			$string .= $item;
		}
		$encrypted1 = des_encrypt_block($string, $key);
		array_push($encer, $encrypted1);
	}

	$enderString = "";
	foreach ($encer as $item) {
		$enderString .= $item;
	}	

	return $enderString;
}

/*
$array1 = des_encrypt($text, "key");

$encs = "";

foreach ($array1 as $item) {
	$encs .= $item;
}

$encs1 = new Bit($encs);
echo $encs1->GetHex();
*/
/*
$array1 = des_encrypt($encs, "key");



*/
?>