<?php
	require_once '../head.php';
	require_once '../footer.php'; 
	require_once '../db/db.php';
	require_once '../bar.php';
	ShowHeader("");

	$id = $_GET['arcticle'];
	$data = Search("arcticle", $id);	
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
			<iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$data->videolink?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen controls=""></iframe>
		</p>
		<div>
			<p>
				<?=$data->preview?>	
			</p>
			<p>
				<?=$data->detail?>	
			</p>
		</div>
	</div>
	<?php
		SBar();
	?>
</div>


<?php
	ShowFooter("");
?>