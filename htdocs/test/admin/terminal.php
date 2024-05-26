<?php
	require_once '../db/db.php';
	if (!empty($_GET["command"])) {
		$c = explode(" ", $_GET["command"]);
		if ($c[0] == '$cd') {
			$way = $_COOKIE["dir"];
			if (empty($way)) {
				$way = "";
			}
			if(is_dir($way . $c[1] . "/")) {
				setcookie("dir", $way . $c[1] . "/", time() + 451626162, "/");
			}
		} elseif ($c[0] == '$c') {
			setcookie("dir", "./", time() + 24528745627, "/");
		}
	}


	if (empty($_COOKIE['dir'])) {
		setcookie('dir', '.', time() + 148173571, '/');
	}


	if (!empty($_GET["command"])) {
		$command = $_GET["command"];
		$dir = $_COOKIE["dir"];
		if ($command !== "$") {
			$exp = explode(" ", $command);
			$cmd = $exp[0];
			switch ($cmd) {
				case '$echo':
				for ($i=1; $i < count($exp); $i++) {
					if ($exp[$i] == ">") {
						$str3 = trim($command, '$echo');
						$str2 = trim($str3, $exp[($i + 1)]);
						$str1 = trim($str2, '> ');
						$str = trim($str1);
						$file = fopen($dir . $exp[($i + 1)], "w");
						$fw = fwrite($file, $str);
					} 
					echo $exp[$i] . " ";
				}
					break;

				case '$mkfile':
					$file = fopen($dir . $exp[1], "w");
					break;

				case '$cd':
					if ($exp[1] == "/") {
						$_COOKIE["dir"] = "/";
					}
					if (is_dir($exp[1])) {
						$dir .= $exp[1];
						$dir .= '/';
						$_COOKIE["dir"] = $dir;
						echo($dir);
						
					} else {
						echo "no dir";
					}
					break;

				case '$mkdir':
					if (file_exists($dir . $exp[1])) {
						echo $dir . $exp[1] . "alredy has";
					} else {
						mkdir($dir . $exp[1]);
					}
					break;
				case '$dir':
					$coc = $_COOKIE["dir"];
					$files = scandir("$coc");
					foreach ($files as $file) {
					    echo $file;
					    echo "<br>";
					}
					break;
				case '$c':
					break;
				case '$type':
					if (file_exists($dir . $exp[1])) {
						$text = file_get_contents($dir . $exp[1]);
						echo htmlentities($text);
					}
					break;
				case '$edit':
					$enter = "
";
					if (file_exists($dir . $exp[1])) {
						$text = file_get_contents($dir . $exp[1]);
						$text .= $enter;
						for ($i=2; $i < count($exp); $i++) { 
							$text .= $exp[$i];
							$text .= " ";
						}

						$file =fopen($dir . $exp[1], "w");
						$wr = fwrite($file, $text);
						echo "$text";
					}
					break;
				case '$ren':
					if (file_exists($dir . $exp[1])) {
						rename($dir . $exp[1], $dir . $exp[2]);
					}
					break;

				case '$copy':
					if (file_exists($dir . $exp[1])) {
						$text = file_get_contents($dir . $exp[1]);
						$ws = $dir . $exp[2];
						$file = fopen($ws, "w");
						$write = fwrite($file, $text);
					}
					break;

				case '$delete':
					unlink($dir . $exp[1]);
					break;

				case '$rd':
					rmdir($exp[1]);
					break;

				case '$xcopy':
					if (file_exists($dir . $exp[1])) {
						$text = file_get_contents($dir . $exp[1]);
						$ws = $dir . $exp[2];
						$file = fopen($ws, "w");
						$write = fwrite($file, $text);
						unlink($dir . $exp[1]);
					}
					break;

				case '$db':
					$arg1 = $exp[1];
					switch ($arg1) {
						case 'insert':
							if (!empty($exp[2])) {
									$param = '';
									for ($i=2; $i < count($exp); $i++) { 
										$param .= $exp[$i];
										$param .= " ";
									}
									$par = explode("#", $param);
									$name = trim($par[0]);
									$id = trim($par[1]);
									$preview = trim($par[2]);
									$detail = trim($par[3]);
									$preview_picture = trim($par[4]);
									$detail_picture = trim($par[5]);
									switch ($exp[2]) {
										case 'goods':
											$price = trim($par[6]);
											$proper = json_decode(trim($par[7]));
											$props = $proper->prp;
											$arr = array('name' => $name, 'id' => $id, 'preview' => $preview, 'preview_picture' => $preview_picture, 'detail' => $detail, 'detail_picture' => $detail_picture, 'price' => $price, 'props' => $props);
											DataInsert($exp[2], $arr, $exp[2]);
											break;

										case 'service':
											$price = trim($par[6]);
											$way_to_list = trim($par[7]);
											$arr = array('name' => $name, 'id' => $id, 'preview' => $preview, 'preview_picture' => $preview_picture, 'detail' => $detail, 'detail_picture' => $detail_picture, 'price' => $price, 'pricelist' => $way_to_list);
											DataInsert($exp[2], $arr, $exp[2]);
											break;
										
										case 'arcticle':
											$videolink = trim($par[6]);
											$arr = array('name' => $name, 'id' => $id, 'preview' => $preview, 'preview_picture' => $preview_picture, 'detail' => $detail, 'detail_picture' => $detail_picture, 'videolink' => $videolink);
											DataInsert($exp[2], $arr, $exp[2]);
											break;

										case 'news':
											$arr = array('name' => $name, 'id' => $id, 'preview' => $preview, 'preview_picture' => $preview_picture, 'detail' => $detail, 'detail_picture' => $detail_picture);
											DataInsert($exp[2], $arr, $exp[2]);
											break;

										default:
											if (DB_exists($exp[2])) {
												$proper = json_decode(trim($par[6]));
												$props = $proper->prp;
												$arr = array('name' => $name, 'id' => $id, 'preview' => $preview, 'preview_picture' => $preview_picture, 'detail' => $detail, 'detail_picture' => $detail_picture, 'props' => $props);
												DataInsert($exp[2], $arr, $exp[2]);
											} else {
												echo <<<END
													Syntax: <br>
													\$db insert your_databse Title # DPC Id # Preview Text # Detail Text # Preview Picture # Detail Picture # Price/Props/YT link/ # JSON str/Document
												END;
											}
											break;
									}
								
							}
							break;

						case 'edit':
							if (!empty($exp[2])) {
								$param = '';
								for ($i=2; $i < count($exp); $i++) { 
									$param .= $exp[$i];
									$param .= " ";
								}
								$par = explode("#", $param);
								$name = trim($par[0]);
								$id = trim($par[1]);
								$preview = trim($par[2]);
								$detail = trim($par[3]);
								$preview_picture = trim($par[4]);
								$detail_picture = trim($par[5]);
								switch ($exp[2]) {
									case 'goods':
										$price = trim($par[6]);
										$proper = json_decode(trim($par[7]));
										$props = $proper->prp;
										$array = array('name' => $name, 'id' => $id, 'preview' => $preview, 'preview_picture' => $preview_picture, 'detail' => $detail, 'detail_picture' => $detail_picture, 'price' => $price, 'props' => $props);
										DataEdit('goods', $array, 'goods', $id);
										break;
									
										case 'arcticle':
											$videolink = trim($par[6]);
											$array = array('name' => $name, 'id' => $id, 'preview' => $preview, 'preview_picture' => $preview_picture, 'detail' => $detail, 'detail_picture' => $detail_picture, 'videolink' => $videolink);
											DataEdit('arcticle', $array, 'arcticle', $id);
											break;

										case 'service':
											$price = trim($par[6]);
											$way_to_list = trim($par[7]);
											$arr = array('name' => $name, 'id' => $id, 'preview' => $preview, 'preview_picture' => $preview_picture, 'detail' => $detail, 'detail_picture' => $detail_picture, 'price' => $price, 'pricelist' => $way_to_list);
											DataEdit('service', $arr, 'service', $id);
											break;

										case 'news':
											$arr = array('name' => $name, 'id' => $id, 'preview' => $preview, 'preview_picture' => $preview_picture, 'detail' => $detail, 'detail_picture' => $detail_picture);
											DataEdit('news', $arr, 'news', $id);
											break;

									default:
										if (DB_exists($exp[2])) {
											$proper = json_decode(trim($par[6]));
											$props = $proper->prp;
											$arr = array('name' => $name, 'id' => $id, 'preview' => $preview, 'preview_picture' => $preview_picture, 'detail' => $detail, 'detail_picture' => $detail_picture, 'props' => $props);
											DataEdit($exp[2], $arr, $exp[2], $id);
										} else {
											echo <<<END
												Syntax: <br>
												\$db edit your_databse Title # DPC Id # Preview Text # Detail Text # Preview Picture # Detail Picture # Price/Props/YT link/ # JSON str/Document
											END;
										}
										break;
								}
							}
							break;
						
						case 'create':
							if (!empty($exp[2])) {
								CreateDB($exp[2]);
							}
							break;
						case 'list':
						
							$way_data = "../db/data/table.json";
							$data2 = file_get_contents($way_data);
							$dat = json_decode($data2);
							var_dump($dat);
					
							break;

						case 'read':
							if (!empty($exp[2])) {
								$data1 = ReadData($exp[2]);
								var_dump($data1);
								echo "<br>";
								if (!empty($exp[3])) {
									$ar = (array) $data1;
									$f = file_get_contents("../db/data/" . $ar["$exp[3]"]);
									$j = json_decode($f);
									var_dump($j);
								}
								echo "<br>";
							}
							break;

						default:
							echo <<<END
							DB operations: <br>
							create - create db <br>
							list - list databases <br>
							read - read database <br>
							insert - add in db data <br>

							END;
							break;
					}
					break;
				case '$help':
					echo <<<END
					Hey up, <br>
					This is a terminal in this cms! <br>
					Take a list off commands <br>
					\$echo - prints a text, at 2nd, 3rd, 4th, 5th and more arguments. You aslo can write file at > filenme.registry_exploder <br>
					\$c - goes to ./ <br>
					\$dir - prints file list <br>
					\$type - show file content <br>
					\$mkfile - creates a file
					\$mkdir - creates a directory (folder) <br>
					\$ren - rename file/folder <br>
					\$edit - add an enter symbol and writes text next <br>
					\$db - database operation <br>
					\$delete - deletes file in folder <br>
					I hope you dont break server; <br> 
					Bye,  <br> 
					END;
					break;
				default:
					echo "no has command $cmd type \$help ";
					break;
			}
		}
	}
	
?>