<?php
	require_once '../head.php';
	require_once '../footer.php'; 
	require_once '../db/db.php';
	ShowHeader("");

	$id = $_GET['tovar'];
	$data = Search("goods", $id);
	//var_dump($data);
?>

<div class="row">
	<div class="col-md-9">
		<h2 class="Title"><?=$data->name?></h2>
		<p class="detail-picture">
			<img src="<?=$data->detail_picture?>">
		</p>
		<div>
			<hr style="margin: 0px; color: black; height: 3px;">
			<p style="border: 1px solid black; width: 75px; height: 25px; margin: 0px;">Описание</p>
			<p>
				<?=$data->detail?>	
			</p>
		</div>
		<p><b><?=$data->price?> <i class="fa fa-rub" aria-hidden="true"></i></b></p>
		<?php
			$json = file_get_contents("../tovary/props.json");
			$obj = json_decode($json);
			for ($i=0; $i < count($obj->data); $i++) { 
				$prp_id = $obj->data[$i]->id;
				$arr = (array) $data->props;
				if ($obj->data[$i]->type == "str") {
					echo $obj->data[$i]->name . ": " . $arr[$prp_id];
				} elseif ($obj->data[$i]->type == "int") {
					echo $obj->data[$i]->name . ": " . $arr[$prp_id];
				} elseif ($obj->data[$i]->type == "bool") {
					if ($arr[$prp_id] == true) {
						echo $obj->data[$i]->name . ":" . " Да";
					} else {
						echo $obj->data[$i]->name . ":" . " Нет";
					}
				} elseif ($obj->data[$i]->type == "file") {
					//echo($obj->data[$i]->name);
					echo "<a href=\"$arr[$prp_id]\" download=\"\">Скачать" . ": " . $obj->data[$i]->name . "</a>"; // $obj->data[$i]->name
				}
				echo "<br>";
				
			}
			//
		?>
		<form action="save.php" method="GET">
			<input type="hidden" name="Basket" value="<?=$data->id?>">
			<button type="submit" class="btn btn-secondary" aria-pressed="true" style="border: 2px solid black; border-radius: 10px;">В корзину</button>
		</form>
		<br>
		<button type="button" id="mshow" style="margin-bottom: 10px;"class="btn btn-info" aria-pressed="true" style="border: 2px solid black; border-radius: 10px;">Купить</button>
	</div>	
</div>

<div id="window" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Оплата</h5>
				<button type="button" class="close" data-dismiss="modal" id="close">
					&times;
				</button>
			</div>
			<div class="d-flex">
				<form action="pay/pay.php" method="POST" class="text-right">
					<!--<input type="text" name="num" placeholder="Номер карты (записывать в сплошную пример: 1234567891011121)">
					<br>
					<input type="password" name="cvc" placeholder="CVC-code (example: 123)">
					<br>
					<input type="submit" name="btn" class="btn btn-primary">
					<br>-->
					<div class="card" style="width: 473.2px; height: 284.7px; border: 5px solid black; border-radius: 5px; margin: 12px;">
						<div style="width: 432.2; height: 52px; background-color: darkgray;" class="card-header">
						</div>
						<!--?php
							setcookie("id_tr", $data->id, time() + 2590000, '/');
						?-->
						<hr style="margin: 0px;">
						<div class="card-body">
							<input type="hidden" name="id_tr" value="<?=$data->id?>">
							<p style="margin-left: 250px; margin-top: 0px; margin-bottom: 0px;">CVC</p>
							<input type="password" name="cvc" placeholder="CVC-code, example: 123" style="margin-left: 250px;">
							<p style="margin-top: 0px; margin-bottom: 0px;">Номер карты:</p>
							<input type="text" name="num" placeholder="Номер карты (пример: 1234567891011121)" style="width: 324px; margin-top: 0px;">     MIR
							<input type="text" name="phone" placeholder="Номер телефона">
							<input type="text" name="name" placeholder="Имя">	
						</div>
						<div class="card-footer">
							<input type="submit" name="btn" class="btn btn-primary">
							<br>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal" id="close2">
					Закрыть
				</button>
				<form action="save.php" method="GET">
					<input type="hidden" name="Basket" value="<?=$data->id?>">
					<button type="submit" class="btn btn-success">Сохранить в корзине</button>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script type="text/javascript" src="block.js"></script>

<?php 
	ShowFooter("<script type=\"text/javascript\" src=\"block.js\"></script>");
?>