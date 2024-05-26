<?php
	function SBar()
	{
		$ads = file_get_contents("../ads/ads.json");
		//var_dump($ads);
		$ads_js = json_decode($ads);
		//var_dump($ads_js);
		$ad = $ads_js->ads[(mt_rand(1, count($ads_js->ads))-1)]; 

		echo "
			<div class=\"col-md-3\"  style=\"border-left: 5px solid black; border-top: 2px solid black; padding: 0px; height: 100% !important; border-bottom: 3px solid black; margin: 0px !important; float: right;\">
				<div>
					<h3>Substring</h3>
					<p style=\"margin: 0px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				<div>
					<ul class=\"list-group\" style=\"margin: 1px;\">
						<li class=\"list-group-item\">Lorem ipsum</li>
						<li class=\"list-group-item\">Dolor sit amet</li>
						<li class=\"list-group-item\">Consectetur adipisicing elit</li>
						<li class=\"list-group-item\">Sed do eiusmod</li>
					</ul>
				</div>
				<div>
					<h3>Sub</h3>
				</div>
				<div>
					<p style=\"margin: 0px;\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<br>
				<div>
					<button id=\"read_more\" type=\"button\" class=\"btn btn-secondary\">Read More</button>
				</div>
				<br>
				<hr>
				<div class=\"yandex-bar\">
					<a href=\"$ad->link\">
						<img src=\"$ad->img\">
					</a>
				</div>
			</div>
		";
	}
?>
