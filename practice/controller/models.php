<?php
	class Books extends Db {
		private $table = "books_tbl",
				$id,
				$title,
				$description,
				$author,
				$genre,
				$type,
				$date_published,
				$date_added,
				$status;
		
		public function getAll() {
			$stmt = "SELECT * FROM ".$this->table."";
			$stmt = $this->connect()->query($stmt);

			$books = array();

			while ($book = $stmt->fetch()) {
				$books[] = $book;
			}

			return json_encode($books);
		}
	}

	class Category extends Db {

		public $table = "category_tbl",
				$id,
				$name,
				$description,
				$date_added;

		public function create(){
			$stmt = "INSERT INTO ".$this->table." 
				SET 
				cat_name = :name,
				cat_description = :description
			";

			$stmt = $this->connect()->prepare($stmt);

			$name = $this->name;
			$description = $this->description;

			$stmt->bindParam(':name', $name);
			$stmt->bindParam(':description', $description);

			$stmt->execute();
		}

		public function getAll() {
			$stmt = "SELECT * FROM ".$this->table."";
			$stmt = $this->connect()->query($stmt);

			$categories = array();

			while ($category = $stmt->fetch()) {
				$categories[] = $category;
			}

			return json_encode($categories);
		}
	}
?>