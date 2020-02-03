<?php
	include("controller/db.php");
	include("controller/models.php");
	
	$category = new Category();
	$all_category = $category->getAll();
	$all_category = json_decode($all_category);

	foreach ($all_category as $category) {
		echo $category->cat_name."<br />";
	}

?>