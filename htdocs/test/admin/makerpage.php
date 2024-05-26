<?php
	
	$nm = $_POST["nameof"];
	$dirname = $_POST["name"];
	$infocheck = $_POST['infoblocks'];
	$way = "../$dirname";
	mkdir($way);
	$text = <<<END
	<?php 
		require_once "../head.php"; 
		require_once "../footer.php"; 
		require_once "../db/db.php"; 
		require_once "../components/includer.php"; 
		ShowHeader(""); 
	?>
	
	<?php 
		ShowFooter(""); 
	?>
	END;
	$index = fopen($way . "/index.php", "w");
	if (isset($infocheck)) {
		//$dbname = $_POST['database'];
		$optcom = $_POST['optcom'];
		if(isset($optcom)){
			$component = $_POST['optcomp'];
			$waytemp = $_POST['way'];
			$text =  <<<END
			<?php 
				require_once "../head.php"; 
				require_once "../footer.php"; 
				require_once "../db/db.php"; 
				require_once "../components/includer.php"; 
				ShowHeader(""); 
			?>

			<?php
				IncludeComponent("$component", "$waytemp")
			?>

			<?php 
				ShowFooter(""); 
			?>
			END;
		} 
	} else {
		$optcom = $_POST['optcom'];
		if (isset($optcom)) {
			$text =  <<<END
			<?php 
				require_once "../head.php"; 
				require_once "../footer.php"; 
				require_once "../db/db.php"; 
				require_once "../components/includer.php"; 
				ShowHeader(""); 
			?>
			
			<?php 
				ShowFooter(""); 
			?>
			END;
		
		}
	}
	
	
	print(htmlentities($text));
	$f = fwrite($index, $text);
	if (isset($_POST['menu'])) {
	   // Checkbox is checked
	   // Perform actions or logic for checked checkbox
		if (!empty($nm)) {
			$template = file_get_contents("../templates/menu/menulist/this.json");
			$menu = json_decode($template);
			$menu->links[count($menu->links)] = "/$dirname";
			$menu->array[count($menu->array)] = $nm;
			$file = fopen("../templates/menu/menulist/this.json", "w");
			$fi = fwrite($file, json_encode($menu));
		}
	} else {
	   //Checkbox is not checked
	   // Perform actions or logic for unchecked checkbox
		echo "isn't cheched";
	}
?>