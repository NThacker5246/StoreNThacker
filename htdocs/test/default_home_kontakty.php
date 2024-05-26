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
		<section class="wrapper style1 d-flex" style="height: 750px; align-items: center; align-content: center;">
			<div class="container">
				<div class="row gtr-200">
					<section class="col-4 col-12-narrower">
						<div class="box highlight">
							<div class="d-flex justify-content-center py-3">
								<div class="bord d-flex justify-content-center py-3">
									<div class="icons d-flex justify-content-center py-3">
										<i class="icon fa solid major fa-paper-plane fa-2x"></i>
									</div>
								</div>
							</div>
							<h3 class="text-center">This Is Important</h3>
							<p style="font-size: 18px;">Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
						</div>
					</section>
					<section class="col-4 col-12-narrower">
						<div class="box highlight">
							<div class="d-flex justify-content-center py-3">
								<div class="bord d-flex justify-content-center py-3">
									<div class="icons d-flex justify-content-center py-3">
										<i class="icon fa solid major fa-pencil-alt fa-2x"></i>
									</div>
								</div>
							</div>
							<h3 class="text-center">Also Important</h3>
							<p style="font-size: 18px;">Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
						</div>
					</section>
					<section class="col-4 col-12-narrower">
						<div class="box highlight">
							<div class="d-flex justify-content-center py-3">
								<div class="bord d-flex justify-content-center py-3">
									<div class="icons d-flex justify-content-center py-3	">
										<i class="icon fa solid major fa-wrench fa-2x"></i>
									</div>
								</div>
							</div>
							<h3 class="text-center">Probably Important</h3>
							<p style="font-size: 18px;">Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
						</div>
					</section>
				</div>
			</div>
		</section>
		<hr style="margin-bottom: 0px;">
		<section class="wrapper style2 d-flex justify-content-center py-3" style="font-size: 25px; height: 500px !important; align-items: center; align-content: center; clear: both; background-color: lightgray; height: 200px;">
			<div class="container d-flex justify-content-center py-3">
				<header class="major text-center" style="">
					<h2 style="font-size: 40px !important;">A gigantic heading you can use for whatever</h2>
					<hr>
					<p>With a much smaller subtitle hanging out just below it</p>
				</header>
			</div>
		</section>
		<hr>
		<section class="wrapper style1 d-flex" style="height: 400px; align-items: center; align-content: center;">
			<div class="container">
				<div class="row" style="width: 100%;">
					<section class="col-6 col-12-narrower" style="width: 50% !important;">
						<div class="box post" style="margin-bottom: 10px;">
							<a href="#" class="image left" style="float: left; margin: 10px; margin-top: 0px;"><img src="/photos/125.png" alt=""></a>
							<div class="inner d-block" style="align-content: center;">
								<h3>The First Thing</h3>
								<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
							</div>
						</div>
					</section>
					<section class="col-6 col-12-narrower" style="width: 50% !important;">
						<div class="box post" style="margin-bottom: 10px;">
							<a href="#" class="image left" style="float: left; margin: 10px; margin-top: 0px;"><img src="/photos/125.png" alt=""></a>
							<div class="inner d-block" style="align-content: center;">
								<h3>The Second Thing</h3>
								<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
							</div>
						</div>
					</section>
				</div>
				<div class="row" style="width: 100%;">
					<section class="col-6 col-12-narrower" style="width: 50% !important;">
						<div class="box post" style="margin-bottom: 10px;">
							<a href="#" class="image left" style="float: left; margin: 10px; margin-top: 0px;"><img src="/photos/125.png" alt=""></a>
							<div class="inner d-block" style="align-content: center;">
								<h3>The Third Thing</h3>
								<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
							</div>
						</div>
					</section>
					<section class="col-6 col-12-narrower" style="width: 50% !important;">
						<div class="box post" style="margin-bottom: 10px;">
							<a href="#" class="image left" style="float: left; margin: 10px; margin-top: 0px;"><img src="/photos/125.png" alt=""></a>
							<div class="inner d-block" style="align-content: center;">
								<h3>The Fourth Thing</h3>
								<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
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
</div>

<?php
	ShowFooter("");
?>