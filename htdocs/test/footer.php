<?php
	function ShowFooter($script='')
	{
		echo "
			<div class=\"footer\" id=\"footer\" role=\"contentinfo\" style=\"clear: both;\">
				<hr>
				<div>
					<div class=\"container\">
						<div class=\"row\">
							<section class=\"col-3 col-6-narrower col-12-mobilep\">
								<h3>Links to Stuff</h3>
								<ul class=\"links\">
									<li class=\"list-group-item stuf-links text-left;\"><a href=\"#\">Mattis et quis rutrum</a></li>
									<li class=\"list-group-item stuf-links text-left;\"><a href=\"#\">Suspendisse amet varius</a></li>
									<li class=\"list-group-item stuf-links text-left;\"><a href=\"#\">Sed et dapibus quis</a></li>
									<li class=\"list-group-item stuf-links text-left;\"><a href=\"#\">Rutrum accumsan dolor</a></li>
									<li class=\"list-group-item stuf-links text-left;\"><a href=\"#\">Mattis rutrum accumsan</a></li>
									<li class=\"list-group-item stuf-links text-left;\"><a href=\"#\">Suspendisse varius nibh</a></li>
									<li class=\"list-group-item stuf-links text-left;\"><a href=\"#\">Sed et dapibus mattis</a></li>
								</ul>
							</section>
							<section class=\"col-3 col-6-narrower col-12-mobilep\">
								<h3>More Links to Stuff</h3>
								<ul class=\"links\">
									<li class=\"list-group-item stuf-links text-left;\"><a href=\"#\">Duis neque nisi dapibus</a></li>
									<li class=\"list-group-item stuf-links text-left;\"><a href=\"#\">Sed et dapibus quis</a></li>
									<li class=\"list-group-item stuf-links text-left;\"><a href=\"#\">Rutrum accumsan sed</a></li>
									<li class=\"list-group-item stuf-links text-left;\"><a href=\"#\">Mattis et sed accumsan</a></li>
									<li class=\"list-group-item stuf-links text-left;\"><a href=\"#\">Duis neque nisi sed</a></li>
									<li class=\"list-group-item stuf-links text-left;\"><a href=\"#\">Sed et dapibus quis</a></li>
									<li class=\"list-group-item stuf-links text-left;\"><a href=\"#\">Rutrum amet varius</a></li>
								</ul>
							</section>
							<section class=\"col-6 col-12-narrower section-form-support\">
								<h3>Написать нам</h3>
								<form method=\"POST\" action=\"/send.php\">
									<div class=\"row gtr-50\">
										<div class=\"col-6 col-12-mobilep\">
											<input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name\" class=\"input1\">
										</div>
										<div class=\"col-6 col-12-mobilep\">
											<input type=\"email\" name=\"email\" id=\"email\" placeholder=\"Email\" class=\"input1\">
										</div>
										<div class=\"col-12\">
											<textarea name=\"message\" id=\"message\" class=\"input12\" placeholder=\"Message\" rows=\"5\"></textarea>
										</div>
										<div class=\"col-12\">
											<ul class=\"actions\">
												<li id=\"send\"><input type=\"submit\" class=\"button alt btn btn-light mail-send\" value=\"Send Message\"></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
						</div>
					</div>
				<div>
				<br>
				<div class=\"text-center\"><b style=\"font-size: 20px;\">Links:</b></div>
				<div class=\"d-flex justify-content-center py-3\">	
					<div class=\"d-inline-flex\">
						<div style=\"margin-right: 10px;\"><a href=\"http://github.com/NThacker5246\" target=\"_blank\" class=\"list-group-item\"><i class=\"icon brands fa fa-github fa-4x\" aria-hidden=\"true\"></i></a></div>
						<div style=\"margin-right: 10px;\"><a href=\"http://vk.com/id801118006\" target=\"_blank\" class=\"list-group-item\"><i class=\"icon brands fa fa-vk fa-4x\" aria-hidden=\"true\" style=\"color: #038cfc;\"></i></a></div>
						<div style=\"margin-right: 10px;\"><a href=\"https://www.youtube.com/@NThacher\" target=\"_blank\" class=\"list-group-item\"><i class=\"icon brands fa fa-youtube-play fa-4x\" aria-hidden=\"true\" style=\"color: red;\"></i></a></div>
						<div style=\"margin-right: 10px;\"><a href=\"http://t.me/nthacker1\" target=\"_blank\" class=\"list-group-item\"><i class=\"icon brands fa fa-telegram fa-4x\" aria-hidden=\"true\" style=\"color: #038cfc;\"></i></a></div>
					</div>
				</div>
				<div class=\"text-center\"><p>&COPY; NThacher's proj</p></div>
				<br>
				<div class=\"\"></div>
			</div>
			<script src=\"https://code.jquery.com/jquery-3.7.0.min.js\"></script>
			<script src=\"https://code.jquery.com/ui/1.11.2/jquery-ui.js\"></script>
			<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz\" crossorigin=\"anonymous\"></script>
			<script type=\"text/javascript\" src=\"/finder.js\"></script>
			<script type=\"text/javascript\" src=\"/admin/terminal.js\"></script>
			<script type=\"text/javascript\" src=\"/admin/explorer.js\"></script>
			<script src=\"https://kit.fontawesome.com/0326603923.js\" crossorigin=\"anonymous\"></script>
			$script
			</body>
			</html>
		";
	}

?>

