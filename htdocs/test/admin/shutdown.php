<?php
	$act = $_GET["act"];

	switch ($act) {
		case 'logoff':
			setcookie("user", $_COOKIE["user"], time() - 5, "/");
			header("Location: /");
			break;

		case 'shutdown':
			$all_cookies = file_get_contents("cookies.json");
			$all = json_decode($all_cookies);
			$file = file_get_contents("../users/" . $_COOKIE["user"] . ".json");
			$data = json_decode($file);
			$data->cookies = $_COOKIE;
			var_dump($data);
			$d = json_encode($data);
			$f = fopen("../users/" . $_COOKIE["user"] . ".json", "w");
			$file = fwrite($f, $d);
			$_COOKIE = [];
			echo "Server has stopped work. All your user data saved. You can update. If you want restart you need to click <a href=\"/login\">here</a>";
			break;

		case 'adduserplug':
			setcookie("user2", $_COOKIE["user"], time() + 103669632000, "/");
			$_COOKIE["user"] = "";
			break;

		case 'simlogoff':
			$_COOKIE["user"] = $_COOKIE["user2"];
			setcookie("user2", $_COOKIE["user"], time() - 5, "/");
			break;

		case 'cleanoff':
			$file = file_get_contents("../users/" . $_COOKIE["user"] . ".json");
			$data = json_decode($file);
			$data->cookies = [];
			var_dump($data);
			$d = json_encode($data);
			$f = fopen("../users/" . $_COOKIE["user"] . ".json", "w");
			$file = fwrite($f, $d);
			$_COOKIE = [];
			setcookie("dir", "./", time() + 2689899588, "/");
			$all_cookies = file_get_contents("cookies.json");
			$all = json_decode($all_cookies);
			for ($i=0; $i < count($all->cookies); $i++) { 
				setcookie($all->cookies[$i], "", time() + 29030400, "/");
			}
			break;
		
		default:
			# code...
			break;
	}
?>