<?php
	require_once '../head.php';
	require_once '../footer.php'; 
	require_once '../db/db.php';
	ShowHeader("");

	$id = $_GET['news'];
	$data = Search("news", $id);	
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
		<div>
			<p>
				<?=$data->preview?>	
			</p>
			<p>
				<?=$data->detail?>	
			</p>
			
		</div>
	</div>
	<!--<div class="col-md-3"></div>-->
</div>


<?php
	ShowFooter("");
?>