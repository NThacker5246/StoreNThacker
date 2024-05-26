<?php
	
	function AddUser($name='', $nickname='', $password='', $rights='', $require_to_change_pwd='')
	{
		$array = array("username" => $nickname, "name" => $name, "pwd" => $password, "rights" => $rights, "change_pwd" => $require_to_change_pwd);
		$user = (object) $array;
		$current = file_get_contents("../users/usrtable.json");
		$users1 = json_decode($current);
		$users1->users[count($users1->users)] = $user;
		var_dump($users1);
		$table = fopen("../users/usrtable.json", "w");
		$json = json_encode($users1);
		$result_table = fwrite($table, $json);

	}

	function Login($nickname='', $password='')
	{
		$current = file_get_contents("../users/usrtable.json");
		$users1 = json_decode($current);
		for ($i=0; $i < count($users1->users); $i++) { 
			$cu = $users1->users[$i];
			if ($cu->username == $nickname) {
				if ($cu->pwd == $password) {
					if ($cu->change_pwd == "false") {
						return true;
					} else {
						echo "<form action=\"../admin/change_pwd.php\" method=\"POST\"><input type=\"hidden\" name=\"username\" value=\"" . $cu->username . "\"><input type=\"password\" name=\"pwd1\" placeholder=\"Новый пароль\"><input type=\"password\" name=\"pwd2\" placeholder=\"Подтвердите пароль\"><button type=\"submit\">Зайти</button></form>";
					}
				} else {
					echo "Incorrect password";
					return false;
				}
			}
			var_dump($cu);
		}
		return false;
	}

	
?>