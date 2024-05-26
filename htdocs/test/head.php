<?php
	
	if (file_exists("../components/includer.php")) {
		require_once '../components/includer.php';
	} else {
		require_once 'components/includer.php';
	}

	header('Content-Type: text/html; charset=utf-8');

	function ShowHeader($style=''){
		echo "
			<!DOCTYPE html>
			<html>
			<head>
				<meta charset=\"utf-8\">
				<title>Shop</title>
				<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
				<link rel=\"stylesheet\" type=\"text/css\" href=\"/style.css\">
				<!--
			        Укажите свой API-ключ. Тестовый ключ НЕ БУДЕТ работать на других сайтах.
			        Получить ключ можно в Кабинете разработчика: https://developer.tech.yandex.ru/keys/
			    -->
			    <script src=\"https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=c0d403ab-e5be-4049-908c-8122a58acf23\" type=\"text/javascript\"></script>
			    <style>
			        .my-hint {
			            display: inline-block;
			            padding: 5px;
			            height: 35px;
			            position: relative;
			            left: -10px;
			            width: 195px;
			            font-size: 11px;
			            line-height: 17px;
			            color: #333333;
			            text-align: center;
			            vertical-align: middle;
			            background-color: #faefb6;
			            border: 1px solid #CDB7B5;
			            border-radius: 20px;
			            font-family: Arial;
			        }
			    </style>
				$style
			</head>
			<body style=\"margin: 0px;\">
				";
				if (file_exists("../finder.php")) {
					require_once '../finder.php';
				} else {
					require_once 'finder.php';
				}
				echo "
				<div class=\"header\" style=\"margin: 0px;\">
					<header class=\"menu\">
						<a href=\"/login\" style=\"float: right;\"><i class=\"fa-solid fa-2x fa-right-to-bracket\"></i></a>
						<div id=\"banner\" class=\"d-flex justify-content-center py-3\">
							<p id=\"baner\"><b>The shop</b></p>
						</div>
						";
						if(file_exists("../templates/menu/menulist/this.json")) {
							IncludeComponent("menu", "../templates/menu/menulist/this.json");
						} else {
							IncludeComponent("menu", "templates/menu/menulist/this.json");
						}
						echo "
					</header>
					<hr style=\"margin: 0px;\">
				</div>
		";
		
	}

						/*
						<ul style=\"cursor: pointer;\" class=\"d-flex justify-content-center py-3\">
							<li class=\"menu__item\"><a id=\"word\" href=\"/\">Home</a>
							</li><li class=\"menu__item\"><a id=\"word\" href=\"/news\">Новости</a>
							</li><li class=\"menu__item\"><a id=\"word\" href=\"/tovary\">Товары</a>
							</li><li class=\"menu__item\"><a id=\"word\" href=\"/uslugi\">Услуги</a>
							</li><li class=\"menu__item\"><a id=\"word\" href=\"/stati\">Cтатьи</a>
							</li><li class=\"menu__item\"><a id=\"word\" href=\"/kontakty\">Контакты</a>
							</li>
						</ul>
						*/

?>