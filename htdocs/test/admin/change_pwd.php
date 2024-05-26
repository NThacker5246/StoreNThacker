<?php
	$pwd1 = $_POST["pwd1"];
	$pwd2 = $_POST["pwd2"];
	$username = $_POST["username"];
	$file = json_decode(file_get_contents("../users/usrtable.json"));

	if ($pwd1 == $pwd2) {
		for ($i=0; $i < count($file->users); $i++) { 
			if($file->users[$i]->username == $username){
				$file->users[$i]->password = $pwd1;
				setcookie("user", $cu->nickname, time() + 21600, "/");
				header("Location: ../admin");
			}
		}
	}

?>