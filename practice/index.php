<!DOCTYPE html>
<?php
	require ("controller/db.php");
	require ("controller/models.php");
?>
<html>
	<head>
		<title></title>
	</head>
	<body>

		<?php
			$books = new Books();
			$all_books = $books->getAll();
			$all_books = json_decode($all_books);

			foreach ($all_books as $book) {
				echo $book->book_id."<br />";
			}
		?>

		<form method="POST" id="add_category_form">
			<input type="text" name="catname" placeholder="Category Name">
			<input type="text" name="catdescription" placeholder="Description">	
			<input type="submit" value="Save">
		</form>

		<div id="category_div">
			
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>

		<script type="text/javascript">

			$("#add_category_form").submit(function(e){
				e.preventDefault();
				var formContent = $(this).serialize();

				$.ajax({
					url: "create.php",
					method: "POST",
					data: formContent,
					error: function(msg){
						alert("error!");
					},
					success: function(msg){
						
					},
				});



			});

		</script>
	</body>
</html>