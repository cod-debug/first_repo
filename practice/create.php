<?php
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST');

	include ("controller/db.php");
	include ("controller/models.php");

	$category = new Category();

	$category->name = $_POST['catname'];
	$category->description = $_POST['catdescription'];

	

	$save = $category->create();
	
	if ($save) {
		echo "true";
	} else {
		echo "false";
	}
?>