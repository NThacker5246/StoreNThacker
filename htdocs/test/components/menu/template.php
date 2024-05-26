<?php
	function make_menu($template)
	{
		$json = file_get_contents($template);
		$template = json_decode($json);
		$names = $template->array;
		$links = $template->links;
		echo "<ul style=\"cursor: pointer;\" class=\"d-flex justify-content-center py-3\">";
		for ($i=0; $i < count($names); $i++){
			echo "<li class=\"menu__item\"><a id=\"word\" href=\"$links[$i]\">$names[$i]</a></li>";
		}
		echo "</ul>";
	}
?>
