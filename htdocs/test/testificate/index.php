<?php 
	require_once "../head.php"; 
	require_once "../footer.php"; 
	require_once "../db/db.php"; 
	require_once "../components/includer.php"; 
	ShowHeader(""); 
?>

<?php
	IncludeComponent("catalog", "../templates/catalog/tester.json")
?>

<?php 
	ShowFooter(""); 
?>