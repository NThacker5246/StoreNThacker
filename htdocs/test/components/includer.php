<?php

	if (file_exists("../components/includer.php")) {
		require_once '../components/catalog/template.php';
		require_once '../components/menu/template.php';
		require_once '../components/infoblock/template.php';
	} else {
		require_once 'components/catalog/template.php';
		require_once 'components/menu/template.php';
		require_once 'components/infoblock/template.php';
	}

	function IncludeComponent($name, $template)
	{
		switch ($name) {
			case 'menu':
				make_menu($template);
				break;

			case 'catalog':
				make_catalog($template);
				break;

			case 'infoblock':
				make_infoblock($template);
				break;
			
			default:
				echo "Not found component $name";
				break;
		}
	}
?>