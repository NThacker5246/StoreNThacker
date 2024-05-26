<?php
	require_once '../head.php';
	require_once '../footer.php'; 
	require_once '../db/db.php';
	require_once '../bar.php';
	ShowHeader("");

	$id = $_GET['service'];
	$data = Search("service", $id);	
?><!--
	<video src="$dat->videolink"></video>;
	<p id="detail">$dat->detail</p>;
	<p id="detail_picture"><img src="$dat->detail_picture"></p>;
-->

<div class="row">
	<div class="col-md-9">
		<h2 class="Title"><?=$data->name?></h2>
		<p class="detail-picture"  id="detail_picture">
			<img src="<?=$data->detail_picture?>">
		</p>
		<p>
			<a href="<?=$data->pricelist?>" download="">Скачать прайслист</a>
		</p>
		<div>
			<p>
				<?=$data->preview?>	
			</p>
			<p>
				<?=$data->detail?>	
			</p>
			<p>Средняя цена на услугу: <?=$data->price?> <i class="fa fa-rub" aria-hidden="true"></i></p>
		</div>
	</div>
	<?php
		SBar();
	?>
</div>


<?php
	ShowFooter("");
?>