<?php
	echo "<head>
			<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
				<link rel=\"stylesheet\" type=\"text/css\" href=\"/style.css\">
		 </head>";
	$params_json = file_get_contents("../index.json");
	$params_file = json_decode("$params_json");
	$params = $params_file->index;
?>

<!--Content-->
<div id="content" class="d-flex justify-content-center py-3">
	<!--Banner-->
	<div class="row">
		<div class="banner col-md-12" style="clear: both;">
			<div style="height: 80%;"></div>
			<div class="signer py-3">
				<h2>
					<?=$params->banner->title?>
				</h2>
				<p><?=$params->banner->text?></p>
				<a href="<?=$params->banner->link?>" class="buttn btn btn-primary">
					<?=$params->banner->button?>
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
							<h3 class="text-center"><?=$params->myblock->about->first->title?></h3>
							<p style="font-size: 18px;"><?=$params->myblock->about->first->text?></p>
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
							<h3 class="text-center"><?=$params->myblock->about->secon->title?></h3>
							<p style="font-size: 18px;"><?=$params->myblock->about->secon->text?></p>
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
							<h3 class="text-center"><?=$params->myblock->about->third->title?></h3>
							<p style="font-size: 18px;"><?=$params->myblock->about->third->text?></p>
						</div>
					</section>
				</div>
			</div>
		</section>
		<hr style="margin-bottom: 0px;">
		<section class="wrapper style2 d-flex justify-content-center py-3" style="font-size: 25px; height: 500px !important; align-items: center; align-content: center; clear: both; background-color: lightgray; height: 200px;">
			<div class="container d-flex justify-content-center py-3">
				<header class="major text-center" style="">
					<h2 style="font-size: 40px !important;"><?=$params->myblock->graybanner->title?></h2>
					<hr>
					<p><?=$params->myblock->graybanner->text?></p>
				</header>
			</div>
		</section>
		<hr>
		<section class="wrapper style1 d-flex" style="height: 400px; align-items: center; align-content: center;">
			<div class="container">
				<div class="row" style="width: 100%;">
					<section class="col-6 col-12-narrower" style="width: 50% !important;">
						<div class="box post" style="margin-bottom: 10px;">
							<a href="<?=$params->myblock->whyisbest->first->link?>" class="image left" style="float: left; margin: 10px; margin-top: 0px;"><img src="/photos/tovary.png" alt="" title="Наши товары"></a>
							<div class="inner d-block" style="align-content: center;">
								<h3><?=$params->myblock->whyisbest->first->title?></h3>
								<p><?=$params->myblock->whyisbest->first->text?></p>
							</div>
						</div>
					</section>
					<section class="col-6 col-12-narrower" style="width: 50% !important;">
						<div class="box post" style="margin-bottom: 10px;">
							<a href="<?=$params->myblock->whyisbest->secon->link?>" class="image left" style="float: left; margin: 10px; margin-top: 0px;"><img src="/photos/support.png" alt="" title="Поддержка"></a>
							<div class="inner d-block" style="align-content: center;">
								<h3><?=$params->myblock->whyisbest->secon->title?></h3>
								<p><?=$params->myblock->whyisbest->secon->text?></p>
							</div>
						</div>
					</section>
				</div>
				<div class="row" style="width: 100%;">
					<section class="col-6 col-12-narrower" style="width: 50% !important;">
						<div class="box post" style="margin-bottom: 10px;">
							<a href="<?=$params->myblock->whyisbest->third->link?>" class="image left" style="float: left; margin: 10px; margin-top: 0px;"><img src="/photos/stati.png" alt="" title="Статьи по настройке"></a>
							<div class="inner d-block" style="align-content: center;">
								<h3><?=$params->myblock->whyisbest->third->title?></h3>
								<p><?=$params->myblock->whyisbest->third->text?></p>
							</div>
						</div>
					</section>
					<section class="col-6 col-12-narrower" style="width: 50% !important;">
						<div class="box post" style="margin-bottom: 10px;">
							<a href="<?=$params->myblock->whyisbest->forth->link?>" class="image left" style="float: left; margin: 10px; margin-top: 0px;"><img src="/photos/uslugi.png" alt="" title="Спектр услуг"></a>
							<div class="inner d-block" style="align-content: center;">
								<h3><?=$params->myblock->whyisbest->forth->title?></h3>
								<p><?=$params->myblock->whyisbest->forth->text?></p>
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
					<h2 style="font-size: 40px !important;"><?=$params->myblock->bluebanner->title?></h2>
					<a href="<?=$params->myblock->bluebanner->link?>" class="button btn btn-light quest" style="border: 3px solid black; font-size: 25px !important; margin-left: 15px;"><?=$params->myblock->bluebanner->button?></a>
				</header>
			</div>
		</section>	
	</div>
</div>

<?php
	echo "
			<script src=\"https://code.jquery.com/jquery-3.7.0.min.js\"></script>
			<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz\" crossorigin=\"anonymous\"></script>
   			<script src=\"https://kit.fontawesome.com/0326603923.js\" crossorigin=\"anonymous\"></script>
    	  ";

?>