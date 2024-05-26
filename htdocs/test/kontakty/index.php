<?php
	require_once '../head.php';
	require_once '../footer.php';
	require_once '../db/db.php';
	ShowHeader("");
?>

<!--Content-->
<div id="content" class="d-flex justify-content-center py-3">
	<!--Banner-->
	<div class="row">
		<div class="banner col-md-12" style="clear: both;">
			<div style="height: 80%;"></div>
			<div class="signer py-3">
				<h2>
					Магазин:
				</h2>
				<p> это лучший магазин сборок Windows с инструментами для комфортного использования.</p>
				<a type="button" href="#footer" class="buttn btn btn-primary">
					Learn more
				</a>
			</div>
		</div>
	</div>
	<hr>
	<!--Myblock-->
	<div class="myblock">
		<section class="wrapper style1 d-flex" style="height: 450px; align-items: center; align-content: center;">
			<div class="container">
				<div class="row gtr-200">
					<section class="col-4 col-12-narrower">
						<div class="box highlight">
							<div class="d-flex justify-content-center py-3">
								<div class="bord d-flex justify-content-center py-3">
									<div class="icons d-flex justify-content-center py-3">
										<i class="icon fa brands major fa-windows fa-2x"></i>
									</div>
								</div>
							</div>
							<h3 class="text-center">Кто может получить наши сборки ОС?</h3>
							<p style="font-size: 18px;">Любой человек, проживающий в РФ может получить бесплатно или приобрести наши продукты. Это зависит только от вас и вашего мнения, которое мы ценим.</p>
						</div>
					</section>
					<section class="col-4 col-12-narrower">
						<div class="box highlight">
							<div class="d-flex justify-content-center py-3">
								<div class="bord d-flex justify-content-center py-3">
									<div class="icons d-flex justify-content-center py-3">
										<i class="icon fa solid major fa-headset fa-2x"></i>
									</div>
								</div>
							</div>
							<h3 class="text-center">Как можно получить поддержку?</h3>
							<p style="font-size: 18px;">Поддержку можно получить по телефону, через почту, или через наш сервис <a href="#footer">здесь</a>. Все мои контактные данные внизу, можете написать.</p>
						</div>
					</section>
					<section class="col-4 col-12-narrower">
						<div class="box highlight">
							<div class="d-flex justify-content-center py-3">
								<div class="bord d-flex justify-content-center py-3">
									<div class="icons d-flex justify-content-center py-3	">
										<i class="icon fa solid major fa-thumbs-up fa-2x"></i>
									</div>
								</div>
							</div>
							<h3 class="text-center">Спасибо за Ваш выбор.</h3>
							<p style="font-size: 18px;">Мы всегда рады вам и готовы предоставить лучшие продукты. В качестве благодарности первые 30 дней мы предоставляем установку наших продуктов бесплатно НАВСЕГДА.</p>
						</div>
					</section>
				</div>
			</div>
		</section>
		<hr style="margin-bottom: 0px;">
		<!--
		<hr style="margin-bottom: 0px;">
		<section class="wrapper style2 d-flex justify-content-center py-3" style="font-size: 25px; height: 700px !important; align-items: center; align-content: center; clear: both; background-color: lightgray;">
			<div class="" style="height: 100%; width: 100%;">
				<header class="major text-center" style="height: 100%; width: 100%;">
					<div id="map" style="height: 100%;"></div>
				</header>
			</div>
		</section>
		<hr>
		-->
		<section class="wrapper style1 d-flex" style="height: 400px; align-items: center; align-content: center;">
			<div class="container">
				<div class="row" style="width: 100%;">
					<section class="col-6 col-12-narrower" style="width: 50% !important;">
						<div class="box post" style="margin-bottom: 10px;">
							<div class="inner d-block" style="align-content: center;">
								<h3>Контакты:</h3>
								<p>
									<div class="col-md-6">
										<ul class="list-group">
											<li class="list-group-item">Номер телефона: <a href="tel: +79093704150;">+7(909)-370-41-50</a></li>
											<li class="list-group-item">Почта: <a href="mailto: nthackerstore@mail.ru;">nthackerstore@mail.ru</a></li>
										</ul>
									</div>	
								</p>
							</div>
						</div>
					</section>
					<section class="col-6 col-12-narrower" style="width: 50% !important;">
						<div class="box post" style="margin-bottom: 10px;">
							<div class="inner d-block" style="align-content: center;">
								<h3>Соц. сети</h3>
								<p>
									<div class="col-md-6">
										<ul class="list-group">
											<li style="margin-right: 10px;" class="list-group-item">
												<a href="http://github.com/NThacker5246" target="_blank">Github</a>
											</li>
											<li style="margin-right: 10px;" class="list-group-item">
												<a href="http://vk.com/id801118006" target="_blank">VK</a>
											</li>
											<li style="margin-right: 10px;" class="list-group-item">
												<a href="https://www.youtube.com/@NThacher" target="_blank">Youtube</a>
											</li>
											<li style="margin-right: 10px;" class="list-group-item">
												<a href="http://t.me/nthacker1" target="_blank">Telegram канал</a>
											</li>
										</ul>
									</div>
								</p>
							</div>
						</div>
					</section>
				</div>
			</div>
		</section>
		<hr style="margin-bottom: 0px;">
		<section id="cta" class="wrapper style3 d-flex justify-content-center py-3" style="background-color: #427ef5; color: white; height: 300px; align-items: center; align-content: center">
			<div class="container d-flex justify-content-center py-3" >
				<header class="d-flex justify-content-center py-3">
					<h2 style="font-size: 40px !important;">Are you ready to continue your quest?</h2>
					<a href="#" class="button btn btn-light quest" style="border: 3px solid black; font-size: 25px; !important; margin-left: 15px;">Insert Coin</a>
				</header>
			</div>
		</section>	
	</div>
	<script type="text/javascript" src="maps.js"></script>
</div>

<?php
	ShowFooter("");
?>